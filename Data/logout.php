<?php
session_destroy();
$_SESSION["login"] = 0;
$url1 = "Location: ../index.php?folder=Business&page=nachrichten_ausgeben.php&exec=nachricht";
header($url1);
?>