<?php

include_once './Business/password.php';

session_start();

$password = filter_input(INPUT_POST, 'password');
$password2 = filter_input(INPUT_POST, 'password2');

$password = encrypt_password($password);
$password2 = encrypt_password($password2);

if ($password != $password2) {
    echo "2 Verschiedene Passwörter!";
} else {



    $control = 0;
    $username = filter_input(INPUT_POST, 'username');
    $vorname = filter_input(INPUT_POST, 'vorname');
    $nachname = filter_input(INPUT_POST, 'nachname');
    $mail = filter_input(INPUT_POST, 'mail');
    $server = 'localhost';
    $dbuser = 'root';
    $dbpassword = '';
    $db = 'mydb';

    $select_querry = "SELECT username FROM user WHERE username = '$username'";
    $insert_querry = "INSERT INTO user VALUES(null,'$username','$vorname','$nachname','$mail','$password',null,null,null,null,null,null,null,null,null,null,null,null)";

    $connect = mysql_connect($server, $dbuser, $dbpassword)
            or die("Verbidung nicht Möglich!");

    mysql_select_db($db)
            or die("Datenbank Fehler!");

    $user_querry = mysql_query($select_querry);

    while ($linie = mysql_fetch_object($user_querry)) {
        $control++;
    }

    if ($control != 0) {
        echo "Benutzername vergeben!";
    } else {
        $eintrag_querry = mysql_query($insert_querry);

        if ($eintrag_querry == true) {
            $_SESSION["username"] = $username;
            $_SESSION["login"] = 1;
            $url1 = "Location:index.php";
            header($url1);
        } else {
            $_SESSION["login"] = 0;
            $url1 = "Location:register.php";
            header($url1);
        }
        mysql_close($connect);
    }
}
?>