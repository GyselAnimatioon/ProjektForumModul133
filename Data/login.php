<?php

include_once 'Business/functions.php';


$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$password = encrypt_password($password);
$control = 0;

$querry = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

$login_querry = mysql_query($querry);

while ($linie = mysql_fetch_object($login_querry)) {

    $control++;
}

if ($control != 0) {
    $_SESSION["username"] = $username;
    $_SESSION["login"] = 1;
    $_SESSION["message"] = "";
    $url1 = "Location: ../index.php?folder=Business&page=nachrichten_ausgeben.php&exec=nachricht";
    header($url1);
} else {
    //$_SESSION["login"] = 2;
    $_SESSION["message"] = "";
    $url1 = "Location: ../index.php?folder=Business&page=nachrichten_ausgeben.php&exec=nachricht";
    header($url1);
}/*
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
 */
?>
