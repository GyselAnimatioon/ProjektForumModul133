<?php
require_once './Data/DBConnection.php';
require_once './Business/password.php';
$username_session = $_SESSION['username'];

$username_querry = "SELECT * FROM user WHERE username = '$username_session'";
$usernamee_querry = mysql_query($username_querry);
while ($linie = mysql_fetch_object($usernamee_querry)) {
    $id = $linie->id;
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
    $time_ago = time_ago_analyse($ago);
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