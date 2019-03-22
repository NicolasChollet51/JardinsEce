<?php

$servername = "localhost";
$username = "nico";
$password = "nico1234";
$dbname = "PotagerECE";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
    die("Connection failed : " . mysqli_connect_error());
}

$result = array();

$result[0] = mysqli_query($conn, "SELECT * FROM sensor_ground_0 ORDER BY id DESC LIMIT 1");
$result[1] = mysqli_query($conn, "SELECT * FROM sensor_ground_1 ORDER BY id DESC LIMIT 1");
$result[2] = mysqli_query($conn, "SELECT * FROM sensor_ground_2 ORDER BY id DESC LIMIT 1");
$result[3] = mysqli_query($conn, "SELECT * FROM sensor_ground_3 ORDER BY id DESC LIMIT 1");


$data = array();

for($i = 0; $i < count($result); $i++)
{
    while ($row = mysqli_fetch_assoc($result[$i]))
    {
        $data[$i] = $row;
    }
}

echo json_encode($data);

?>