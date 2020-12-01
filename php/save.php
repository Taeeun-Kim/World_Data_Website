<?php

include("../php/world_data_parser.php");
$file = "../data/world_data_v1.csv";

$myParser = new WorldDataParser();
$array = $myParser->parseCSV($file);
$value = $myParser->saveXML($array);

$is_file_exist = file_exists('../data/world_data.xml');

if ($is_file_exist) {
    echo 'XML Savestatus: erfolgreich (1)'; // TRUE
} else {
    echo 'XML Savestatus: gescheitert (0)'; // FALSE
}

?>