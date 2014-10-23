<?php

require_once 'Business/functions.php';
require_once 'Data/filter_sql.php';
require_once 'Presentation/filter_site.php';
/*
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
 */
$where = "WHERE ";
foreach ($_POST as $key => $value) {
    //echo "$key => $value<br>";
    if ($value != "") {
        $where .= "u.$key REGEXP '$value' AND ";
        $where = str_replace("1 REGEXP 'on'", "facebook IS NOT NULL", $where);
    }
}
$where .= "true = true ";



//echo $where;


$select_ausgabe = select_filter($where);

//echo $select_ausgabe;

while ($select_row = mysql_fetch_object($select_ausgabe)) {



    $ago = $select_row->erstellt_am;
    $_SESSION['nachrichten_id'] = "$select_row->nachrichten_id";
    $time_ago = time_ago_analyse($ago);
    require 'Presentation/nachricht_template.php';
}