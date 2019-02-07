<?php 
	include_once 'connexion.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Connexion BDD</title>
</head>
<body>
	<?php 
		$sql = "SELECT * FROM donnees;";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);

		if($resultCheck > 0){
			while ($row = mysqli_fetch_assoc($result)) {
				echo "Id capteur ".$row['ID capteur']."<br>";
				echo "Température ".$row['Temperature']."<br>";
				echo "Humidité ".$row['Humidite']."<br>";
				echo "Humidité du sol ".$row['Humidite du sol']."<br>";
				echo "Time ".$row['Temps']."<br><br>";
			}
		} 
	?>
</body>
</html>