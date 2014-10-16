<!-- verbindet content-outer mit content-inner -->
<div class="content-wrap">

    <?php
    require_once 'Data/fuerProfil.php';

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
                <td><?php echo $linie->username; ?></td>
            </tr>
            <tr class="pure-table-odd">
                <td>Vorname</td>
                <td><?php echo $linie->vorname; ?></td>
            </tr>
            <tr>
                <td>Nachname</td>
                <td><?php echo $linie->nachname; ?></td>
            </tr>
            <tr class="pure-table-odd">
                <td>EMail</td>
                <td><?php echo $linie->mail; ?></td>
            </tr>
            <tr>
                <td>Telefonnr.</td>
                <td><?php echo $linie->phone_nummer; ?></td>
            </tr>
            <tr class="pure-table-odd">
                <td>Geburtsdatum</td>
                <td><?php echo $linie->birthdate; ?></td>
            </tr>
            <tr>
                <td>Biographie</td>
                <td><?php echo $linie->bio; ?></td>
            </tr>
            <tr class="pure-table-odd">
                <td>Lieblings Farbe</td>
                <td><?php echo $linie->fav_color; ?></td>
            </tr>
            <tr>
                <td>Lieblings Tier</td>
                <td><?php echo $linie->fav_animal; ?></td>
            </tr>
            <tr class="pure-table-odd">
                <td>Lieblings Essen</td>
                <td><?php echo $linie->fav_food; ?></td>
            </tr>
            <tr>
                <td>Lieblings Getränk</td>
                <td><?php echo $linie->fav_drink; ?></td>
            </tr>
            <tr class="pure-table-odd">
                <td>Facebook</td>
                <td><a href="http://www.facebook.com/<?php echo $linie->facebook; ?>" >www.facebook.com/<?php echo $linie->facebook; ?></a></td>
            </tr>
            <tr>
                <td>YouTube</td>
                <td><a href="http://www.youtube.com/user/<?php echo $linie->youtube; ?>" >www.youtube.com/<?php echo $linie->youtube; ?></a></td>
            </tr>
            <tr class="pure-table-odd">
                <td>Twitter</td>
                <td><a href="http://www.twitter.com/<?php echo $linie->twitter; ?>" >www.twitter.com/<?php echo $linie->twitter; ?></a></td>
            </tr>
            <tr>
                <td>Instagram</td>
                <td><a href="http://www.instagram.com/<?php echo $linie->instagram; ?>" >www.instagram.com/<?php echo $linie->instagram; ?></a></td>
            </tr>
            <tr class="pure-table-odd">
                <td>Sprache</td>
                <td><?php
                    echo $linie->lang_text;
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
<?php
require_once 'Business/his_nachrichten.php';
?>
</div>