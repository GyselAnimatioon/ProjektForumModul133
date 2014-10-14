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

        <?php require_once('navigation1.php'); ?>

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
                    <input type="hidden" name="date_sek" value="<?php echo date("s"); ?>">
                    <input type="hidden" name="date_min" value="<?php echo date("i"); ?>">
                    <input type="hidden" name="date_h" value="<?php echo date("G"); ?>">
                    <input type="hidden" name="date_day" value="<?php echo date("j"); ?>">
                    <input type="hidden" name="date_m" value="<?php echo date("n"); ?>">
                    <input type="hidden" name="date_y" value="<?php echo date("Y"); ?>">
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