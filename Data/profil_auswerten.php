<?php

include_once './Business/functions.php';

//User Daten
$username2 = filter_input(INPUT_POST, 'username2');
$vorname2 = filter_input(INPUT_POST, 'vorname2');
$nachname2 = filter_input(INPUT_POST, 'nachname2');
$mail2 = filter_input(INPUT_POST, 'mail2');
$phone_nummer2 = filter_input(INPUT_POST, 'phone_nummer2');
$birthdate2 = filter_input(INPUT_POST, 'birthdate2');
$bio2 = filter_input(INPUT_POST, 'bio2');
$fav_color2 = $_POST['fav_color2'];
$fav_animal2 = $_POST['fav_animal2'];
$fav_food2 = $_POST['fav_food2'];
$fav_drink2 = $_POST['fav_drink2'];
$facebook2 = filter_input(INPUT_POST, 'facebook2');
$youtube2 = filter_input(INPUT_POST, 'youtube2');
$twitter2 = filter_input(INPUT_POST, 'twitter2');
$instagram2 = filter_input(INPUT_POST, 'instagram2');
$lang2 = $_POST['lang2'];
$username = $_SESSION['username'];

$ok = check_email($mail2);

if ($ok == "false") {
    $url1 = "Location: ../index.php?folder=Presentation&page=profil.php";
    $_SESSION['mail_ok'] = 0;
    header($url1);
} else {
    $update_querry = "UPDATE user "
            . "SET username = '$username2', "
            . "vorname = '$vorname2', "
            . "nachname = '$nachname2', "
            . "mail = '$mail2', "
            . "phone_nummer = '$phone_nummer2', "
            . "birthdate = '$birthdate2', "
            . "bio = '$bio2', "
            . "fav_color = '$fav_color2', "
            . "fav_animal = '$fav_animal2', "
            . "fav_food = '$fav_food2', "
            . "fav_drink = '$fav_drink2', "
            . "facebook = '$facebook2', "
            . "youtube = '$youtube2', "
            . "twitter = '$twitter2', "
            . "instagram = '$instagram2', "
            . "lang = '$lang2' "
            . "WHERE username = '$username'";

    $updatee_querry = mysql_query($update_querry);

    $_SESSION['username'] = $username2;
    $_SESSION['vorname'] = $vorname2;
    $_SESSION['nachname'] = $nachname2;
    $_SESSION['mail'] = $mail2;
    $_SESSION['phone_nummer'] = $phone_nummer2;
    $_SESSION['birthdate'] = $birthdate2;
    $_SESSION['bio'] = $bio2;
    $_SESSION['fav_color'] = $fav_color2;
    $_SESSION['fav_animal'] = $fav_animal2;
    $_SESSION['fav_food'] = $fav_food2;
    $_SESSION['fav_drink'] = $fav_drink2;
    $_SESSION['facebook'] = $facebook2;
    $_SESSION['youtube'] = $youtube2;
    $_SESSION['twitter'] = $twitter2;
    $_SESSION['instagram'] = $instagram2;
    $_SESSION['lang'] = $lang2;
    $url1 = "Location: ../index.php?folder=Business&page=nachrichten.php";
    $_SESSION['mail_ok'] = 1;
    header($url1);
}
?>