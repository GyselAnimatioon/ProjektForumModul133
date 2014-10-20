<?php

function select_filter($where) {
    echo $where . "<br>";
    $_SESSION['site'] = "folder=Business&page=filter.php";
    $select_abfrage = "SELECT * "
            . "FROM gefaellt_mir g "
            . "INNER JOIN nachrichten n ON n.id = g.nachrichten_id "
            . "INNER JOIN user_nachricht un ON un.nachrichten_id = n.id "
            . "INNER JOIN user u ON u.id = un.user_id "
            . "$where "
            . "GROUP BY n.id";
    echo $select_abfrage;
    $select_ausgabe = mysql_query($select_abfrage);
    return $select_ausgabe;
}

?>