<?php

require_once './Business/functions.php';

$select_abfrage = "SELECT "
        . "* "
        . "FROM "
        . "gefaellt_mir g "
        . "INNER JOIN nachrichten n ON n.id = g.nachrichten_id "
        . "INNER JOIN user_nachricht un ON un.nachrichten_id = n.id "
        . "INNER JOIN user u ON u.id = un.user_id "
        . "GROUP BY "
        . "g.nachrichten_id "
        . "ORDER BY "
        . "g.how "
        . "DESC";
$select_ausgabe = mysql_query($select_abfrage);

while ($select_row = mysql_fetch_object($select_ausgabe)) {
    $ago = $select_row->erstellt_am;
    $_SESSION['nachrichten_id'] = "$select_row->nachrichten_id";
    $time_ago = time_ago_analyse($ago);


    //Nachrichten ID Abfrage
    $nachrichten_id = $_SESSION['nachrichten_id'];

    //Wieviele Likes Abfrage
    $plus_abfrage = "SELECT COUNT(how) AS how FROM gefaellt_mir WHERE nachrichten_id = '$nachrichten_id' AND how = 1";
    $plus_ausgabe = mysql_query($plus_abfrage);
    while ($plus_row = mysql_fetch_object($plus_ausgabe)) {
        $plus = $plus_row->how;
    }

    //Wieviele Dislikes Abfrage
    $minus_abfrage = "SELECT COUNT(how) AS how FROM gefaellt_mir WHERE nachrichten_id = '$nachrichten_id' AND how = 0";
    $minus_ausgabe = mysql_query($minus_abfrage);
    while ($minus_row = mysql_fetch_object($minus_ausgabe)) {
        $minus = $minus_row->how;
    }
    require 'Presentation/nachricht_template.php';
}
?>
