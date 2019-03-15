<?php 

	try
    {
        // On se connecte à MySQL, le nom de la base est PotagerECE et id=nico & password=nico1234
        $bdd_insertion = new PDO('mysql:host=localhost;dbname=PotagerECE;charset=utf8', 'nico','nico1234');
        echo "connexion ok";
    }
	catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
    }
	//Switch to know which table to write in
	switch ($_POST['ID']) {
    case 0:
        $sensorID='sensor_ground_0';
        break;
    case 1:
        $sensorID='sensor_ground_1';
        break;
    case 2:
        $sensorID='sensor_ground_2';
        break;
    case 3:
        $sensorID='sensor_ground_3';
        break;
    case 4:
        $sensorID='sensor_ground_4';
        break;
    case 5:
        $sensorID='sensor_ground_5';
        break;
    case 6:
        $sensorID='sensor_ground_6';
        break;
    case 7:
        $sensorID='sensor_ground_7';
        break;
    case 8:
        $sensorID='sensor_ground_8';
        break;
    case 9:
        $sensorID='sensor_ground_9';
        break;
    case 10:
        $sensorID='sensor_ground_10';
        break;

    default:
        $sensorID='sensor_ground_0';
	}

	//insert the data by POST method into the wanted table of potagerECE database
	$bdd_insertion->exec('INSERT INTO '.$sensorID.' (AIR_HUMIDITY,SOIL_HUMIDITY,TEMPERATURE,HEAT_INDEX) VALUES(\''.$_POST['AIR_HUMIDITY'].'\',\''.$_POST	['SOIL_HUMIDITY'].'\',\''.$_POST['TEMPERATURE'].'\',\''.$_POST['HEAT_INDEX'].'\')');
    
	//finish his task
    exit();

?>

