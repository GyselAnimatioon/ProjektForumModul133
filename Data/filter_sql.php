<?php

function select_filter($where) {
    $_SESSION['site'] = "folder=Business&page=filter.php";
    $select_abfrage = "SELECT * "
            . "FROM user_nachricht un "
            . "INNER JOIN nachrichten n ON n.id = un.nachrichten_id "
            . "INNER JOIN user u ON u.id = un.user_id "
            . "INNER JOIN gefaellt_mir g ON g.user_id = u.id "
            . "$where "
            . "GROUP BY n.id";
    //echo $select_abfrage;
    $select_ausgabe = mysql_query($select_abfrage);
    return $select_ausgabe;
}

?>