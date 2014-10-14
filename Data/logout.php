<?php

session_start();

session_destroy();
$_SESSION["login"] = 0;
$url1 = "Location: ../index.php";
header($url1);
?>