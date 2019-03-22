
var ajax = new XMLHttpRequest();
var method = "GET";
var url = "getSensorsData.php";
var asynchronous = true;

ajax.open(method,url,asynchronous);
ajax.send();

ajax.onreadystatechange = function()
{
    if(this.readyState == 4 && this.status == 200)
        {
            //Getting the JSON String returned by the PHP and converting back to an Array of Javascript Objects
            var data = JSON.parse(this.responseText);

            //Get all the children nodes in the tooltip list of the first sensor
            var sensorsElements = document.getElementById("sensor1TooltipList").childNodes;

            //Go through all the children and check classes to add the mesurements at the right place
            for(var i = 0; i < sensorsElements.length; i++)
                {
                    if(typeof sensorsElements[i].classList != "undefined")
                    {
                        if(sensorsElements[i].classList.contains("air-humidity")) {sensorsElements[i].innerHTML = "Humidite air : " + data[0].AIR_HUMIDITY;}
                        if(sensorsElements[i].classList.contains("soil-humidity")) {sensorsElements[i].innerHTML = "Humidite sol : " + data[0].SOIL_HUMIDITY;}
                        if(sensorsElements[i].classList.contains("temperature")) {sensorsElements[i].innerHTML = "Temperature : " + data[0].TEMPERATURE;}
                        if(sensorsElements[i].classList.contains("temperature-index")) {sensorsElements[i].innerHTML = "Index chaleur : " + data[0].HEAT_INDEX;}                    
                    }
                }
        }
}