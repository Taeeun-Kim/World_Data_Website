<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/table.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>parse</title>
</head>

<body>
<?php
set_include_path('/Users/taeeun/Sites/World_Data_Website_Copy'); // select path
require 'php/world_data_parser.php'; // world_data_parser.php aufrufen
parseCSV(); // use the function
?>
</body>

</html>