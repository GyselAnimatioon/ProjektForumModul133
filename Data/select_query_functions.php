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
        return $linie;
    }
}


?>