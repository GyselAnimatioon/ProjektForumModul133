<?php
require_once 'Business/functions.php';
require_once 'Data/select_query_functions.php';
$linie = query_filter();
?>
<div class="content-inner">
    <form class="pure-form pure-g" action="../index.php?folder=Business&page=filter.php" method="POST">
        <div class="pure-u-1">
            <input class="pure-input-1" type="text" name="username" value="<?php if (isset($_POST['username'])) {echo $linie['username'];} ?>" placeholder="Username">
        </div>
        <div class="pure-u-1-2">
            <input class="pure-input-1" type="text" name="vorname" value="<?php if (isset($_POST['vorname'])) {echo $linie['vorname'];} ?>" placeholder="Vorname">
        </div>
        <div class="pure-u-1-2">
            <input class="pure-input-1" type="text" name="nachname" value="<?php if (isset($_POST['nachname'])) {echo $linie['nachname'];} ?>" placeholder="Nachname">
        </div>
        <div class="onoffswitch">
            <div class="pure-u-1-4 onoffswitch">Facebook
                <input type="checkbox" name="1" class="onoffswitch-checkbox" id="myonoffswitch" <?php if (isset($_POST['1'])) {echo $linie['1'];} ?>>
                <label class="onoffswitch-label" for="myonoffswitch">
                    <span class="onoffswitch-inner"></span>
                    <span class="onoffswitch-switch"></span>
                </label>
            </div>
        </div>
        <div class="onoffswitch">
            <div class="pure-u-1-4 onoffswitch">YouTube
                <input type="checkbox" name="2" class="onoffswitch-checkbox" id="myonoffswitch2" <?php if (isset($_POST['2'])) {echo $linie['2'];} ?>>
                <label class="onoffswitch-label" for="myonoffswitch2">
                    <span class="onoffswitch-inner"></span>
                    <span class="onoffswitch-switch"></span>
                </label>
            </div>
        </div>
        <div class="onoffswitch">
            <div class="pure-u-1-4 onoffswitch">Twitter
                <input type="checkbox" name="3" class="onoffswitch-checkbox" id="myonoffswitch3" <?php if (isset($_POST['3'])) {echo $linie['3'];} ?>>
                <label class="onoffswitch-label" for="myonoffswitch3">
                    <span class="onoffswitch-inner"></span>
                    <span class="onoffswitch-switch"></span>
                </label>
            </div>
        </div>
        <div class="onoffswitch">
            <div class="pure-u-1-4 onoffswitch">Instagram
                <input type="checkbox" name="4" class="onoffswitch-checkbox" id="myonoffswitch4" <?php if (isset($_POST['4'])) {echo $linie['4'];} ?>>
                <label class="onoffswitch-label" for="myonoffswitch4">
                    <span class="onoffswitch-inner"></span>
                    <span class="onoffswitch-switch"></span>
                </label>
            </div>
        </div>
       <!-- <div class="onoffswitch">
            <div class="pure-u-1-4 onoffswitch">
                <a href="#" class="more">more</a>
            </div>
        </div>
        -->
        <div class="pure-u-1-2">
            <input class="pure-input-1" type="text" name="mail" value="<?php if (isset($_POST['mail'])) {echo $linie['mail'];} ?>" placeholder="EMail">
        </div>
        <div class="pure-u-1-2">
            <input class="pure-input-1" type="text" name="phone_nummer" value="<?php if (isset($_POST['phone_nummer'])) {echo $linie['phone_nummer'];} ?>" placeholder="Telefonummer">
        </div>
        <div class="pure-u-1-2">
            <input class="pure-input-1" type="text" name="birthdate" value="<?php if (isset($_POST['birthdate'])) {echo $linie['birthdate'];} ?>" placeholder="Geburtstag">
        </div>
        <div class="pure-u-1-2">
            <input class="pure-input-1" type="text" name="bio" value="<?php if (isset($_POST['bio'])) {echo $linie['bio'];} ?>" placeholder="Biographie">
        </div>
        <div class="pure-u-1-2">
            <input class="pure-input-1" type="text" name="fav_color" value="<?php if (isset($_POST['fav_color'])) {echo $linie['fav_color'];} ?>" placeholder="Lieblings Farbe">
        </div>
        <div class="pure-u-1-2">
            <input class="pure-input-1" type="text" name="fav_animal" value="<?php if (isset($_POST['fav_animal'])) {echo $linie['fav_animal'];} ?>" placeholder="Lieblings Tier">
        </div>
        <div class="pure-u-1-2">
            <input class="pure-input-1" type="text" name="fav_food" value="<?php if (isset($_POST['fav_food'])) {echo $linie['fav_food'];} ?>" placeholder="Lieblings Essen">
        </div>
        <div class="pure-u-1-2">
            <input class="pure-input-1" type="text" name="fav_drink" value="<?php if (isset($_POST['fav_drink'])) {echo $linie['fav_drink'];} ?>" placeholder="Lieblings Getränk">
        </div>
        <div class="pure-u-1-2">
            <input class="pure-input-1" type="text" name="lang" value="<?php if (isset($_POST['lang'])) {echo $linie['lang'];} ?>" placeholder="Sprache">
        </div>
        <div class="pure-u-1-2">
            <input class="pure-button pure-button-success" type="submit" value="Anwenden!">
        </div>
    </form> 
</div>