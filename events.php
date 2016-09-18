<?php

function listEvents() {

    $directoryToScan = "http://www.postgrammingide.ch/eventi/";

    $json_array = array();

    $i = 0;

    foreach(glob($directoryToScan, GLOB_ONLYDIR) as $dir) {

        array_push($json_array, strval($i)=>$dir);
        $i++;
    }

    return json_encode($json_array);
}

$file = fopen('result.json', 'w');
fwrite($file, listEvents());
fclose($file);

?>