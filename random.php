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

        <?php require_once('navigation.php'); ?>



        <div class="body">
            <?php
            $server = 'localhost';
            $dbuser = 'root';
            $dbpassword = '';
            $db = 'mydb';

            $connect = mysql_connect($server, $dbuser, $dbpassword)
                    or die("Verbidung nicht Möglich!");

            mysql_select_db($db)
                    or die("Datenbank Fehler!");

            $max_querry = "SELECT * FROM nachrichten ORDER BY id DESC LIMIT 1";
            $maxx_querry = mysql_query($max_querry);
            while ($row = mysql_fetch_object($maxx_querry)) {
                $max = $row->id;
            }

            $min_querry = "SELECT * FROM nachrichten ORDER BY id ASC LIMIT 1";
            $minn_querry = mysql_query($min_querry);
            while ($row = mysql_fetch_object($minn_querry)) {
                $min = $row->id;
            }

            $random = rand($min, $max);
            $ramdom_querry = "SELECT * FROM nachrichten WHERE id = '$random'";
            $randomm_querry = mysql_query($ramdom_querry);
            while ($row = mysql_fetch_object($randomm_querry)) {
                ?>
                <div class="body_box">
                    <h3 class="box_title">
                        <div class="daumen">
                            <?php echo $row->titel; ?>
                            <img src="img/daumen_hoch.png">
                            <?php echo $row->daumen_hoch; ?>
                            <img src="img/daumen_runter.png">
                            <?php echo $row->daumen_runter; ?>
                        </div>
                        <div class="clear"></div>
                    </h3>
                    <p class="box_text">
                        <?php echo $row->nachricht; ?>
                    </p>
                </div>
                <?php
            }
            ?>
        </div>
    </body>
</html> 