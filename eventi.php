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
		echo '    <h2 class="eventtitle">'. $obj['date'] .'</h2>', PHP_EOL;
		echo '    <h3 class="eventdate">'. $obj['name'] .'</h3>', PHP_EOL;
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