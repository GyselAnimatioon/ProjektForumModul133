<?php

session_start();

$username = strtolower($_POST['username']);
$password = md5($_POST['password']);
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
    echo "Login geht";
} else {
    echo "Login geht nicht";
}

?>