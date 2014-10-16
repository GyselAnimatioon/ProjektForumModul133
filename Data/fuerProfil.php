<?php
   require_once 'Business/functions.php';
    $username_session = $_GET['id'];

    $select_querry = "SELECT * FROM user WHERE id = '$username_session'";

    $nachrichten_querry = mysql_query($select_querry);
     $linie = mysql_fetch_object($nachrichten_querry);
     $linie->lang_text=get_language($linie->lang);
    ?>