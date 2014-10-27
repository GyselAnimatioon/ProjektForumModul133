<?php

function select_filter($where) {
    $_SESSION['site'] = "folder=Business&page=filter.php";
    $select_abfrage = "SELECT * "
            . "FROM user_nachricht un "
            . "LEFT JOIN nachrichten n ON n.id = un.nachrichten_id "
            . "LEFT JOIN user u ON u.id = un.user_id "
            . "LEFT JOIN gefaellt_mir g ON g.user_id = u.id "
            . "$where "
            . "GROUP BY n.id";
    //echo $select_abfrage;
    $select_ausgabe = mysql_query($select_abfrage);
    return $select_ausgabe;
}

?>