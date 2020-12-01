<pre>
<?php

include("../php/world_data_parser.php");
$file = "../data/world_data_v1.csv";

$myParser = new WorldDataParser();
print_r($myParser->parseCSV($file));

?>
</pre>