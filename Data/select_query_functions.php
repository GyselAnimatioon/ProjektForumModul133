<?php

function query_profile() {
    $username_session = $_GET['id'];
    $select_querry = "SELECT * FROM user WHERE id = '$username_session'";
    $nachrichten_querry = mysql_query($select_querry);
    $linie = mysql_fetch_object($nachrichten_querry);
    $linie->lang_text = get_lang($linie->lang);
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

function who_nachrichten($username) {
    $user_name_abfrage = "SELECT * FROM user WHERE username = '$username'";
    $user_name_ausgabe = mysql_query($user_name_abfrage);
    $linie = mysql_fetch_object($user_name_ausgabe);
    $id = $linie->id;

    $select_querry = "SELECT * FROM nachrichten n INNER JOIN user_nachricht un ON un.nachrichten_id = n.id "
            . "INNER JOIN user u ON un.user_id = u.id WHERE un.user_id = '$id'";
    $nachrichten_querry = mysql_query($select_querry);
    return $nachrichten_querry;
}

?>