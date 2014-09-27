<?php

session_start();




$username2 = filter_input(INPUT_POST, 'username2');
$vorname2 = filter_input(INPUT_POST, 'vorname2');
$nachname2 = filter_input(INPUT_POST, 'nachname2');
$mail2 = filter_input(INPUT_POST, 'mail2');
$username = $_SESSION['username'];

$server = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$db = 'mydb';

$update_querry = "UPDATE user SET username = '$username2', vorname = '$vorname2', nachname = '$nachname2', mail = 'mail2' WHERE username = '$username'";

$connect = mysql_connect($server, $dbuser, $dbpassword)
        or die("Verbidung nicht Möglich!");

mysql_select_db($db)
        or die("Datenbank Fehler!");

$updatee_querry = mysql_query($update_querry);

$_SESSION['username'] = $username2;
$_SESSION['vorname'] = $vorname2;
$_SESSION['nachname'] = $nachname2;
$_SESSION['mail'] = $mail2;
$url = "Location: index.php";
header($url);

?>