<!DOCTYPE HTML>

<?php

    function existsUrl($xml, $value) {
        
        foreach($xml->children() as $url) {
            
            if (strcmp($url->loc, $value) == 0) {
                
                return true;
            }
        }
        
        return false;
    }

    function siteMapUpdate($dirlist) {

		$addr = "http://postgrammingide.ch/";

		$sitemap = simplexml_load_file("sitemap.xml") or die("Error: Cannot create object");
		
		if ($sitemap === false) {
		    
            echo "Failed loading XML: ";
            
            foreach(libxml_get_errors() as $error) {
                
                echo "<br>", $error->message;
            }
        }
        
        $urlset = $sitemap->urlset[0];
		$modified = false;

		foreach($dirlist as $dir) {

			$page = $addr . $dir . "pagina.html";

			if (!existsUrl($sitemap, $page)) {
			    
			    echo '<script>console.log("Adding '. $page.' to sitemap.xml")</script>', PHP_EOL;
			    
			    $newuri = $sitemap->addChild("url");
			    $newuri->addChild("loc", $page);
			    $modified = true;
			    
			    echo '<script>console.log("'. $page.' added to sitemap.xml")</script>', PHP_EOL;
			}
		}

		if ($modified) {

			$sitemap->asXml("sitemap.xml");
		}
	}

	function listEvents() {

		$out = array();

		foreach(scandir("eventi/") as $dir) {
			        
			$realdir = "eventi/".$dir."/";
			        
			if (!is_dir($realdir) || strcmp($dir, ".") == 0 || strcmp($dir, "..") == 0){
			            
			    continue;
			}
			        
			echo '<script>console.log("Event list add: '. $realdir .'")</script>';

    		array_push($out, $realdir);
		}

		return $out;
	}

	function createEventLink($page, $obj) {

		echo '<a href="'. $page .'" id="'. $obj['name'] .'" class="eventlink">', PHP_EOL;
		echo '    <img class="eventimg" src="'. $obj['img'] .'" alt="Foto evento"/>', PHP_EOL;
		echo '    <h2 class="eventdate">'. $obj['date'] .'</h2>', PHP_EOL;
		echo '    <h3 class="eventtitle">'. $obj['name'] .'</h3>', PHP_EOL;
		echo '</a>', PHP_EOL;
	}

	function customEvents($dirlist) {

		foreach ($dirlist as $dir) {

			$config = fopen($dir . "config.json", "r") or die ("Unable to open file config.json");
			$text = fread($config, filesize($dir . "config.json"));
			fclose($config);

			$obj = json_decode($text, true);

			if (sizeof($obj) == 0) {

				echo '<script>console.log("'. $dir .'config.json is empty")</script>', PHP_EOL;
				return;
			}

			$page = $dir . "pagina.html";
			$obj['img'] = $dir . $obj['img'];

			createEventLink($page, $obj);
		}
	}
?>

<html>

	<head>

		<title>La Magia Delle Corde</title>
		<meta name="keywords" content="magia, corde, bellinzona">
		<meta name="description" content="Sito ufficiale de La Magia Delle Corde">
		<link title="style" media="screen" rel="stylesheet" href="style.css" type="text/css">

	</head>

	<body>

		<div id="header">

			<div class="menu">

				<a class="link" id="link1" href="index.html">Homepage</a>
				<a class="link" id="link2" href="contatti.html">Contatti</a>
				<a class="link" id="link3" href="lascuola.html">La scuola</a>
				<a class="link" id="link4" href="corsi.html">Corsi</a>
				<a class="link" id="link5" href="iscrizione.html">Iscriviti</a>

			</div>

			<img class="logo" src="res/logo1.png" alt="La magia delle corde" />

		</div>

		<div class="container">

			<div class="content">

				<h1 id="titolo"> Eventi </h1>

				<?php 
				    
				    $dirs = listEvents();
				    siteMapUpdate($dirs);
				    customEvents($dirs); 
				?>

			</div>

			<p id="copyright"> &#64 Copyright. All Rights Reserved | By Raffaele Ancarola &#38 Lia Rampazzi </p>

		</div>

		<script src="js/bounds.js"></script>

	</body>

</html>
