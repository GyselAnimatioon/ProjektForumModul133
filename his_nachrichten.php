<?php
require_once './Data/DBConnection.php';

$username_session = $linie->username;

$username_querry = "SELECT * FROM user WHERE username = '$username_session'";
$usernamee_querry = mysql_query($username_querry);
while ($linie2 = mysql_fetch_object($usernamee_querry)) {
    $id = $linie2->id;
}

$select_querry = "SELECT "
        . "* "
        . "FROM "
        . "nachrichten n "
        . "INNER JOIN user_nachricht un ON un.nachrichten_id = n.id "
        . "INNER JOIN user u ON un.user_id = u.id "
        . "WHERE "
        . "un.user_id = '$id'";

$nachrichten_querry = mysql_query($select_querry);

while ($linie = mysql_fetch_object($nachrichten_querry)) {
    $time = mktime($linie->erstellt_h, $linie->erstellt_min, $linie->erstellt_sek, $linie->erstellt_m, $linie->erstellt_day, $linie->erstellt_y);
    $ago = time() - $time;
    $_SESSION['nachrichten_id'] = "$linie->nachrichten_id";
    //In dieser if-abfrage wird abgefragt vor wieviel sekunden dieser Post gepostet worden ist und
    //es wird eine ca. angabe in $time_ago geschrieben.
    //Die While schlaufe ist um bei NetBeans das ganze eifach zu minimieren,
    //dies ersparrt mir viel unnötiges scrollen.
    $i = 1;
    while ($i == 1) {

        if ($ago < 60) {
            $time_ago = $ago . " sek ago";
        } elseif ($ago < 120) {
            $time_ago = "1 min ago";
        } elseif ($ago < 180) {
            $time_ago = "2 min ago";
        } elseif ($ago < 240) {
            $time_ago = "3 min ago";
        } elseif ($ago < 300) {
            $time_ago = "4 min ago";
        } elseif ($ago < 600) {
            $time_ago = "5 min ago";
        } elseif ($ago < 1200) {
            $time_ago = "10 min ago";
        } elseif ($ago < 1800) {
            $time_ago = "20 min ago";
        } elseif ($ago < 2400) {
            $time_ago = "30 min ago";
        } elseif ($ago < 3000) {
            $time_ago = "40 min ago";
        } elseif ($ago < 3600) {
            $time_ago = "50 min ago";
        } elseif ($ago < 7200) {
            $time_ago = "1 Hour ago";
        } elseif ($ago < 10800) {
            $time_ago = "2 Hour ago";
        } elseif ($ago < 14400) {
            $time_ago = "3 Hour ago";
        } elseif ($ago < 18000) {
            $time_ago = "4 Hour ago";
        } elseif ($ago < 21600) {
            $time_ago = "5 Hour ago";
        } elseif ($ago < 25200) {
            $time_ago = "6 Hour ago";
        } elseif ($ago < 28800) {
            $time_ago = "7 Hour ago";
        } elseif ($ago < 32400) {
            $time_ago = "8 Hour ago";
        } elseif ($ago < 36000) {
            $time_ago = "9 Hour ago";
        } elseif ($ago < 39600) {
            $time_ago = "10 Hour ago";
        } elseif ($ago < 43200) {
            $time_ago = "1/2 Day ago";
        } elseif ($ago < 86400) {
            $time_ago = "1 Day ago";
        } elseif ($ago < 172800) {
            $time_ago = "2 Day ago";
        } elseif ($ago < 259200) {
            $time_ago = "3 Day ago";
        } elseif ($ago < 345600) {
            $time_ago = "4 Day ago";
        } elseif ($ago < 432000) {
            $time_ago = "5 Day ago";
        } elseif ($ago < 518400) {
            $time_ago = "6 Day ago";
        } elseif ($ago < 604800) {
            $time_ago = "1 Week ago";
        } elseif ($ago < 1209600) {
            $time_ago = "2 Week ago";
        } elseif ($ago < 1814400) {
            $time_ago = "3 Week ago";
        } elseif ($ago < 2629800) {
            $time_ago = "4 Week ago";
        } elseif ($ago < 5259600) {
            $time_ago = "1 Month ago";
        } elseif ($ago < 7889400) {
            $time_ago = "2 Month ago";
        } elseif ($ago < 10519200) {
            $time_ago = "3 Month ago";
        } elseif ($ago < 13149000) {
            $time_ago = "4 Month ago";
        } elseif ($ago < 15778800) {
            $time_ago = "5 Month ago";
        } elseif ($ago < 18408600) {
            $time_ago = "6 Month ago";
        } elseif ($ago < 21038400) {
            $time_ago = "7 Month ago";
        } elseif ($ago < 23668200) {
            $time_ago = "8 Month ago";
        } elseif ($ago < 26298000) {
            $time_ago = "9 Month ago";
        } elseif ($ago < 28927800) {
            $time_ago = "10 Month ago";
        } elseif ($ago < 31557600) {
            $time_ago = "11 Month ago";
        } elseif ($ago < 63115200) {
            $time_ago = "1 Year ago";
        } elseif ($ago < 94672800) {
            $time_ago = "2 Year ago";
        } elseif ($ago < 126230400) {
            $time_ago = "3 Year ago";
        } elseif ($ago < 157788000) {
            $time_ago = "4 Year ago";
        } elseif ($ago < 189345600) {
            $time_ago = "5 Year ago";
        } elseif ($ago < 220903200) {
            $time_ago = "6 Year ago";
        } elseif ($ago < 252460800) {
            $time_ago = "7 Year ago";
        } elseif ($ago < 284018400) {
            $time_ago = "8 Year ago";
        } elseif ($ago < 315576000) {
            $time_ago = "9 Year ago";
        } elseif ($ago < 631152000) {
            $time_ago = "10 Year ago";
        } elseif ($ago < 946728000) {
            $time_ago = "20 Year ago";
        } elseif ($ago < 1262304000) {
            $time_ago = "30 Year ago";
        } elseif ($ago < 1577880000) {
            $time_ago = "40 Year ago";
        } elseif ($ago < 1893456000) {
            $time_ago = "50 Year ago";
        } else {
            $time_ago = "50+ Year ago";
        }
        $i = 0;
    }
    ?>

    <div class="body_box" style="background-image: url('img/background/<?php echo rand(1, 6) ?>.jpg');background-size: cover;">
        <h3 class="box_title">
            <?php echo $linie->titel; ?>
            <?php echo "<a class='made_by' href='profile.php?id=$linie->id'>By: " . $linie->username . "</a>"; ?>
            <?php echo "<span class='time'>" . $time_ago . "</span>"; ?>
            <div class="daumen">


                <?php
                require "gefaellt_mir.php";
                ?>
            </div>
        </h3>
        <br>
        <p class="box_text">
            <?php echo $linie->nachricht; ?>
        </p>
    </div>
    <?php
}
?>