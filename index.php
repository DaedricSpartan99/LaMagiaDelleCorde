<!DOCTYPE HTML>

<html>

	<head>

		<title>La Magia Delle Corde - Bellinzona</title>
		<meta name="keywords" content="magia, corde, bellinzona, anna, maria, bergna">
		<meta name="description" content="La Magia Delle Corde, Bellinzona, Anna Maria Bergna, Via Giuseppe Torti 16A">
		
		<link title="style" media="screen" rel="stylesheet" href="style.css" type="text/css">
		<link title="style" media="screen" rel="stylesheet" href="custom.css" type="text/css">
		<link title="style" media="screen" rel="stylesheet" href="event_show.css" type="text/css">
		<link title="style" media="screen" rel="stylesheet" href="header.css" type="text/css">
		<link title="style" media="screen" rel="stylesheet" href="home.css" type="text/css">

		<?php

			include 'eventi.php';
			$eventlist = customEvents();

		?>

		<script type="text/javascript" src="js/slideshow.js"></script>

	</head>

	<body>
	    
	<div id="cover">

		<div id="header" onmouseover="headerOver()" onmouseout="headerExit()">

			<a id="logolink" href="index.php"><img id="logo" src="res/logo1.png" alt="La magia delle corde" /></a>

			<ul id="menu">

				<li class="up"><a class="link" href="index.php">Home</a></li>
				<li class="down"><a class="link" href="lascuola.php">La scuola</a></li>
				<li class="up"><a class="link" href="corsi.html">Corsi</a></li>
				<li class="down"><a class="link" href="contatti.html">Contatti</a></li>
				<li class="up"><a class="link" href="iscrizione.html">Iscrizione</a></li>

			</ul>

		</div>

		<div id="container">

			<!--<div onmouseover="slideShowOver()" onmouseout="slideShowExit()" id="slideshow">-->

				<!--<button class="arrow" id="leftarrow" onclick="next()">&#10094</button>
				<button class="arrow" id="rightarrow" onclick="next()">&#10095</button>-->

			<div id="slideshow">

				<?php

					generateSlideLinks($eventlist);
				?>

				<div id="eventindex">

					<?php

						generateIndexLinks($eventlist);
					?>

				</div>

			</div>

			<div id="description">

				<p id="poesia" class="testo centrato corsivo">

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
		    
		    <div class="sezione bi-colonna">

		        <a href="lascuola.php" class="squarelink" id="squarelascuola">
		        
		            <h2 class="squaretitle">La scuola</h2>
		            <img class="squareimg" src="res/lascuola.jpg" alt="La Magia Delle Corde - la scuola" />
		        
		            <p class="squaredesc">
		            
		                La scuola in breve
		            
		            </p>
		        </a>
		        
		        <a href="corsi.html" class="squarelink" id="squarecorsi">
		        
		            <h2 class="squaretitle">Corsi</h2>
		            <img class="squareimg" src="res/icorsi.jpeg" alt="La Magia Delle Corde - corsi" />
		        
		            <p class="squaredesc">
		            
		                I corsi in breve
		            
		            </p>
		        </a>
		    
		    </div>

		</div>

		<p id="copyright">

			&#64 Copyright | All Rights Reserved <br>
			Raffaele Ancarola

		</p>

		<script type="text/javascript" src="js/bounds.js"></script>
		<script type="text/javascript" src="js/header.js"></script>
		<script type="text/javascript"> 
		
		    fixMenuLi();
		    headerExit();
		    initSlideshow();
		
		</script>
		
	</div>

	</body>

</html>
