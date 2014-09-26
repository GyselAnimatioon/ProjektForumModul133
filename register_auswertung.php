<?php

include_once './Business/password.php';

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