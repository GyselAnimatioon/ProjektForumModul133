<?php

session_start();

$server = "localhost";
$dbuser = "root";
$dbpassword = "";
$db = "mydb";
$username_session = $_SESSION['username'];
$how = $_GET['how'];
$new = $_GET['new'];
$n_id = $_GET['id'];

$connect = mysql_connect($server, $dbuser, $dbpassword)
        or die("Verbidung nicht Möglich!");

mysql_select_db($db)
        or die("Datenbank Fehler!");

$abfrage_user = "SELECT id FROM user WHERE username LIKE '$username_session'";
$ergebnis_user = mysql_query($abfrage_user);
while ($row = mysql_fetch_object($ergebnis_user)) {
    $id = $row->id;
}

if ($new == 0) {
    if ($how == 1) {
        $querry = "UPDATE nachrichten SET daumen_hoch = daumen_hoch + 1 WHERE id = '$n_id'";
        $querry2 = "UPDATE gefaellt_mir SET how = 1 WHERE nachrichten_id = '$n_id'";
        $querry3 = "UPDATE nachrichten SET daumen_runter = daumen_runter - 1 WHERE id = '$n_id'";
        echo "new0how1";
    } elseif ($how == 0) {
        $querry = "UPDATE nachrichten SET daumen_runter = daumen_runter + 1 WHERE id = '$n_id'";
        $querry2 = "UPDATE gefaellt_mir SET how = 0 WHERE nachrichten_id = '$n_id'";
        $querry3 = "UPDATE nachrichten SET daumen_hoch = daumen_hoch - 1 WHERE id = '$n_id'";
        echo "new0how0";
    }
} elseif ($new == 1) {
    if ($how == 1) {
        $querry = "UPDATE nachrichten SET daumen_hoch = daumen_hoch + 1 WHERE id = '$n_id'";
        $querry2 = "INSERT INTO gefaellt_mir VALUES($id,$n_id,1)";
        $querry3 = "    ";
        echo "new1how1";
    } elseif ($how == 0) {
        $querry = "UPDATE nachrichten SET daumen_runter = daumen_runter + 1 WHERE id = '$n_id'";
        $querry2 = "INSERT INTO gefaellt_mir VALUES($id,$n_id,0)";
        $querry3 = "";
        echo "new1how0";
    }
}
echo "<br><br>" . $querry . "<br><br>" . $querry2 . "<br><br>" . $querry3;
$ergebnis = mysql_query($querry);
$ergebnis2 = mysql_query($querry2);
$ergebnis3 = mysql_query($querry3);

$url = "Location: index.php";
header($url);
?>