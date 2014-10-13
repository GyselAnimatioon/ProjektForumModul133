<?php

if (isset($_SESSION['login'])) {
    if ($_SESSION['login'] == 1) {


        $username_session = $_SESSION['username'];

        $server = 'localhost';
        $dbuser = 'root';
        $dbpassword = '';
        $db = 'mydb';
        $control = 0;
        if (isset($_SESSION['nachrichten_id'])) {
            $nachrichten_id = $_SESSION['nachrichten_id'];
        }
        $connect = mysql_connect($server, $dbuser, $dbpassword)
                or die("Verbidung nicht Möglich!");
        mysql_select_db($db)
                or die("Datenbank Fehler!");

        $username_querry = "SELECT * FROM user WHERE username = '$username_session'";
        $usernamee_querry = mysql_query($username_querry);
        while ($linie2 = mysql_fetch_object($usernamee_querry)) {
            $id = $linie2->id;
        }

        $select_querry = "SELECT "
                . "* "
                . "FROM "
                . "gefaellt_mir g "
                . "INNER JOIN nachrichten n ON g.nachrichten_id = n.id "
                . "WHERE "
                . "g.user_id = '$id'";



        $selectt_querry = mysql_query($select_querry);
        while ($linie2 = mysql_fetch_object($selectt_querry)) {
            if ($linie->id == $linie2->nachrichten_id) {
                $nachrichten_id = $linie2->nachrichten_id;
            }

            //Bewertet
            if ($linie->nachrichten_id && $linie2->nachrichten_id == $linie->nachrichten_id) {
                if ($linie2->how == 1 && $control != 2) {
                    $control = 1;

                    echo "<span class='like_button_up_set'>+</span> "
                    . $linie->daumen_hoch
                    . "<a href='gefaellt_mir_auswertung.php?how=0&new=0&id=$nachrichten_id' class='like_button_down'>-</a> "
                    . $linie->daumen_runter;
                } elseif ($linie2->how == 0 && $control != 1) {
                    $control = 2;

                    echo "<a href='gefaellt_mir_auswertung.php?how=1&new=0&id=$nachrichten_id' class='like_button_up'>+</a> "
                    . $linie->daumen_hoch
                    . "<span class='like_button_down_set'>-</span> "
                    . $linie->daumen_runter;
                }
            }
        }
        if ($control == 0) {
            echo "<a href='gefaellt_mir_auswertung.php?how=1&new=1&id=$nachrichten_id' class='like_button'>+</a> "
            . $linie->daumen_hoch
            . "<a href='gefaellt_mir_auswertung.php?how=0&new=1&id=$nachrichten_id' class='like_button'>-</a> "
            . $linie->daumen_runter;
            $control = 1;
        }
    } else {
        echo "<span class='like_button'>+</span>"
        . $linie->daumen_hoch
        . "<span class='like_button'>-</span>"
        . $linie->daumen_runter;
    }
} else {
    echo "<span class='like_button'>+</span>"
    . $linie->daumen_hoch
    . "<span class='like_button'>-</span>"
    . $linie->daumen_runter;
}
?>