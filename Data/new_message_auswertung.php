<?php

session_start();

require_once 'DBConnection.php';

if (isset($_SESSION["login"])) {

    $title = filter_input(INPUT_POST, 'title');
    $text = filter_input(INPUT_POST, 'text');
    $date_sek = $_POST["date_sek"];
    $date_min = $_POST["date_min"];
    $date_h = $_POST["date_h"];
    $date_day = $_POST["date_day"];
    $date_m = $_POST["date_m"];
    $date_y = $_POST["date_y"];
    $date_for_db = date("Y:m:d G:i:s", mktime($date_h, $date_min, $date_sek, $date_m, $date_day, $date_y));
    $date_for_view = date("G, i, s, n, j, Y", mktime($date_h, $date_min, $date_sek, $date_m, $date_day, $date_y));
    $username_session = $_SESSION['username'];
    $control = 0;
    $control2 = 0;
    $control3 = 0;

    $message_querry = "INSERT INTO nachrichten VALUES(null,'$title','$text','$date_for_db','$date_sek','$date_min','$date_h','$date_day','$date_m','$date_y')";
    $nachrichten_querry = mysql_query($message_querry);
    echo $message_querry . "<br>";
    $profil_querry = "SELECT * FROM user WHERE username = '$username_session'";
    $profil = mysql_query($profil_querry);
    while ($linie = mysql_fetch_object($profil)) {
        $control2++;
        $user_id = $linie->id;
    }

    $nachricht_querry = "SELECT * FROM nachrichten WHERE erstellt_am = '$date_for_db'";
    $nachricht = mysql_query($nachricht_querry);
    echo $nachricht_querry;
    while ($linie = mysql_fetch_object($nachricht)) {
        $control3++;
        $nachricht_id = $linie->id;
    }

    $key_querry = "INSERT INTO user_nachricht VALUES($user_id,$nachricht_id)";
    $zwischentabelle = mysql_query($key_querry);

    $url1 = "Location: ../index.php";
    header($url1);
}
?>