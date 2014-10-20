<?php

require_once 'Business/functions.php';
require_once 'Data/filter_sql.php';
require_once 'Presentation/filter_site.php';

/*
$lang = filter_input(INPUT_POST, "lang");
$fav_color = filter_input(INPUT_POST, "fav_color");
if($lang == "") {
    $lang = "'de','en','fr'";
}
if($fav_color == "") {
    $fav_color = "SELECT fav_color FROM nachrichten";
}
*/
$where = "WHERE n.lang = 'DE'";

$select_ausgabe = select_filter($where);
echo $select_ausgabe;
while ($select_row = mysql_fetch_object($select_ausgabe)) {
    $ago = $select_row->erstellt_am;
    $_SESSION['nachrichten_id'] = "$select_row->nachrichten_id";
    $time_ago = time_ago_analyse($ago);
    require 'Presentation/nachricht_template.php';
}