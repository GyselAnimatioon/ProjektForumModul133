<?php

        const SALT = "oaidfsuocf23jla9oasöcè!?";

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

?>