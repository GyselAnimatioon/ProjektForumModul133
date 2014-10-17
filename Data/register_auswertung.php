<?php

include_once './Business/functions.php';
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
    $select_querry = "SELECT username FROM user WHERE username = '$username'";
    $insert_querry = "INSERT INTO user VALUES(null,'$username','$vorname','$nachname','$mail','$password',null,null,null,null,null,null,null,null,null,null,null,null)";
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
            $url1 = "Location: ../index.php?folder=Business&page=nachrichten_ausgeben.php&exec=nachricht";
            header($url1);
        } else {
            $_SESSION["login"] = 0;
            $url1 = "Location: ../index.php?folder=Presentation&page=register.php";
            header($url1);
        }
        mysql_close($connect);
    }
}
?>