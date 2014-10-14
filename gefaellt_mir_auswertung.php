<?php

session_start();

require_once './Data/DBConnection.php';

//Username Abfrage
$user_name = $_SESSION['username'];
//Wie Bewertet Abfrage
$how = $_GET['how'];
//Schonmal Bewertet Abfrage
$new = $_GET['new'];
//Nachrichten ID Abfrage
$nachrichten_id = $_GET['id'];
//User ID Abfrage
$user_id_abfrage = "SELECT * FROM user WHERE username LIKE '$user_name'";
$user_id_ausgabe = mysql_query($user_id_abfrage);
while ($user_id_row = mysql_fetch_object($user_id_ausgabe)) {
    $user_id = $user_id_row->id;
}

if($new == 1) {
    if($how == 1) {
        $like = "INSERT INTO gefaellt_mir VALUES('$user_id','$nachrichten_id',1)";
    } else if($how == 0) {
        $like = "INSERT INTO gefaellt_mir VALUES('$user_id','$nachrichten_id',0)";
    }
} else if($new == 0) {
    if($how == 1) {
        $like = "UPDATE gefaellt_mir SET how = 1 WHERE user_id = '$user_id' AND nachrichten_id = '$nachrichten_id'";
    } else if($how == 0) {
        $like = "UPDATE gefaellt_mir SET how = 0 WHERE user_id = '$user_id' AND nachrichten_id = '$nachrichten_id'";
    }
}

$like_ausgabe = mysql_query($like);
$url = "Location: index.php";
header($url);

?>