<?php

if (isset($_SESSION["login"])) {
    $title = filter_input(INPUT_POST, 'title');
    $text = filter_input(INPUT_POST, 'text');
    $date_db = time();
    $user_name = $_SESSION['username'];
    $nachricht_einfuegen = "INSERT INTO nachrichten VALUES(null,'$title','$text',$date_db)";
    mysql_query($nachricht_einfuegen);
    $user_id_abfrage = "SELECT * FROM user WHERE username LIKE '$user_name'";
    $user_id_ausgabe = mysql_query($user_id_abfrage);
    while ($user_id_row = mysql_fetch_object($user_id_ausgabe)) {
        $user_id = $user_id_row->id;
    }
    $nachricht_id_abfrage = "SELECT * FROM nachrichten WHERE erstellt_am = $date_db";
    $nachricht_id_ausgabe = mysql_query($nachricht_id_abfrage);
    while ($nachricht_id_row = mysql_fetch_object($nachricht_id_ausgabe)) {
        $nachricht_id = $nachricht_id_row->id;
    }
    $wer_erstellt_nachricht = "INSERT INTO user_nachricht VALUES($user_id,$nachricht_id)";
    mysql_query($wer_erstellt_nachricht);
    $url1 = "Location: ../index.php?folder=Business&page=nachrichten_ausgeben.php&exec=nachricht";
    header($url1);
}
?>