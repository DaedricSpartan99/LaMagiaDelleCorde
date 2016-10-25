<!DOCTYPE HTML>

<html>

	<head>

		<title>La Magia Delle Corde - Bellinzona</title>
		<meta name="keywords" content="magia, corde, bellinzona">
		<meta name="description" content="Sito ufficiale de La Magia Delle Corde">
		<link title="style" media="screen" rel="stylesheet" href="style.css" type="text/css">

	</head>

	<body>
	    
	<div id="cover">

		<div id="header" onmouseover="headerOver()" onmouseout="headerExit()">

			<a id="logolink" href="index.php"><img id="logo" src="res/logo1.png" alt="La magia delle corde" /></a>

			<ul id="menu">

				<li class="up"><a class="link" href="index.php">Home</a></li>
				<li class="down"><a class="link" href="lascuola.php">La scuola</a></li>
				<li class="up"><a class="link" href="iscrizione.php">Iscrizione</a></li>
				<li class="down"><a class="link" href="corsi.php">Corsi</a></li>
				<li class="up"><a class="link" href="contatti.php">Contatti</a></li>

			</ul>

		</div>

		<div id="container">

			<!--<div onmouseover="slideShowOver()" onmouseout="slideShowExit()" id="slideshow">-->

				<!--<button class="arrow" id="leftarrow" onclick="next()">&#10094</button>
				<button class="arrow" id="rightarrow" onclick="next()">&#10095</button>-->

			<div id="slideshow">

				<?php

					include 'eventi.php';
					customEvents();

				?>

			</div>

			<img id="lascuolaimg" src="res/" alt="Immagine per la scuola"/>

		</div>

		<div id="content">

			<div class="sezione bi-colonna">
			    
			    <h2 class="titolo_sezione">Obiettivi</h2>

				<p class="testo">

					Avvicinare il bambino sin dai 7 anni alla musica suonando la chitarra, in un percorso di esplorazione e scoperta di tutte le sue potenzialit&agrave sonore.
Un approccio globale e creativo permette di scoprire le possibilit&agrave espressive del bambino, di accrescere le sue capacit&agrave di ascolto, il suo senso ritmico, la sua creativit&agrave, in breve: il piacere di fare musica. 
Il corso &egrave rivolto a studenti in et&agrave scolare (dalle elementari all'universit&agrave) e intende fornire competenze musicali sia di carattere formativo/culturale che professionale.
Il corso non esclude gli adulti, offrendo loro la possibilit&agrave di organizzare il proprio percorso di studio secondo le personali motivazioni, esigenze, disponibilit&agrave in termini di tempo. 
Le scelte adottate si svilupperanno all'interno di una precisa organizzazione didattica, sia di tipo amatoriale che professionale.

				</p>
				
				<h2 class="titolo_sezione">La Docente Anna Maria Bergna</h2>

				<p class="testo">

					Ha compiuto gli studi di chitarra con i maestri Eleni Kokkaliari e Ruggero Chiesa nel 1990 presso il Conservatorio "Venturi" di Brescia. Ha seguito corsi di perfezionamento per chitarra con i maestri R.Chiesa e O.Ghiglia.
Nel 1994 si diploma in Didattica della Musica presso il Conservatorio "G.Verdi" di Como, con la tesi: "Un Aspetto del Seicento Comasco: Bottaccio, Rusca, Raimondi e la letteratura per liuto e chitarra, con appendice di trascrizioni inedite". Approfondisce inoltre gli studi in composizione e direzione di coro.
Ha tenuto concerti sia come solista che in varie formazioni cameristiche, per diversi enti e associazioni: Agimus, Compagnia teatrale "Citt&agrave di Como", Amici della Musica di Galliate, Giovent&ugrave Musicale d'Italia, e nel 2001, in qualit&agrave di solista, con l'orchestra sinfonica "Oltenia" di Craiova (Romania).
Nel 1996 ha pubblicato un articolo sulla didattica strumentale per chitarra per la rivista internazionale di cultura e pedagogia musicale "Musica Domani" edizione Ricordi.
Ha seguito corsi di Direzione d'orchestra con il M&#186 Luigi Fabbri.   
Ha tenuto corsi di perfezionamento di chitarra in collaborazione con l'alta Scuola di Perfezionamento pianistico del M&#186 Anna Maria Cigoli.
&Egrave stata docente di chitarra presso la Scuola Civica di Desio e la Scuola Media ad indirizzo musicale, "G.Parini" di Como.
Nel 2010 ha contribuito alla realizzazione del CD: "W la Suisse" con la Doro Doc Band.
Dal 1991 al 2014 ha svolto la propria attivit&agrave quale docente di chitarra presso il Conservatorio della Svizzera Italiana, e dal 2012 &egrave docente di musica strumentale nei Licei Cantonali di Lugano 1 e 2 e Mendrisio.
&Egrave membro della sezione di lingua italiana della Societ&agrave Svizzera di Pedagogia Musicale(SSPM).

				</p>

				<img class="immagine meta" src="res/annamaria.jpg" alt="Annamaria" />

			</div>

		</div>

		<p id="copyright">

			&#64 Copyright | All Rights Reserved <br>
			Raffaele Ancarola

		</p>

		<script type="text/javascript" src="js/bounds.js"></script>
		<script type="text/javascript" src="js/slideshow.js"></script>
		<script type="text/javascript" src="js/header.js"></script>
		<script type="text/javascript"> 
		
		    fixMenuLi();
		    headerExit();
		
		</script>
		
	</div>

	</body>

</html>
