<?php

session_start();

if (isset($_SESSION["login"])) {

    $title = filter_input(INPUT_POST, 'title');
    $text = filter_input(INPUT_POST, 'text');
    $date = $_POST["date"];
    $server = 'localhost';
    $dbuser = 'root';
    $dbpassword = '';
    $db = 'mydb';
    $username_session = $_SESSION['username'];
    $control = 0;
    $control2 = 0;
    $control3 = 0;

    $connect = mysql_connect($server, $dbuser, $dbpassword)
            or die("Verbidung nicht Möglich!");

    mysql_select_db($db)
            or die("Datenbank Fehler!");

    $message_querry = "INSERT INTO nachrichten VALUES(null,'$title','$text',0,0,'$date')";
    $nachrichten_querry = mysql_query($message_querry);

    $profil_querry = "SELECT * FROM user WHERE username = '$username_session'";
    $profil = mysql_query($profil_querry);
    while ($row = mysql_fetch_object($profil)) {
        $control2++;
        $user_id = $row->id;
    }

    $nachricht_querry = "SELECT * FROM nachrichten WHERE erstellt_am = '$date'";
    $nachricht = mysql_query($nachricht_querry);
    while ($row = mysql_fetch_object($nachricht)) {
        $control3++;
        $nachricht_id = $row->id;
    }

    $key_querry = "INSERT INTO user_nachricht VALUES($user_id,$nachricht_id)";
    $zwischentabelle = mysql_query($key_querry);

    $url = "Location:index.php";
    header($url);
}
?>