<?php

$password = md5($_POST['password']);
$password2 = md5($_POST['password2']);

if ($password != $password2) {

    echo "2 Verschiedene Passwörter!";
} else {

    $control = 0;
    $username = strtolower($_POST['username']);
    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];
    $mail = $_POST['mail'];
    $server = 'localhost';
    $dbuser = 'root';
    $dbpassword = '';
    $db = 'mydb';

    $select_querry = "SELECT username FROM user WHERE username = '$username'";
    $insert_querry = "INSERT INTO user VALUES(null,'$username','$vorname','$nachname','$mail','$password')";

    $connect = mysql_connect($server, $dbuser, $dbpassword)
            or die("Verbidung nicht Möglich!");

    mysql_select_db($db)
            or die("Datenbank Fehler!");

    $user_querry = mysql_query($select_querry);

    while ($row = mysql_fetch_object($user_querry)) {
        $control++;
    }

    if ($control != 0) {
        echo "Benutzername vergeben!";
    } else {
        $eintrag_querry = mysql_query($insert_querry);

        if ($eintrag_querry == true) {
            echo "Du hast dich Registriert! Melde dich nun <a href='index.php'>an</a>";
        } else {
            echo "Fehler beim Registrieren!";
        }
        mysql_close($connect);
    }
}
?>