<?php

include_once 'Business/password.php';



$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$password = encrypt_password($password);
$control = 0;
include_once "./Data/DBConnection.php";


$querry = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";



$login_querry = mysql_query($querry);

while ($row = mysql_fetch_object($login_querry)) {
    $control++;
}

if ($control != 0) {
    $_SESSION["username"] = $username;
    $_SESSION["login"] = 1;
    $url = "Location:index.php";
    header($url);
} else {
    $_SESSION["login"] = 2;
    $_SESSION["message"] = "Benutzer nicht gefunden";
    session_destroy();
    unset($_SESSION);
    unset($_POST);
    unset($_GET);
    $url = "Location:index.php";
    header($url);
}

?>
