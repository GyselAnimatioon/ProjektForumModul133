<?php

const SALT = "oaidfsuocf23jla9oaöcè!?";

function encrypt_password($password) {
    $secret_salt = SALT;
    $salted_password = $secret_salt . $password;
    $password_hash = hash('sha256', $salted_password);

    return $password_hash;
}

?>