<?php

//Username Abfrage
$user_name = $_SESSION['username'];
//Wie Bewertet Abfrage
$how = filter_input(INPUT_GET, 'how');
//Schonmal Bewertet Abfrage
//$new = filter_input(INPUT_GET, 'new');
//Nachrichten ID Abfrage
$nachrichten_id = filter_input(INPUT_GET, 'id');
//User ID Abfrage
$user_id_abfrage = "SELECT * FROM user WHERE username LIKE '$user_name'";
$user_id_ausgabe = mysql_query($user_id_abfrage);
while ($user_id_row = mysql_fetch_object($user_id_ausgabe)) {
    $user_id = $user_id_row->id;
}

if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {

    //echo "hi";
    $sql = "select count(*) as count from gefaellt_mir where user_id = $user_id and nachrichten_id = $nachrichten_id";
    //echo $sql . "<br>" . $nachrichten_id;
    $result = mysql_query($sql);
    $data = mysql_fetch_assoc($result);
    if ($data['count'] > 0) {
        $like = "UPDATE gefaellt_mir SET how = $how WHERE user_id = '$user_id' AND nachrichten_id = '$nachrichten_id'";
    } else if ($data['count'] == 0) {
        $like = "INSERT INTO gefaellt_mir VALUES('$user_id','$nachrichten_id',$how)";
    }
}

$like_ausgabe = mysql_query($like);
//echo $like;
$site = $_SESSION['site'];
$url = "Location: ../index.php?$site";
header($url);
?>