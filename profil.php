<!DOCTYPE html>
<html>
    <head>
    <head>
        <meta charset="UTF-8">
        <title>F0rum</title>
        <!-- Stylesheet für Titel -->
        <link type="text/css" rel="Stylesheet" href="css/head.css">
        <!-- Stylesheet für Body -->
        <link type="text/css" rel="Stylesheet" href="css/body.css">
        <link rel="stylesheet" href="/css/pure.css">
        <link href="css/DokuStyle/doku.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Google Fontss -->
        <link href='http://fonts.googleapis.com/css?family=Nixie+One|PT+Mono|Monoton|Varela+Round' rel='stylesheet' type='text/css'>
    </head>
    <body>

        <?php require_once('navigation.php'); ?>

        <!-- verbindet content-outer mit content-inner -->
        <div class="content-wrap">

            <?php
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
                    ?>
                    <form method="POST" action="profil_auswerten.php">
                        <table class="pure-table">
                            <thead>
                                <tr>
                                    <th>Profil</th>
                                    <th>Gespeicherte Daten</th>
                                    <th>Neue Daten</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Username</td>
                                    <td><?php echo $row->username; ?></td>
                                    <td><input type="text" name="username2" value="<?php echo $row->username; ?>" placeholder="Neuer Benutzername"></td>
                                </tr>
                                <tr class="pure-table-odd">
                                    <td>Vorname</td>
                                    <td><?php echo $row->vorname; ?></td>
                                    <td><input type="text" name="vorname2" value="<?php echo $row->vorname; ?>" placeholder="Neuer Vorname"></td>
                                </tr>
                                <tr>
                                    <td>Nachname</td>
                                    <td><?php echo $row->nachname; ?></td>
                                    <td><input type="text" name="nachname2" value="<?php echo $row->nachname; ?>" placeholder="Neuer Nachname"></td>
                                </tr>
                                <tr class="pure-table-odd">
                                    <td>EMail</td>
                                    <td><?php echo $row->mail; ?></td>
                                    <td><input type="text" name="mail2" value="<?php echo $row->mail; ?>" placeholder="Neue EMail"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td><input type="submit" value="Speichern"></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                    <?php
                    require_once('my_nachrichten.php');
                }
            }
            ?>
        </div>
    </body>
</html>