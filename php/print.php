<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/table.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        html {
            position: relative;
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
            font-style: normal;
            line-height: 145%;
        }

        body {
            position: relative;
            margin: 0;
            padding: 0;
            height: 100%;
        }

        .footer {
            margin: 0;
            padding: 0;
            position: absolute;
            width: 56%;
            padding: 17px 0;
            text-align: justify;
            margin-left: 22%;
            margin-right: 22%;
            height: 50px;
            position: absolute;
            left: 0;
            right: 0;
            z-index: 150;
        }

        .box {
            position: relative;
            text-align: left;
            margin-left: 22%;
            margin-right: 22%;
        }

        .content {
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            padding-top: 2%;
            /* padding between Nav and "World Data Overview" */
        }

        /* navbar for desktop */
        .nav {
            list-style: none;
            margin: 0;
            border: 0;
            padding: 0;
            text-align: left;
            width: 100%;
            height: 70px;
            /* Height of grey navbar */
            background: linear-gradient(to bottom, #d2d2d2, #e0e0e0, #efefef);
            /* Gradient */
            list-style-type: none;
            border-bottom: 1px solid #e0e0e0;
            /* navbar bottom border */
        }

        .nav li {
            margin: 12px;
            line-height: 75px;
            display: inline;
            /* hover effect */
            transition: background-color 200ms linear;
            -webkit-transition: background-color 200ms linear;
            -ms-transition: background-color 200ms linear;
        }

        li:hover {
            /* hover for nav menu */
            background-color: #d2d2d2;
            cursor: pointer;
        }

        .nav-logo {
            display: inline-block;
            vertical-align: top;
            width: 100px;
            /* size of logo */
            height: 100px;
            margin-right: 20px;
            margin-top: -1%;
        }

        .nav-font {
            text-decoration: none;
            color: #6d6d6d;
            border-left: 1px solid #c0c0c0;
            padding: 0px 0px 0px 10px;
            margin: 5px -10px 5px 0px;
        }

        .nav-button {
            margin: 0;
            border: 0;
            padding: 0;
            width: 100%;
            height: 70px;
            background: linear-gradient(to bottom, #d2d2d2, #e0e0e0, #efefef);
            list-style-type: none;
            overflow: hidden;
        }

        /* overview */
        .overview-box {
            margin-top: 2%;
            padding: 15px;
            box-shadow: 2px 5px 10px -3px #e4e4e4;
            border: 2px solid #e4e4e4;
            border-top: 2px solid #cceaad;
            column-count: 3;
            margin-bottom: 2%;
        }

        .overview-link {
            color: #88d12d;
        }

        .overview-link:hover {
            text-decoration: none;
            color: #4c8715;
            cursor: pointer;
        }

        /* Table */
        .filterTable {
            border-collapse: collapse;
            position: relative;
            text-align: left;
            width: 100%;
        }

        #cell_padding {
            padding: 1em;
            padding-left: 0;
        }

        tr:nth-of-type(even) {
            /* Table even color */
            background-color: #e4e4e4;
        }

        .show-hide {
            color: #a4a4a4;
        }

        .show-hide-list {
            text-decoration: underline;
            border-right: 2px solid #a4a4a4;
        }

        .show-hide-list:hover {
            color: #4c8715;
            text-decoration: none;
            cursor: pointer;
        }

        /* navbar for mobile */
        .mobile-nav {
            overflow: hidden;
            position: relative;
            background: linear-gradient(to bottom, #d2d2d2, #e0e0e0, #efefef);
            border-bottom: 1px solid #e0e0e0;
        }

        .mobile-nav #myLinks {
            display: none;
        }

        .mobile-nav a {
            color: #6d6d6d;
            padding: 14px 16px;
            text-decoration: none;
            display: block;
        }

        .mobile-nav a.icon {
            display: block;
            position: absolute;
            right: 0;
            top: 0;
        }

        .mobile-nav a:hover {
            background-color: #cccccc;
            ;
            color: black;
        }

        @media all and (max-width:768px) {

            /* Phones */
            .nav {
                display: none;
            }

            .overview-box {
                columns: 1;
            }

            .box {
                margin-left: 2%;
                margin-right: 2%;
            }

            .footer {
                width: 90%;
                margin: 5%;
                padding: 0;
                text-align: left;
            }
        }

        @media all and (min-width: 768px) and (max-width:1200px) {

            /* Tablets */
            .mobile-nav {
                display: none;
            }

            .overview-box {
                columns: 2;
            }
        }

        @media all and (min-width:1200px) {

            /* Desktops */
            .mobile-nav {
                display: none;
            }
        }
    </style>
</head>

<body>
    <header>
        <!-- Top Navigation Menu for Desktop -->
        <nav class="nav">
            <ul class="nav" style="margin-left: 22%; margin-right: 21.4%;">
                <li class="nav-li">
                    <!-- Logo -->
                    <a href="index.html" style="text-decoration: none;">
                        <img class="nav-logo" src="http://localhost/World_Data_Website_Copy/Bilder/world_data-logo.svg" />
                    </a>
                </li>
                <li><a class="nav-font" href=""><i class="fa fa-bars"></i> A1 - Table</a></li>
                <li><a class="nav-font" href="http://localhost/World_Data_Website_Copy/php/parse.php"><i class="fa fa-bars"></i> A2 - Parse</a></li>
                <li><a class="nav-font" href="http://localhost/World_Data_Website_Copy/php/save.php"><i class="fa fa-bars"></i> A2 - Save</a></li>
                <li><a class="nav-font" href="http://localhost/World_Data_Website_Copy/php/print.php"><i class="fa fa-bars"></i> A2 - Print</a></li>
                <li><a class="nav-font" href=""><i class="fa fa-bars"></i> A3 - REST</a></li>
                <li><a class="nav-font" href=""><i class="fa fa-bars"></i> A4 - Vis</a></li>
                <li><a class="nav-font" href=""><i class="fa fa-bars"></i> A5 - 3D</a></li>
            </ul>
        </nav>

        <!-- Top Navigation Menu for Mobile -->
        <div class="mobile-nav">
            <a href="index.html" class="active"><img class="nav-logo" src="http://localhost/World_Data_Website_Copy/Bilder/world_data-logo.svg" /></a>
            <div id="myLinks" style="background:white">
                <a class="nav-font" href=""><i class="fa fa-bars"></i> A1 - Table</a>
                <a class="nav-font" href=""><i class="fa fa-bars"></i> A2 - Parse</a>
                <a class="nav-font" href=""><i class="fa fa-bars"></i> A2 - Save</a>
                <a class="nav-font" href=""><i class="fa fa-bars"></i> A2 - Print</a>
                <a class="nav-font" href=""><i class="fa fa-bars"></i> A3 - REST</a>
                <a class="nav-font" href=""><i class="fa fa-bars"></i> A4 - Vis</a>
                <a class="nav-font" href=""><i class="fa fa-bars"></i> A5 - 3D</a>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>

        <script>
            // mobile-nav button script
            function myFunction() {
                var x = document.getElementById("myLinks");
                if (x.style.display === "block") {
                    x.style.display = "none";
                } else {
                    x.style.display = "block";
                }
            }
        </script>
    </header>

    <div class="box">
        <div class="content">
            <main>
                <p style="font-weight: 300; font-size: xx-large;">World Data Overview ...
                </p>

                <div class="overview-box">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore
                    et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                    rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                    ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                    et
                    dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                    rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                    ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                    et
                    dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                    rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. from:
                    <a class="overview-link" href="http://loremipsum.de">www.loremipsum.de</a>
                </div>

                <ul class="show-hide" style="list-style: none; margin: 0; padding: 0; margin-bottom: 1.4%;">
                    <span style="float:left">Show/Hide:&nbsp;</span>
                    <a class="show-hide-list" id="birth" onclick="hide_show_table(this.id);">birth
                        rate&nbsp;</a><a>&nbsp;</a>
                    <a class="show-hide-list" id="cell" onclick="hide_show_table(this.id);">cell phones&nbsp;</a>
                    <a class="show-hide-list" id="children" onclick="hide_show_table(this.id);">children&nbsp;</a>
                    <a class="show-hide-list" id="electricity" onclick="hide_show_table(this.id);">electricity&nbsp;</a>
                    <a class="show-hide-list" id="gdp" style="border: none;" onclick="hide_show_table(this.id);">gdp</a>
                </ul>

                <div style='overflow-x:auto'>
                    <?php
                    require("../php/world_data_parser.php");

                    $xmlPath = "../data/world_data.xml";
                    $xsltPath = "../data/world_data.xsl";

                    $file = "../data/world_data_v1.csv";

                    // parse & save Funktionen aufrufen
                    $myParser = new WorldDataParser();
                    $array = $myParser->parseCSV($file);
                    $value = $myParser->saveXML($array);

                    //if save was successfull, execute print
                    if ($value == FALSE)
                        echo "XML Savestatus: nicht erfolgreich ($value)";
                    else
                        echo $myParser->printXML($xmlPath, $xsltPath); // printXML Funktion aufrufen
                    ?>
                </div>


            </main>
        </div>
    </div>

    <footer class="footer">
        <div style="border-top:2px solid #cceaad; color: #6d6d6d; padding-top: 1.2%;">
            <div style="float:left;">Copylight © 2020 world_data</div>
            <div style="float:right;">This solution has been crated by:</div> </br>
            <div style="float:left;">First course exercise&nbsp;</div>
            <div style="float:left; font-weight: bold;">HTML, CSS and JS&nbsp;</div>
            <div style="float:left;">of the lecture Web and Multimedia Engineering</div>
            <div style="float:right;">Taeeun Kim</div>
        </div>
    </footer>
</body>

</html>