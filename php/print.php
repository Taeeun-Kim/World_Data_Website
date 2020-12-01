<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/table.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>print</title>
</head>

<body>
    <?php
    set_include_path('../'); // select path
    require 'php/world_data_parser.php';

    //get all required files
    $xmlPath = "data/world_data.xml";
    $xsltPath = "data/world_data.xsl";

    $file = "data/world_data_v1.csv";

    //execute parse & save
    $myParser = new WorldDataParser();
    $array = $myParser->parseCSV($file);
    $value = $myParser->saveXML($array);

    //if save was successfull, execute print
    if ($value == FALSE)
        echo "XML Savestatus: nicht erfolgreich ($value)";
    else
        echo $myParser->printXML($xmlPath, $xsltPath);
    ?>
</body>

</html>