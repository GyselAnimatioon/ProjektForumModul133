<!DOCTYPE html>

<?php
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>F0rum</title>
        <!-- Stylesheet für Titel -->
        <link type="text/css" rel="Stylesheet" href="css/head.css">
        <!-- Stylesheet für Body -->
        <link type="text/css" rel="Stylesheet" href="css/body.css">
        <link rel="stylesheet" type="text/css" href="css/pure.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Google Fontss -->
        <link href='http://fonts.googleapis.com/css?family=Nixie+One|PT+Mono|Monoton|Varela+Round' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php require_once('navigation1.php'); ?>

        <div class="body">
            <?php require ('./nachrichten.php'); ?>
        </div>
        <footer>
            &copy; Timothe Laborie, Fabian Gysel, Basil Lade 2014
        </footer>  
    </body>
</html>
