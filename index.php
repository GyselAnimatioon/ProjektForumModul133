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
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" />
        <link href="js/jquery.nanoscroller/nanoscroller.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery/jquery.js" type="text/javascript"></script>
        
        <script src="js/classie.js"></script>
        <script src="js/jquery.nanoscroller/jquery.nanoscroller.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Nixie+One|PT+Mono|Monoton|Varela+Round' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php require_once ('Data/DBConnection.php'); ?>
        <?php require_once('Presentation/navigation1.php'); ?>
        <div id="hauptteil" class="content-wrap">
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

        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    </body>

</html>
