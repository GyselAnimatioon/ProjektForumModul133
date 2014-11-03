<?php

$user_name = $_SESSION['username'];
$how = filter_input(INPUT_GET, 'how');
$nachrichten_id = filter_input(INPUT_GET, 'id');
$user_id_abfrage = "SELECT * FROM user WHERE username LIKE '$user_name'";
$user_id_ausgabe = mysql_query($user_id_abfrage);
while ($user_id_row = mysql_fetch_object($user_id_ausgabe)) {
    $user_id = $user_id_row->u_id;
}
if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
    $sql = "select count(*) as count from gefaellt_mir where user_id = $user_id and nachrichten_id = $nachrichten_id";
    $result = mysql_query($sql);
    $data = mysql_fetch_assoc($result);
    if ($data['count'] > 0) {
        $like = "UPDATE gefaellt_mir SET how = $how WHERE user_id = '$user_id' AND nachrichten_id = '$nachrichten_id'";
    } else if ($data['count'] == 0) {
        $like = "INSERT INTO gefaellt_mir VALUES('$user_id','$nachrichten_id',$how)";
    }
}
$like_ausgabe = mysql_query($like);
$site = $_SESSION['site'];
$url = "Location: ../index.php?$site";
header($url);
?>