<?php
require_once 'Business/functions.php';
require_once 'Data/select_query_functions.php';
$result_set = who_nachrichten($linie->username,"folder=Presentation&page=profile.php&id=$linie->id");
while ($select_row = mysql_fetch_object($result_set)) {
    $ago = $select_row->erstellt_am;
    $_SESSION['nachrichten_id'] = "$select_row->nachrichten_id";
    $time_ago = time_ago_analyse($ago);
    require 'Presentation/nachricht_template.php';
}
?>