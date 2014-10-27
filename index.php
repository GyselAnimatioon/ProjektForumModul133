<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>F0rum</title>
        <link type="text/css" rel="Stylesheet" href="css/head.css">
        <link type="text/css" rel="Stylesheet" href="css/body.css">
        <link rel="stylesheet" type="text/css" href="css/pure.css">
        <link type="text/css" rel="Stylesheet" href="css/doku.css">
        <link rel="stylesheet" type="text/css" href="css/regi.css">
        <link rel="stylesheet" type="text/css" href="css/css_phone.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Nixie+One|PT+Mono|Monoton|Varela+Round' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php require_once ('Data/DBConnection.php'); ?>
        <?php require_once('Presentation/navigation1.php'); ?>
        <div class="content-wrap">
            <?php
             
            if(isset($_GET['exec'])) { $exec = filter_input(INPUT_GET, "exec"); }
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
    </body>
</html>
