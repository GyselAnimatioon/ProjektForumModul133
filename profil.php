<?php

session_start();



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

        echo "Deine ID in userer Datenbank ist: " . $row->id . "<br>";
        echo "Dein Username ist: " . $row->username . "<br>";
        echo "Dein Vorname ist: " . $row->vorname . "<br>";
        echo "Dein Nachname ist: " . $row->nachname . "<br>";
        echo "Deine EMail lauten: " . $row->mail;
    }
}
?>