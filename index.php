<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Site Potager ECE</title>
	<link rel="stylesheet" href="index.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
	<div id="haut">
		<img src="Photo/Top.jpg">
		<b>Potager de l'ECE</b>
	</div>
	<div id="nav">
		<button><a href="#accueil" class="menu">Accueil</a></button>
		<button><a href="#potager" class="menu">Potager</a></button>
		<button><a href="#direct" class="menu">Direct</a></button>
		<button><a href="#a_propos" class="menu">A propos</a></button>
		<button><a href="#donnees" class="menu">Données</a></button>
		<button><a href="#partenaires" class="menu">Partenaires</a></button>
	</div>
	<div id="accueil">
		<h1>Accueil</h1>
		<div class="bloc bloc1">
			<img class="image1" src="Photo/Accueil_1.jpg">
			<div class="texte1"> Texte 1</div>
		</div>
		<div class="bloc bloc2">
			<div class="texte2">Texte 2</div>
			<img class="image2" src="Photo/Accueil_2.jpg">
		</div>
		<div class="bloc bloc3">
			<img class="image3" src="Photo/Accueil_3.jpg">
			<div class="texte3">Texte 3</div>
		</div>
	</div>
	<div id="potager" class="nom">
		<h1>Potager</h1>
		<div class="row">
            
            <div id="container">
                    <div class="image-wrapper">
                        <img id="garden-image" src="GardenWebView/garden.png">
                    </div>

                    <div class="sensor-wrapper" >
                        <div class="sensor" id="sensor1">
                            <img class="sensor-dot" src="GardenWebView/1024px-Location_dot_red.svg.png">
                            <span class="tooltip">
                                <ul class="tooltiplist" id="sensor1TooltipList">
                                    <li class="plant-name">Plantation : Carrotes</li>
                                    <li class="air-humidity">Humidité air : none</li>
                                    <li class="soil-humidity">Humidité sol : none</li>
                                    <li class="temperature">Température : none</li>
                                    <li class="temperature-index">Index chaleur : none</li>
                                </ul>
                            </span>
                        </div>
                    </div>

                    <div class="sensor-wrapper" >
                        <div class="sensor" id="sensor2">
                            <img class="sensor-dot" src="GardenWebView/1024px-Location_dot_red.svg.png">
                            <span class="tooltip" >
                                <ul class="tooltiplist">
                                    <li class="plant-name">Plantation : Tomates</li>
                                    <li class="air-humidity">Humidite air : none</li>
                                    <li class="soil-humidity">Humidite sol : none</li>
                                    <li class="temperature">Temperature : none</li>
                                    <li class="temperature-index">Index chaleur: none</li>
                                </ul>
                            </span>
                        </div>
                    </div>
            </div>
            
            <script src="updateSensorsData.js"></script>
    
			<div class="col-md-4">
				<h3>Informations sur les capteurs</h3>
			</div>
		</div>
	</div>



	<div id="direct" class="nom">
		<h1>Direct</h1>
		<div class="row">
			<section id="vidéo" class="col-md-7">Vidéo</section>
			<section id="choix" class="col-md-3 col-md-offset-2">Choix</section>
		</div>
	</div>




	<div id="a_propos" class="nom">
		<h1>A propos</h1>
		<section class="bloc">Texte du bloc 1</section>
		<section class="bloc">Texte du bloc 2</section>
		<section class="bloc">Texte du bloc 3</section>
	</div>
	<div id="donnees" class="nom">
		<h1>Données</h1>
	</div>
	<div id="partenaires" class="nom">
		<h1>Partenaires</h1>
	</div>
	<footer>
		<div class="row">
			<div id="contact" class="col-md-2">
				<h2>Contact :</h2>
				Email : ngojohn@hotmail.fr <br>
				Facebook : <br>
				Twitter : <br>
			</div>
			<div id="formulaire" class="col-md-5 offset-md-1">
				<h2>Contactez nous !</h2>
				<form>
					<label>Nom : </label><input type="text" name="Nom">
					<label>Prénom : </label><input type="text" name="Prénom"><br>
					<label>Email : </label> <input type="mail" name="email"><br>
					<label>Message : </label> <br><textarea rows="4" cols="70"></textarea>
					<input class="bouton" type="submit" value="Envoyer">
				</form>
			</div>
			<div id="map" class="col-md-4 ">
				<h2>Retrouvez nous !</h2>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.3822819217917!2d2.2866509156393997!3d48.85092027928673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6701b38dcf809%3A0xbe0c8deef61e0f96!2s15+Rue+Sextius+Michel%2C+75015+Paris!5e0!3m2!1sfr!2sfr!4v1546967361795" width="350" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</footer>
</body>
</html>