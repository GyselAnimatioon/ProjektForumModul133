<!DOCTYPE html>
<html>
    <head>
    <head>
        <meta charset="UTF-8">
        <title>F0rum</title>
        <!-- Stylesheet für Titel -->
        <link type="text/css" rel="Stylesheet" href="/css/head.css">
        <!-- Stylesheet für Body -->
        <link type="text/css" rel="Stylesheet" href="/css/body.css">
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
     include_once "Data/DBConnection.php";
            $username_session = $_GET['id'];

            $select_querry = "SELECT * FROM user WHERE id = '$username_session'";

       

            $nachrichten_querry = mysql_query($select_querry);
            while ($row = mysql_fetch_object($nachrichten_querry)) {
                ?>

                <table class="pure-table">
                    <thead>
                        <tr>
                            <th>Profil</th>
                            <th>Gespeicherte Daten</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Username</td>
                            <td><?php echo $row->username; ?></td>
                        </tr>
                        <tr class="pure-table-odd">
                            <td>Vorname</td>
                            <td><?php echo $row->vorname; ?></td>
                        </tr>
                        <tr>
                            <td>Nachname</td>
                            <td><?php echo $row->nachname; ?></td>
                        </tr>
                        <tr class="pure-table-odd">
                            <td>EMail</td>
                            <td><?php echo $row->mail; ?></td>
                        </tr>
                        <tr>
                            <td>Telefonnr.</td>
                            <td><?php echo $row->phone_nummer; ?></td>
                        </tr>
                        <tr class="pure-table-odd">
                            <td>Geburtsdatum</td>
                            <td><?php echo $row->birthdate; ?></td>
                        </tr>
                        <tr>
                            <td>Biographie</td>
                            <td><?php echo $row->bio; ?></td>
                        </tr>
                        <tr class="pure-table-odd">
                            <td>Lieblings Farbe</td>
                            <td><?php echo $row->fav_color; ?></td>
                        </tr>
                        <tr>
                            <td>Lieblings Tier</td>
                            <td><?php echo $row->fav_animal; ?></td>
                        </tr>
                        <tr class="pure-table-odd">
                            <td>Lieblings Essen</td>
                            <td><?php echo $row->fav_food; ?></td>
                        </tr>
                        <tr>
                            <td>Lieblings Getränk</td>
                            <td><?php echo $row->fav_drink; ?></td>
                        </tr>
                        <tr class="pure-table-odd">
                            <td>Facebook</td>
                            <td><a href="http://www.facebook.com/<?php echo $row->facebook; ?>" >www.facebook.com/<?php echo $row->facebook; ?></a></td>
                        </tr>
                        <tr>
                            <td>YouTube</td>
                            <td><a href="http://www.youtube.com/user/<?php echo $row->youtube; ?>" >www.youtube.com/<?php echo $row->youtube; ?></a></td>
                        </tr>
                        <tr class="pure-table-odd">
                            <td>Twitter</td>
                            <td><a href="http://www.twitter.com/<?php echo $row->twitter; ?>" >www.twitter.com/<?php echo $row->twitter; ?></a></td>
                        </tr>
                        <tr>
                            <td>Instagram</td>
                            <td><a href="http://www.instagram.com/<?php echo $row->instagram; ?>" >www.instagram.com/<?php echo $row->instagram; ?></a></td>
                        </tr>
                        <tr class="pure-table-odd">
                            <td>Sprache</td>
                            <td><?php
                                if ($row->lang == "EN") {
                                    echo"Englisch";
                                } elseif ($row->lang == "DE") {
                                    echo"Deutsch";
                                } elseif ($row->lang == "FR") {
                                    echo"France";
                                } else {
                                    echo $row->lang;
                                }
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php
                require('his_nachrichten.php');
            }
            ?>
        </div>
    </body>
</html>