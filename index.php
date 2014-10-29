<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>F0rum</title>

        <link rel="stylesheet" type="text/css" href="css/default.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <link type="text/css" rel="Stylesheet" href="css/head.css">
        <link type="text/css" rel="Stylesheet" href="css/body.css">
        <link rel="stylesheet" type="text/css" href="css/pure.css">
        <link type="text/css" rel="Stylesheet" href="css/doku.css">
        <link rel="stylesheet" type="text/css" href="css/regi.css">
        <link rel="stylesheet" type="text/css" href="css/css_phone.css">
        <script src="js/jquery/jquery.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Nixie+One|PT+Mono|Monoton|Varela+Round' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php require_once ('Data/DBConnection.php'); ?>
        <?php require_once('Presentation/navigation1.php'); ?>
        <div class="content-wrap">
            <?php
            if (isset($_GET['exec'])) {
                $exec = filter_input(INPUT_GET, "exec");
            }
            $page = filter_input(INPUT_GET, "page");
            $folder = filter_input(INPUT_GET, "folder");
            $name = $folder . "/" . $page;
            if (!empty($page)) {
                require_once $name;
            } else {
                $url = "Location: ../index.php?folder=Business&page=nachrichten_ausgeben.php&exec=nachricht";
                header($url);
            }
            ?>
        </div>
        <footer>
            &copy; Timothe Laborie, Fabian Gysel, Basil Lade 2014
        </footer>  
        <script src="js/classie.js"></script>
        <script>
            var menuLeft = document.getElementById('cbp-spmenu-s1'),
                    showLeft = document.getElementById('showLeft'),
                    exit = document.getElementById('exit'),
                    body = document.body;

            showLeft.onclick = function () {
                classie.toggle(this, 'active');
                classie.toggle(menuLeft, 'cbp-spmenu-open');
                disableOther('showLeft');
            };

            exit.onclick = function () {
                classie.toggle(this, 'active');
                disableOther('exit');
            };

            function disableOther(button) {
                if (button !== 'showLeft') {
                    classie.toggle(showLeft, 'disabled');
                }
            }
        </script>
    </body>
</html>
