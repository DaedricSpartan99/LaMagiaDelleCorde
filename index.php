<!DOCTYPE HTML>

<html>

	<head>

		<title>La Magia Delle Corde</title>
		<meta name="keywords" content="magia, corde, bellinzona">
		<meta name="description" content="Sito ufficiale de La Magia Delle Corde">
		<link title="style" media="screen" rel="stylesheet" href="style.css" type="text/css">

	</head>

	<body>

		<div id="header">

			<a id="logolink" href="index.html"><img id="logo" src="res/logo1.png" alt="La magia delle corde" /></a>

			<ul id="menu">

				<li class="up"><a class="link" href="index.html">Home</a></li>
				<li class="down"><a class="link" href="lascuola.html">La scuola</a></li>
				<li class="up"><a class="link" href="iscrizione.html">Iscrizione</a></li>
				<li class="down"><a class="link" href="corsi.html">Corsi</a></li>
				<li class="up"><a class="link" href="contatti.html">Contatti</a></li>

			</ul>

		</div>

		<div id="container">

			<div id="slideshow">

				<?php

					include 'eventi.php';
					customEvents();

				?>

			</div>

			<div id="description">

				<p id="poesia" class="testo centrato">

					Nel rotondo crocicchio <br>
					sei fanciulle ballano. <br>
					Tre di carne <br>
					e tre di argento. <br>
					I sogni di un tempo <br>
					le cercano, ma le tiene <br>
					avvinghiate un polifemo d'oro. <br>
					La chitarra! <br> <br>
					(Federico Garcia Lorca)

				</p>

			</div>

		</div>

		<div id="content">

		<!-- Empty in the Homepage -->

		</div>

		<p id="copyright">

			&#64 Copyright | All Rights Reserved <br>
			Raffaele Ancarola

		</p>

		<script type="text/javascript" src="js/bounds.js"></script>
		<script type="text/javascript" src="js/slideshow.js"></script>

	</body>

</html>
