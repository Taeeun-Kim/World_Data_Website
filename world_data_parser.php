<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/table.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>WorldDataParser</title>
</head>

<body>

    <?php
    echo "Array <br/>";
    echo "( <br/>";
    $row = -1;
    if (($handle = fopen("data/world_data_v1.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
            if ($row == -1) { // started from -1, because "Array" started from 0 in the document
                $row++;
            } else {
                echo str_repeat("&nbsp;", 8); // tab = 8 spaces 
                echo "[$row] => Array <br />\n";
                $row++;
                echo str_repeat("&nbsp;", 16); // 2x tab
                echo "( <br />\n";
                echo str_repeat("&nbsp;", 24); // 3x tab
                echo "[id &nbsp;] => ";

                for ($c = 0; $c < $num; $c++) {
                    echo $data[$c] . "<br />\n";
                    switch ($c) {
                        case 0:
                            echo str_repeat("&nbsp;", 24);
                            echo "[name";
                            echo str_repeat("&nbsp;", 22);
                            echo "] => ";
                            break;
                        case 1:
                            echo str_repeat("&nbsp;", 24);
                            echo "[birth rate per 1000] => ";
                            break;
                        case 2:
                            echo str_repeat("&nbsp;", 24);
                            echo "[cell phones per 100] => ";
                            break;
                        case 3:
                            echo str_repeat("&nbsp;", 24);
                            echo "[children per woman] => ";
                            break;
                        case 4:
                            echo str_repeat("&nbsp;", 24);
                            echo "[electricity consumption per capital] => ";
                            break;
                        case 5:
                            echo str_repeat("&nbsp;", 24);
                            echo "[gdp_per_capital] => ";
                            break;
                        case 6:
                            echo str_repeat("&nbsp;", 24);
                            echo "[gdp_per_capital_growth] => ";
                            break;
                        case 7:
                            echo str_repeat("&nbsp;", 24);
                            echo "[inflation annual] => ";
                            break;
                        case 8:
                            echo str_repeat("&nbsp;", 24);
                            echo "[internet user per 100] => ";
                            break;
                        case 9:
                            echo str_repeat("&nbsp;", 24);
                            echo "[life expectancy] => ";
                            break;
                        case 10:
                            echo str_repeat("&nbsp;", 24);
                            echo "[military expenditure percent of gdp] => ";
                            break;
                        case 11:
                            echo str_repeat("&nbsp;", 24);
                            echo "[gps_lat";
                            echo str_repeat("&nbsp;", 12);
                            echo "] => ";
                            break;
                        case 12:
                            echo str_repeat("&nbsp;", 24);
                            echo "[gps_long] => ";
                            break;
                    }
                }
                echo str_repeat("&nbsp;", 16);
                echo ") <br /><br />\n";
            }
        }
        fclose($handle);
    }
    class WorldDataParser
    {
        public function parseCSV()
        {
        }
    }


    ?>

</body>

</html>