<?php

require_once './Business/functions.php';
$select_abfrage = "SELECT "
        . "* "
        . "FROM "
        . "nachrichten n "
        . "INNER JOIN user_nachricht un ON un.nachrichten_id = n.id "
        . "INNER JOIN user u ON un.user_id = u.id "
        . "ORDER BY "
        . "n.erstellt_am "
        . "DESC";

$select_ausgabe = mysql_query($select_abfrage);

while ($select_row = mysql_fetch_object($select_ausgabe)) {
    $ago = $select_row->erstellt_am;
    $_SESSION['nachrichten_id'] = "$select_row->nachrichten_id";
    $time_ago = time_ago_analyse($ago);
    
    require 'Presentation/nachricht_template.php';
}
?>