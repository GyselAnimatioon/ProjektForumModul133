<?php

//print_r($_SESSION);

if (isset($_SESSION["login"])) {
    $title = filter_input(INPUT_POST, 'title');
    $text = filter_input(INPUT_POST, 'text');
    $edit = filter_input(INPUT_GET, "new");
    $date_db = time();
    $user_name = $_SESSION['username'];
    $n_id = $_SESSION['nachrichten_id'];
    //Neue Nachricht speichern
    if ($edit == 0) {
        $nachricht_einfuegen = "INSERT INTO nachrichten VALUES(null,'$title','$text',$date_db)";
    } elseif($edit == 1) {
        $nachricht_einfuegen = "UPDATE nachrichten SET titel='$title', nachricht='$text' WHERE id = $n_id";
        //echo $nachricht_einfuegen;
    }
    mysql_query($nachricht_einfuegen);
    //User ID Abfragen
    $user_id_abfrage = "SELECT * FROM user WHERE username LIKE '$user_name'";
    $user_id_ausgabe = mysql_query($user_id_abfrage);
    while ($user_id_row = mysql_fetch_object($user_id_ausgabe)) {
        $user_id = $user_id_row->id;
    }
    //Nachrichten ID Abfragen
    $nachricht_id_abfrage = "SELECT * FROM nachrichten WHERE erstellt_am = $date_db";
    $nachricht_id_ausgabe = mysql_query($nachricht_id_abfrage);
    while ($nachricht_id_row = mysql_fetch_object($nachricht_id_ausgabe)) {
        $nachricht_id = $nachricht_id_row->id;
    }
    //User Nachricht Beziehung erstellen
    if ($edit == 0) {
        $wer_erstellt_nachricht = "INSERT INTO user_nachricht VALUES($user_id,$nachricht_id)";
        mysql_query($wer_erstellt_nachricht);
    }
    $url1 = "Location: ../index.php?folder=Business&page=nachrichten_ausgeben.php&exec=nachricht";
    header($url1);
}
?>