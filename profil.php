<!DOCTYPE html>
<html>
    <head>
        <title>Doku analyse</title>
        <meta charset="UTF-8">
        <!-- Stylesheet für Titel -->
        <link type="text/css" rel="Stylesheet" href="css/pure.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="/css/DokuStyle/doku.css">
        <link type="text/css" rel="stylesheet" href="/css/head.css">
        <link type="text/css" rel="stylesheet" href="/css/body.css">
        <link href='http://fonts.googleapis.com/css?family=Nixie+One|PT+Mono|Monoton|Varela+Round' rel='stylesheet' type='text/css'>
    </head>
    <body>

        <?php require_once('navigation.php'); ?>

        <!-- verbindet content-outer mit content-inner -->
        <div class="content-wrap">

            <?php
            session_start();
            if (isset($_SESSION["login"])) {

                $server = 'localhost';
                $dbuser = 'root';
                $dbpassword = '';
                $db = 'mydb';
                $username_session = $_SESSION['username'];

                $select_querry = "SELECT * FROM user WHERE username = '$username_session'";

                $connect = mysql_connect($server, $dbuser, $dbpassword)
                        or die("Verbidung nicht Möglich!");

                mysql_select_db($db)
                        or die("Datenbank Fehler!");

                $nachrichten_querry = mysql_query($select_querry);

                while ($row = mysql_fetch_object($nachrichten_querry)) {

                    echo "Deine ID in userer Datenbank ist: " . $row->id . "<br>";
                    echo "Dein Username ist: " . $row->username . "<br>";
                    echo "Dein Vorname ist: " . $row->vorname . "<br>";
                    echo "Dein Nachname ist: " . $row->nachname . "<br>";
                    echo "Deine EMail lauten: " . $row->mail;

                    require_once('my_nachrichten.php');
                }
            }
            ?>
        </div>
    </body>
</html>