<?php

require_once 'Business/functions.php';
require_once 'Data/select_query_functions.php';
$select_ausgabe = select_best_nachricht();

while ($select_row = mysql_fetch_object($select_ausgabe)) {
    $ago = $select_row->erstellt_am;
    $_SESSION['nachrichten_id'] = "$select_row->nachrichten_id";
    $time_ago = time_ago_analyse($ago);

    $plus = get_nachrichten_like($_SESSION['nachrichten_id']);
    //$minus = get_nachrichten_dislike($_SESSION['nachrichten_id']);

    require 'Presentation/nachricht_template.php';
}
?>
