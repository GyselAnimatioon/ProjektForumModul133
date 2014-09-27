<!DOCTYPE html>
<html>
    <head>
        <title>New Message</title>
        <meta charset="UTF-8">
        <!-- Stylesheet für Titel -->
        <link type="text/css" rel="Stylesheet" href="css/pure.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="/css/DokuStyle/doku.css">
        <link href='http://fonts.googleapis.com/css?family=Nixie+One|PT+Mono|Monoton|Varela+Round' rel='stylesheet' type='text/css'>
    </head>
    <body>

        <?php require_once('navigation.php'); ?>

        <div class="content-wrap">


            <form class="pure-form pure-g" method="POST" action="new_message_auswertung.php">

                <div class="pure-u-1">
                    <input class="pure-input-1" type="text" name="title" placeholder="Titel">
                </div>
                <div class="pure-u-1">

                </div>
                <div class="pure-u-1">
                    <input class="pure-input-1" type="text" name="text" placeholder="Nachricht">
                </div>
                <div class="pure-u-1">
                    <input type="hidden" name="date" value="<?php echo date("Y:m:d G:i:s"); ?>">
                </div>
                
                <div class="pure-u-1">
                    <input class="pure-button pure-button-error pure-input-1-4" type="reset" value="Reset!">
                    <input class="pure-button pure-button-primary pure-input-1-4" type="submit" value="Senden!">
                </div>

            </form>

        </div>
    </body>
</html>
<?php
?>