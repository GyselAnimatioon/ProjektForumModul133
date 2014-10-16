<?php

        const SALT = "oaidfsuocf23jla9oasöcè!?";
$lang = array('EN' => 'Englisch', 'FR' => 'Franzoesisch', 'DE' => 'Deutsch');

function encrypt_password($password) {
    $secret_salt = SALT;
    $salted_password = $secret_salt . $password;
    $password_hash = hash('sha256', $salted_password);

    return $password_hash;
}

function time_ago_analyse($ago) {
    $ago = time() - $ago;
    if ($ago < 60) {
        $time_ago = round($ago) . " sek ago";
    } elseif ($ago < 3600) {
        $time_ago = round(($ago / 60)) . " min ago";
    } elseif ($ago < 86400) {
        $time_ago = round(($ago / 3600)) . " hours ago";
    } elseif ($ago < 31536000) {
        $time_ago = round(($ago / 86400)) . " days ago";
    } elseif ($ago < 315360000) {
        $time_ago = round(($ago / 31536000)) . " years ago";
    } elseif ($ago > 315360000) {
        $time_ago = "SEHR SEHR LANG";
    } else {
        $time_ago = "fehler";
    }
    return $time_ago;
}

function check_email($email) {
    $muster = '^([^\s@,:"<>]+)@([^\s@,:"<>]+\.[^\s@,:"<>.\d]{2,}|(\d{1,3}\.){3}\d{1,3})$';
    if (preg_match("/$muster/", $email)) {
        return "true";
    } else {
        return "false";
    }
}

function get_lang($lang_adk) {
    global $lang;
    if (isset($lang[$lang_adk])) {
        return $lang[$lang_adk];
    }
    return 'Nichts Ausgewählt';
}

function getmail() {

    if (isset($_SESSION['mail_ok'])) {
        if ($_SESSION['mail_ok'] == 0) {
            echo "<span style='color:red;'>Falsches Format</span>";
        } else {
            echo $linie->mail;
        }
    } else {
        echo $linie->mail;
    }
}
function check_email2($email) {
    $muster = '^([^\s@,:"<>]+)@([^\s@,:"<>]+\.[^\s@,:"<>.\d]{2,}|(\d{1,3}\.){3}\d{1,3})$';
    if (preg_match("/$muster/", $email)) {
        return $email;
    } else {
        return "<span style='color:red;'>Falsches Format</span>";
    }

}

?>