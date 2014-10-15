<?php


$server = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$db = 'mydb';

if (isset($_SESSION['username'])) {
    $username_session = $_SESSION['username'];
}
$connect = mysql_connect($server, $dbuser, $dbpassword)
        or die("Verbidung nicht Möglich!");

mysql_select_db($db)
        or die("Datenbank Fehler!");
?>