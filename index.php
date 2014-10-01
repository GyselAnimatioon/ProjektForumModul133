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
        <link rel="stylesheet" href="/css/pure.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Google Fontss -->
        <link href='http://fonts.googleapis.com/css?family=Nixie+One|PT+Mono|Monoton|Varela+Round' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php require_once('Presentation/navigation.php'); ?>
        <div class="body">
            <?php require_once('Business/nachrichten.php'); ?>
        </div>
        <?php 
            $page = filter_input(INPUT_GET, "page");
            $name = "./Business/" . $page;
            if (!empty($page)){
            require_once $name;
            }
            
            

        ?>

        <footer>
            &copy; Timothe Laborie, Fabian Gysel, Basil Lade 2014
        </footer>  
    </body>
</html>
