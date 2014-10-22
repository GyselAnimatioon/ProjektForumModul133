<?php

require_once 'Business/functions.php';
require_once 'Data/filter_sql.php';
require_once 'Presentation/filter_site.php';

$lang = filter_input(INPUT_POST, "lang");
$fav_color = filter_input(INPUT_POST, "fav_color");
$where = "WHERE ";
if($username != "") {
    $where .= "u.username = '$username' AND ";
}
if($vorname != "") {
    $where .= "u.vorname = '$vorname' AND ";
}
if($nachname != "") {
    $where .= "u.nachname = '$nachname' AND ";
}
if($mail != "") {
    $where .= "u.mail = '$mail' AND ";
}
if($birthdate != "") {
    $where .= "u.birthdate = '$birthdate' AND ";
}
if($fav_color != "") {
    $where .= "u.fav_color = '$fav_color' AND ";
}
if($fav_animal != "") {
    $where .= "u.fav_animal = '$fav_animal' AND ";
}
if($fav_food != "") {
    $where .= "u.fav_food = '$fav_food' AND ";
}
if($fav_drink != "") {
    $where .= "u.fav_drink = '$fav_drink' AND ";
}
if($lang != "") {
    $where .= "u.lang = '$lang' AND ";
}


$where .= "true = true ";

$select_ausgabe = select_filter($where);

while ($select_row = mysql_fetch_object($select_ausgabe)) {
    $ago = $select_row->erstellt_am;
    $_SESSION['nachrichten_id'] = "$select_row->nachrichten_id";
    $time_ago = time_ago_analyse($ago);
    require 'Presentation/nachricht_template.php';
}