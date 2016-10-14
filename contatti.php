<!DOCTYPE HTML>

<html>

	<head>

		<title>La Magia Delle Corde</title>
		<meta name="keywords" content="magia, corde, bellinzona">
		<meta name="description" content="Sito ufficiale de La Magia Delle Corde">
		<link title="style" media="screen" rel="stylesheet" href="style.css" type="text/css">

		<script>

		function initMap() {
	
	var uluru = {lat: 46.186603, lng: 9.017648};

    var map = new google.maps.Map(document.getElementById('mappa'), {

        zoom: 14,
        center: uluru
    });

    var marker = new google.maps.Marker({

        position: uluru,
        map: map
    });

}

		</script>

	</head>

	<body>

		<div id="header">

			<div class="menu">

				<a class="link" id="link1" href="index.html">Homepage</a>
				<a class="link" id="link2" href="iscrizione.html">Iscriviti</a>
				<a class="link" id="link3" href="lascuola.html">La scuola</a>
				<a class="link" id="link4" href="eventi.php">Eventi</a>
				<a class="link" id="link5" href="corsi.html">Corsi</a>

			</div>

			<img class="logo" src="res/logo1.png" alt="La magia delle corde" />

		</div>

		<div id="container">

			<div class="content">

				<h1 id="titolo"> Contatti </h1>

				<div id="dati">

					<div class="sinistra">

						<p class="scritto">

							La Magia Delle Corde <br>
							Anna Maria Bergna <br>
							Via Giuseppe Torti 6A <br>
							Bellinzona <br><br>

							Tel: 078 856 26 41 <br>
							E-Mail: anna.maria.bergna&#64gmail.com <br>

						</p>

					</div>

					<div class="a_destra" id="mappa"> </div>

					<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZAgI45PQo9xWPhnE6hjcCob_2vf0T-1o&callback=initMap">
    				</script>


				</div>

			</div>

			<p id="copyright"> &#64 Copyright. All Rights Reserved | By Raffaele Ancarola &#38 Lia Rampazzi </p>

		</div>

		<script src="js/bounds.js"></script>

	</body>

</html>