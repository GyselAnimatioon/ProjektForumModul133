<?php

if (isset($_SESSION['login'])) {
    if ($_SESSION['login'] == 1) {


        $username_session = $_SESSION['username'];

   include_once "Data/DBConnection.php";
        $control = 0;
        if (isset($_SESSION['nachrichten_id'])) {
            $nachrichten_id = $_SESSION['nachrichten_id'];
        }
 

        $username_querry = "SELECT * FROM user WHERE username = '$username_session'";
        $usernamee_querry = mysql_query($username_querry);
        while ($row2 = mysql_fetch_object($usernamee_querry)) {
            $id = $row2->id;
        }

        $select_querry = "SELECT "
                . "* "
                . "FROM "
                . "gefaellt_mir g "
                . "INNER JOIN nachrichten n ON g.nachrichten_id = n.id "
                . "WHERE "
                . "g.user_id = '$id'";



        $selectt_querry = mysql_query($select_querry);
        while ($row2 = mysql_fetch_object($selectt_querry)) {
            if ($row->id == $row2->nachrichten_id) {
                $nachrichten_id = $row2->nachrichten_id;
            }

            //Bewertet
            if ($row->nachrichten_id && $row2->nachrichten_id == $row->nachrichten_id) {
                if ($row2->how == 1 && $control != 2) {
                    $control = 1;

                    echo "<span class='like_button_up_set'>+</span> "
                    . $row->daumen_hoch
                    . "<a href='../index.php?page=gefaellt_mir_auswertung.php?how=0&new=0&id=$nachrichten_id' class='like_button_down'>-</a> "
                    . $row->daumen_runter;
                } elseif ($row2->how == 0 && $control != 1) {
                    $control = 2;

                    echo "<a href='../index.php?page=gefaellt_mir_auswertung.php?how=1&new=0&id=$nachrichten_id' class='like_button_up'>+</a> "
                    . $row->daumen_hoch
                    . "<span class='like_button_down_set'>-</span> "
                    . $row->daumen_runter;
                }
            }
        }
        if ($control == 0) {
            echo "<a href='../index.php?page=gefaellt_mir_auswertung.php?how=1&new=1&id=$nachrichten_id' class='like_button'>+</a> "
            . $row->daumen_hoch
            . "<a href='../index.php?page=gefaellt_mir_auswertung.php?how=0&new=1&id=$nachrichten_id' class='like_button'>-</a> "
            . $row->daumen_runter;
            $control = 1;
        }
    } else {
        echo "<span class='like_button'>+</span>"
        . $row->daumen_hoch
        . "<span class='like_button'>-</span>"
        . $row->daumen_runter;
    }
} else {
    echo "<span class='like_button'>+</span>"
    . $row->daumen_hoch
    . "<span class='like_button'>-</span>"
    . $row->daumen_runter;
}
?>