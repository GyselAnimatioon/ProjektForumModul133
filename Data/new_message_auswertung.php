<?php

session_start();

require_once 'DBConnection.php';

if (isset($_SESSION["login"])) {

    $title = filter_input(INPUT_POST, 'title');
    $text = filter_input(INPUT_POST, 'text');
    $date_db = time();
    //$date_for_db = date("Y:m:d G:i:s", mktime($date_h, $date_min, $date_sek, $date_m, $date_day, $date_y));
    //$date_for_view = date("G, i, s, n, j, Y", mktime($date_h, $date_min, $date_sek, $date_m, $date_day, $date_y));
    $user_name = $_SESSION['username'];

    $nachricht_einfuegen = "INSERT INTO nachrichten VALUES(null,'$title','$text',$date_db)";
    mysql_query($nachricht_einfuegen);

    //User ID abfrage
    $user_id_abfrage = "SELECT * FROM user WHERE username LIKE '$user_name'";
    $user_id_ausgabe = mysql_query($user_id_abfrage);
    while ($user_id_row = mysql_fetch_object($user_id_ausgabe)) {
        $user_id = $user_id_row->id;
    }

    //Nachricht ID abfrage
    $nachricht_id_abfrage = "SELECT * FROM nachrichten WHERE erstellt_am = $date_db";
    $nachricht_id_ausgabe = mysql_query($nachricht_id_abfrage);
    while ($nachricht_id_row = mysql_fetch_object($nachricht_id_ausgabe)) {
        $nachricht_id = $nachricht_id_row->id;
    }

    //User und Nachricht id ausgabe
    echo "User ID: $user_id <br>Nachricht ID: $nachricht_id";

    //wer hat welche nachricht erstellt in user_nachricht schreiben
    $wer_erstellt_nachricht = "INSERT INTO user_nachricht VALUES($user_id,$nachricht_id)";
    mysql_query($wer_erstellt_nachricht);

    //weiterleitung
    $url1 = "Location: ../index.php";
    header($url1);
}
?>