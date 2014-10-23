<?php

function query_profile() {
    $username_session = $_GET['id'];
    $select_querry = "SELECT * FROM user WHERE id = '$username_session'";
    $nachrichten_querry = mysql_query($select_querry);
    $linie = mysql_fetch_object($nachrichten_querry);
    $linie->lang_text = get_lang($linie->lang);
    return $linie;
}

function query_filter() {
    $linie = array();
    foreach ($_POST as $key => $values) {
        if (is_int($key)) {
            $linie[$key] = "checked='checked'";
        } else {
            $linie[$key] = $values;
        }
    }
    return $linie;
}

function query_profil() {
    if (isset($_SESSION["login"])) {
        $username_session = $_SESSION['username'];
        $select_querry = "SELECT * FROM user WHERE username = '$username_session'";
        $nachrichten_querry = mysql_query($select_querry);
        $linie = mysql_fetch_object($nachrichten_querry);
        $linie->lang_text = get_lang($linie->lang);
        $linie->email_text = check_email2($linie->mail);
        $linie->color_text = get_fav($linie->fav_color);
        $linie->animal_text = get_fav($linie->fav_animal);
        $linie->food_text = get_fav($linie->fav_food);
        $linie->drink_text = get_fav($linie->fav_drink);
        return $linie;
    }
}

function who_nachrichten($username, $site) {
    $_SESSION['site'] = $site;
    $user_name_abfrage = "SELECT * FROM user WHERE username = '$username'";
    $user_name_ausgabe = mysql_query($user_name_abfrage);
    $linie = mysql_fetch_object($user_name_ausgabe);
    $id = $linie->id;
    $select_querry = "SELECT * FROM nachrichten n INNER JOIN user_nachricht un ON un.nachrichten_id = n.id "
            . "INNER JOIN user u ON un.user_id = u.id WHERE un.user_id = '$id'";
    $nachrichten_querry = mysql_query($select_querry);
    return $nachrichten_querry;
}

function select_best() {
    $_SESSION['site'] = "folder=Business&page=nachrichten_ausgeben.php&exec=best";
    $select_abfrage = "SELECT SUM(g.how) AS total, n.titel, n.nachricht, n.erstellt_am, un.user_id, u.username, un.nachrichten_id "
            . "FROM gefaellt_mir g "
            . "INNER JOIN nachrichten n ON n.id = g.nachrichten_id "
            . "INNER JOIN user_nachricht un ON un.nachrichten_id = n.id "
            . "INNER JOIN user u ON u.id = un.user_id "
            . "GROUP BY g.nachrichten_id ORDER BY total DESC";
    $select_ausgabe = mysql_query($select_abfrage);
    return $select_ausgabe;
}

function select_nachricht() {
    $_SESSION['site'] = "folder=Business&page=nachrichten_ausgeben.php&exec=nachricht";
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
    return $select_ausgabe;
}

function select_random() {
    $_SESSION['site'] = "folder=Business&page=nachrichten_ausgeben.php&exec=random";
    $max_querry = "SELECT * FROM nachrichten ORDER BY id DESC LIMIT 1";
    $maxx_querry = mysql_query($max_querry);
    while ($linie = mysql_fetch_object($maxx_querry)) {
        $max = $linie->id;
    }
    $min_querry = "SELECT * FROM nachrichten ORDER BY id ASC LIMIT 1";
    $minn_querry = mysql_query($min_querry);
    while ($linie = mysql_fetch_object($minn_querry)) {
        $min = $linie->id;
    }
    if (!empty($min) && !empty($max)) {
        $random = rand($min, $max);
        $select_abfrage = "SELECT * FROM nachrichten n "
                . "INNER JOIN user_nachricht un ON un.nachrichten_id = n.id "
                . "INNER JOIN user u ON un.user_id = u.id "
                . "WHERE n.id = '$random'";
        $select_ausgabe = mysql_query($select_abfrage);
    }
    return $select_ausgabe;
}

function select_trends() {
    $_SESSION['site'] = "folder=Business&page=nachrichten_ausgeben.php&exec=trends";
    $jz_monat = time() - 604800;
    $select_abfrage = "SELECT * FROM gefaellt_mir g "
            . "INNER JOIN nachrichten n ON n.id = g.nachrichten_id "
            . "INNER JOIN user_nachricht un ON un.nachrichten_id = n.id "
            . "INNER JOIN user u ON u.id = un.user_id "
            . "WHERE n.erstellt_am > $jz_monat GROUP BY g.nachrichten_id "
            . "ORDER BY g.how DESC";
    $select_ausgabe = mysql_query($select_abfrage);
    return $select_ausgabe;
}

function select_profil_nachrichten() {
    $_SESSION['site'] = "folder=Businness&page=nachrichten_ausgeben.php&exec=profil_nachrichten";
    $linie = query_profil();
    $param = get_nachrichten($linie->username);
    return who_nachrichten($linie->username, $param);
}

function select_profile_nachrichten() {
    $_SESSION['site'] = "folder=Businness&page=nachrichten_ausgeben.php&exec=profile_nachrichten";
    $linie = query_profile();
    $param = get_nachrichten($linie->username);
    return who_nachrichten($linie->username, $param);
}

function get_nachrichten_like($nachrichten_id) {
    $plus_abfrage = "SELECT COUNT(how) AS how FROM gefaellt_mir WHERE nachrichten_id = '$nachrichten_id' AND how = 1";
    $plus_ausgabe = mysql_query($plus_abfrage);
    while ($plus_row = mysql_fetch_object($plus_ausgabe)) {
        $plus = $plus_row->how;
    }
    return $plus;
}

function get_nachrichten_dislike($nachrichten_id) {
    $minus_abfrage = "SELECT COUNT(how) AS how FROM gefaellt_mir WHERE nachrichten_id = '$nachrichten_id' AND how = 0";
    $minus_ausgabe = mysql_query($minus_abfrage);
    while ($minus_row = mysql_fetch_object($minus_ausgabe)) {
        $minus = $minus_row->how;
    }
    return $minus;
}

function get_user_id() {
    $user_name = $_SESSION['username'];
    $user_id_abfrage = "SELECT * FROM user WHERE username = '$user_name'";
    $user_id_ausgabe = mysql_query($user_id_abfrage);
    while ($user_id_row = mysql_fetch_object($user_id_ausgabe)) {
        $user_id = $user_id_row->id;
        $_SESSION['id'] = $user_id;
    }
    return $user_id;
}

function get_nachrichten_id() {
    $nachrichten_id = $_SESSION['nachrichten_id'];
    return $nachrichten_id;
}

?>