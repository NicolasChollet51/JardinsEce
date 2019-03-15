/*
  Soil sensor managment of ECE's garden

  This code is reading data from three sensor, one for air humidity one for temperature and one for soil moisture.
  It then compute the heat index and post all the retrieved data to a web service that mannage the sql database.
  
  The circuit:
  -Lula nodemcu esp8266
  -DHT22 sensor
  -Capacitive soil moisture sensor

  created 2019
  by Nicolas Chollet
  last modified 15 Mars 2019
  by Nicolas Chollet

  This code is in the public domain.

  Visit our website:
  http://www.jardin-electronique.com
  
*/


//Libraries 
#include <DHT.h>
#include <DHT_U.h>
#include <string>
#include <ESP8266WiFi.h>

//SensorID !!!!!----Change the ID to match with the sensor (0 is test sensor)----!!!!

  int id_sensor=0;

//Wifi network information

  const char* ssid = "LAWIFIDESSOURIS";
  const char* password = "NICOMKRONK";
  
  const char* host = "89.156.70.72";


//String to mannage HTTP data message
  String data;
  String data1="ID", data2="&AIR_HUMIDITY=",data3="&SOIL_HUMIDITY=", data4="&TEMPERATURE=", data5="&HEAT_INDEX=";
  
//time managing variable
  int timeSinceLastRead = 0;

//Sensors pins definition
  #define DHTPIN 4     // what digital pin the DHT22 is conected to
  #define DHTTYPE DHT22   // there are multiple kinds of DHT sensors
  const int SOIL_HUMIDITY_SENSOR = A0;
  
//Creation of the DHT object
  DHT dht(DHTPIN, DHTTYPE);

  void setup()
  {
  //Serial initialization
    Serial.begin(9600);
    Serial.setTimeout(2000);
  // Wait for serial to initialize.
    while(!Serial) { } 
    Serial.println("Device Started");
    Serial.println("-------------------------------------");
  
  //Connecting to Wi-fi network
    Serial.printf("Connecting to %s ", ssid);
    WiFi.begin(ssid, password);
      while (WiFi.status() != WL_CONNECTED)
      {
      delay(500);
      Serial.print(".");
      }
    Serial.println(" connected");
  }


  void loop()
  {
  // Report every 30 seconds.
  if(timeSinceLastRead > 3000000) 
    {
      //Read the air humidity
    float air_humidity = dht.readHumidity();
    
    // Read temperature as Celsius 
    float temperature = dht.readTemperature();
    
    // Check if any reads failed and exit early (to try again).
    if (isnan(air_humidity) || isnan(temperature)) 
    {
      Serial.println("Failed to read from DHT sensor!");
      timeSinceLastRead = 0;
      return;
    }
    
    //read the soil humidity
    float soil_humidity = analogRead(SOIL_HUMIDITY_SENSOR);
    
    //compute the heat index
    float heat_index = dht.computeHeatIndex(temperature, air_humidity, false);
    
    //Putting together in a bug string to send the data
    data = data1+id_sensor+data2+air_humidity+data3+soil_humidity+data4+temperature+data5+heat_index;
    Serial.println(data);

    //Creating a WifiClient Object to send request 
    WiFiClient client;
    
    Serial.printf("\n[Connecting to %s ... ", host);

    //Sending the HTTP Request
    if (client.connect(host, 80))
    {
        client.println("POST /insert.php HTTP/1.1");
        client.println("Host: 89.156.70.72");
        client.println("Content-Type: application/x-www-form-urlencoded");
        client.print("Content-Length: ");
        client.println(data.length());
        client.println();
        client.print(data);
        Serial.println("\n[Disconnected]");
      
      //Reading what the page sent to debug potential HTTP responses
      while (client.connected() || client.available())
      {
        if (client.available())
        {
          String line = client.readStringUntil('\n');
          Serial.println(line);
        }
            
      }
    }
    //If connection fails
    else
    {
      Serial.println("connection failed!]");
      client.stop();
    }
    //managing time in a loop
    timeSinceLastRead = 0;
    }
  delay(100);
  timeSinceLastRead += 1000; 
  }
