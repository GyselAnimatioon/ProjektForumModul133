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
include_once "Data/DBConnection.php";
    $select_querry = "SELECT username FROM user WHERE username = '$username'";
    $insert_querry = "INSERT INTO user VALUES(null,'$username','$vorname','$nachname','$mail','$password')";



    $user_querry = mysql_query($select_querry);

    while ($row = mysql_fetch_object($user_querry)) {
        $control++;
    }

    if ($control != 0) {
        echo "Benutzername vergeben!";
    } else {
      
        $eintrag_querry = mysql_query($insert_querry);

        if ($eintrag_querry == true ) {
            /*der benutzer wurde gefunden*/
            $_SESSION["username"] = $username;
            $_SESSION["login"] = 1;
            $url = "Location:index.php";
            header($url);
        } else {
            $_SESSION["login"] = 0;
            $url = "Location:register.php";
            header($url);
        }
        mysql_close($connect);
    }
}
?>