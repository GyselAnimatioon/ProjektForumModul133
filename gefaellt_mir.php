<?php

if (isset($_SESSION['login'])) {
    if ($_SESSION['login'] == 1) {


        $username_session = $_SESSION['username'];

        $server = 'localhost';
        $dbuser = 'root';
        $dbpassword = '';
        $db = 'mydb';



        $username_querry = "SELECT * FROM user WHERE username = '$username_session'";
        $usernamee_querry = mysql_query($username_querry);
        while ($row2 = mysql_fetch_object($usernamee_querry)) {
            $id = $row2->id;
        }




        $select_querry = "SELECT * FROM gefaellt_mir g inner join user u on u.id = g.user_id WHERE g.user_id = $id";
        $selectt_querry = mysql_query($select_querry);
        while ($row2 = mysql_fetch_object($selectt_querry)) {
            $nachrichten_id = $row2->nachrichten_id;

            if ($row->id == $nachrichten_id) {
                if ($row2->how == 1) {
                    echo "<span style='color: green;border:1px solid gray;padding:0 5px;'>+</span> "
                    . $row->daumen_hoch
                    . "<span style='color: black;border:1px solid gray;padding:0 5px;'>-</span> "
                    . $row->daumen_runter;
                } else {
                    echo "<span style='color: black;border:1px solid gray;padding:0 5px;'>+</span> "
                    . $row->daumen_hoch
                    . "<span style='color: red;border:1px solid gray;padding:0 5px;'>-</span> "
                    . $row->daumen_runter;
                }
            }
        }
    } else {
        echo "<span style='color: black;'>+</span>"
        . $row->daumen_hoch
        . "<span style='color: black;'>-</span>"
        . $row->daumen_runter;
    }
} else {
    echo "<img src = 'img/daumen_hoch.png'>"
    . $row->daumen_hoch
    . "<img src='img/daumen_runter.png'>"
    . $row->daumen_runter;
}
?>