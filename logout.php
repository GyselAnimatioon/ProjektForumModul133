<?php

session_start();
session_destroy();
$_SESSION["login"] = 0;
$url = "Location:index.php";
header($url);

?>