
<?php

require_once './Business/functions.php';

$jz_monat = time() - 604800;

$select_abfrage = "SELECT "
        . "* "
        . "FROM "
        . "gefaellt_mir g "
        . "INNER JOIN nachrichten n ON n.id = g.nachrichten_id "
        . "INNER JOIN user_nachricht un ON un.nachrichten_id = n.id "
        . "INNER JOIN user u ON u.id = un.user_id "
        . "WHERE n.erstellt_am > $jz_monat "
        . "GROUP BY "
        . "g.nachrichten_id "
        . "ORDER BY "
        . "g.how "
        . "DESC";
//echo $select_abfrage;
$select_ausgabe = mysql_query($select_abfrage);
while ($select_row = mysql_fetch_object($select_ausgabe)) {
    $ago = $select_row->erstellt_am;
    $_SESSION['nachrichten_id'] = "$select_row->nachrichten_id";
    $time_ago = time_ago_analyse($ago);
    
    require 'Presentation/nachricht_template.php';
}
?>
