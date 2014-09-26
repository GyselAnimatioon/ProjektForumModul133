<?php

session_start();

if (isset($_SESSION["login"])) {

    $title = filter_input(INPUT_POST, 'title');
    $text = filter_input(INPUT_POST, 'text');
    $date = $_POST["date"];
    $server = 'localhost';
    $dbuser = 'root';
    $dbpassword = '';
    $db = 'mydb';
    
    //print_r($_POST);

    $message_querry = "INSERT INTO nachrichten VALUES(null,'$title','$text',0,0,'$date')";

    $connect = mysql_connect($server, $dbuser, $dbpassword)
            or die("Verbidung nicht Möglich!");

    mysql_select_db($db)
            or die("Datenbank Fehler!");

    $nachrichten_querry = mysql_query($message_querry);


    while ($row = mysql_fetch_object($nachrichten_querry)) {
        $control++;
    }
    
    $url = "Location:index.php";
    header($url);
}
?>