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
                                    <td>Telefonnr.</td>
                                    <td><?php echo $row->phone_nummer; ?></td>
                                    <td><input type="text" name="phone_nummer2" value="<?php echo $row->phone_nummer; ?>" placeholder="Neue Telefonnummer"></td>
                                </tr>
                                <tr class="pure-table-odd">
                                    <td>Geburtsdatum</td>
                                    <td><?php echo $row->birthdate; ?></td>
                                    <td><input type="date" name="birthdate2" value="<?php echo $row->birthdate; ?>" placeholder="Neues Geburtsdatum"></td>
                                </tr>
                                <tr>
                                    <td>Biographie</td>
                                    <td><?php echo $row->bio; ?></td>
                                    <td><input type="text" name="bio2" value="<?php echo $row->bio; ?>" placeholder="Neue Biographie"></td>
                                </tr>
                                <tr class="pure-table-odd">
                                    <td>Lieblings Farbe</td>
                                    <td><?php echo $row->fav_color; ?></td>
                                    <td>
                                        <select name="fav_color2">
                                            <option selected>
                                                <?php
                                                if ($row->fav_color != NULL) {
                                                    echo $row->fav_color;
                                                } else {
                                                    echo "Nichts Ausgewählt";
                                                }
                                                ?>
                                            </option>
                                            <option>Weiss</option>
                                            <option>Schwarz</option>
                                            <option>Gr&uuml;n</option>
                                            <option>Gelb</option>
                                            <option>Blau</option>
                                            <option>Rot</option>
                                            <option>Pink</option>
                                            <option>Andere</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lieblings Tier</td>
                                    <td><?php echo $row->fav_animal; ?></td>
                                    <td>
                                        <select name="fav_animal2">
                                            <option selected>
                                                <?php
                                                if ($row->fav_animal != NULL) {
                                                    echo $row->fav_animal;
                                                } else {
                                                    echo "Nichts Ausgewählt";
                                                }
                                                ?>
                                            </option>
                                            <option>Pferd</option>
                                            <option>Schildkr&ouml;te</option>
                                            <option>Tieger</option>
                                            <option>L&ouml;we</option>
                                            <option>Wal</option>
                                            <option>Delfin</option>
                                            <option>Hund</option>
                                            <option>Katze</option>
                                            <option>Pinguin</option>
                                            <option>Affe</option>
                                            <option>Papagei</option>
                                            <option>Fisch</option>
                                            <option>Giraffe</option>
                                            <option>Hamster</option>
                                            <option>Meerschweinchen</option>
                                            <option>Andere</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr class="pure-table-odd">
                                    <td>Lieblings Essen</td>
                                    <td><?php echo $row->fav_food; ?></td>
                                    <td>
                                        <select name="fav_food2">
                                            <option selected>
                                                <?php
                                                if ($row->fav_food != NULL) {
                                                    echo $row->fav_food;
                                                } else {
                                                    echo "Nichts Ausgewählt";
                                                }
                                                ?>
                                            </option>
                                            <option>Spaghetti</option>
                                            <option>Schnitzel</option>
                                            <option>Pizza</option>
                                            <option>Rouladen</option>
                                            <option>Spargel</option>
                                            <option>Sauerbraten</option>
                                            <option>Lasagne</option>
                                            <option>Steaks</option>
                                            <option>Nudelauflauf</option>
                                            <option>Fisch</option>
                                            <option>Spinat</option>
                                            <option>Klopse</option>
                                            <option>Kartoffeln</option>
                                            <option>Andere</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lieblings Getränk</td>
                                    <td><?php echo $row->fav_drink; ?></td>
                                    <td>
                                        <select name="fav_drink2">
                                            <option selected>
                                                <?php
                                                if ($row->fav_drink != NULL) {
                                                    echo $row->fav_drink;
                                                } else {
                                                    echo "Nichts Ausgewählt";
                                                }
                                                ?>
                                            </option>
                                            <option>Wasser</option>
                                            <option>Coca-Cola</option>
                                            <option>Kaffee</option>
                                            <option>Bier</option>
                                            <option>Tee</option>
                                            <option>Orangschensaft</option>
                                            <option>Rotwein</option>
                                            <option>Heisse Schokolade</option>
                                            <option>Milch</option>
                                            <option>Fanta</option>
                                            <option>Red Bull</option>
                                            <option>Pepsi</option>
                                            <option>Andere S&uuml;ssgetr&auml;nke</option>
                                            <option>Andere Getränke</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr class="pure-table-odd">
                                    <td>Facebook</td>
                                    <td><a href="http://www.facebook.com/<?php echo $row->facebook; ?>" >www.facebook.com/<?php echo $row->facebook; ?></a></td>
                                    <td>www.facebook.com/<input type="text" name="facebook2" value="<?php echo $row->facebook; ?>" placeholder="Facebook Link"></td>
                                </tr>
                                <tr>
                                    <td>YouTube</td>
                                    <td><a href="http://www.youtube.com/user/<?php echo $row->youtube; ?>" >www.youtube.com/<?php echo $row->youtube; ?></a></td>
                                    <td>www.youtube.com/user/<input type="text" name="youtube2" value="<?php echo $row->youtube; ?>" placeholder="YouTube Link"></td>
                                </tr>
                                <tr class="pure-table-odd">
                                    <td>Twitter</td>
                                    <td><a href="http://www.twitter.com/<?php echo $row->twitter; ?>" >www.twitter.com/<?php echo $row->twitter; ?></a></td>
                                    <td>www.twitter.com/<input type="text" name="twitter2" value="<?php echo $row->twitter; ?>" placeholder="Twitter Link"></td>
                                </tr>
                                <tr>
                                    <td>Instagram</td>
                                    <td><a href="http://www.instagram.com/<?php echo $row->instagram; ?>" >www.instagram.com/<?php echo $row->instagram; ?></a></td>
                                    <td>www.instagram.com/<input type="text" name="instagram2" value="<?php echo $row->instagram; ?>" placeholder="Instagram Link"></td>
                                </tr>
                                <tr class="pure-table-odd">
                                    <td>Sprache</td>
                                    <td><?php if($row->lang=="EN"){echo"Englisch";}elseif($row->lang=="DE"){echo"Deutsch";}elseif($row->lang=="FR"){echo"France";}else{echo $row->lang;} ?></td>
                                    <td>
                                        <select name="lang2">
                                            <option selected>
                                                <?php
                                                if ($row->lang != NULL) {
                                                    echo $row->lang;
                                                } else {
                                                    echo "Nichts Ausgewählt";
                                                }
                                                ?>
                                            </option>
                                            <option>DE</option>
                                            <option>EN</option>
                                            <option>FR</option>
                                        </select>
                                    </td>
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