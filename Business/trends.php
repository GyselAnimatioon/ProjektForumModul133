<?php

require_once 'Business/functions.php';
require_once 'Data/select_query_functions.php';
$select_ausgabe = select_trends();

while ($select_row = mysql_fetch_object($select_ausgabe)) {
    $ago = $select_row->erstellt_am;
    $_SESSION['nachrichten_id'] = "$select_row->nachrichten_id";
    $time_ago = time_ago_analyse($ago);

    require 'Presentation/nachricht_template.php';
}
?>
