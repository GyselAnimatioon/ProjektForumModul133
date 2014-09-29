<?php
$server = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$db = 'mydb';

$select_querry = "SELECT * FROM nachrichten";

$connect = mysql_connect($server, $dbuser, $dbpassword)
        or die("Verbidung nicht Möglich!");

mysql_select_db($db)
        or die("Datenbank Fehler!");

$nachrichten_querry = mysql_query($select_querry);

while ($row = mysql_fetch_object($nachrichten_querry)) {
    ?>
    <div class="body_box">
        <h3 class="box_title">
            <div class="daumen">
                <?php echo $row->titel; ?>

                <?php require 'gefaellt_mir.php'; ?>



            </div>
            <div class="clear"></div>
        </h3>
        <p class="box_text">
            <?php echo $row->nachricht; ?>
        </p>
    </div>
    <?php
}
?>