<?php

function select_filter($where) {
    $_SESSION['site'] = "folder=Business&page=filter.php";
    $select_abfrage = "SELECT * "
            . "FROM user_nachricht un "
            . "LEFT JOIN nachrichten n ON n.n_id = un.nachrichten_id "
            . "LEFT JOIN user u ON u.u_id = un.user_id "
            . "LEFT JOIN gefaellt_mir g ON g.user_id = u.u_id "
            . "$where "
            . "GROUP BY n.n_id";
    //echo $select_abfrage;
    $select_ausgabe = mysql_query($select_abfrage);
    return $select_ausgabe;
}

?>