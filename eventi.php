<!DOCTYPE HTML>

<html>

	<head>

		<title>La Magia Delle Corde</title>
		<meta name="keywords" content="magia, corde, bellinzona">
		<meta name="description" content="Sito ufficiale de La Magia Delle Corde">
		<link title="style" media="screen" rel="stylesheet" href="style.css" type="text/css">

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script type="text/javascript" src="js/events.js"> charset="UTF-8" </script>

		<?php

		function listEvents() {

			$website = "/home/lele/Documenti/HtmlFiles/LaMagiaDelleCorde/";

			$out = array();
			$i = 0;

			foreach(glob($website ."eventi", GLOB_ONLYDIR) as $dir) {

    			array_push($out, (("key".strval($i)) => $dir));
    			$i++;
			}

			return $out;
		}
		?>

	</head>

	<body>

		<div id="header">

			<div class="menu">

				<a class="link" id="link1" href="lascuola.html">La scuola</a>
				<a class="link" id="link2" href="eventi.html">Eventi</a>
				<a class="link" id="link3" href="iscrizione.html">Iscriviti</a>
				<a class="link" id="link4" href="corsi.html">Corsi</a>
				<a class="link" id="link5" href="contatti.html">Contatti</a>

			</div>

			<img class="logo" src="res/logo1.png" alt="La magia delle corde" />

		</div>

		<div class="container">

			<div class="content">

				<h1 id="titolo"> Eventi </h1>

			</div>

		</div>

		<script src="js/bounds.js"></script>

		<script>

			var dirs = <?php echo json_encode(listEvents()) ?>;
			customEvents(jQuery.parseJSON(dirs));

		</script>

	</body>

</html>
