<?php
$server = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$db = 'mydb';

$select_querry = "SELECT * FROM nachrichten ORDER BY erstellt_am DESC";

$connect = mysql_connect($server, $dbuser, $dbpassword)
        or die("Verbidung nicht Möglich!");

mysql_select_db($db)
        or die("Datenbank Fehler!");

$nachrichten_querry = mysql_query($select_querry);

while ($row = mysql_fetch_object($nachrichten_querry)) {
    ?>
    <div class="body_box" style="background-image: url('img/background/<?php echo rand(1,6) ?>.jpg');background-size: cover;">
        <h3 class="box_title">
            <div class="daumen">
                <?php echo $row->erstellt_am; ?>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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