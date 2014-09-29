<?php

include_once './Business/password.php';

session_start();

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$password = encrypt_password($password);
$control = 0;
$server = "localhost";
$dbuser = "root";
$dbpassword = "";
$db = "mydb";

$querry = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

$connect = mysql_connect($server, $dbuser, $dbpassword)
        or die("Verbidung nicht Möglich!");

mysql_select_db($db)
        or die("Datenbank Fehler!");

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
    $url = "Location:index.php";
    header($url);
}

?>
