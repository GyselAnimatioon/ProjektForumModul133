
<?php
require_once './Business/functions.php';
$max_querry = "SELECT * FROM nachrichten ORDER BY id DESC LIMIT 1";
$maxx_querry = mysql_query($max_querry);
while ($linie = mysql_fetch_object($maxx_querry)) {
    $max = $linie->id;
}

$min_querry = "SELECT * FROM nachrichten ORDER BY id ASC LIMIT 1";
$minn_querry = mysql_query($min_querry);
while ($linie = mysql_fetch_object($minn_querry)) {
    $min = $linie->id;
}

if (!empty($min) && !empty($max)) {
    $random = rand($min, $max);

    $select_abfrage = "SELECT "
            . "* "
            . "FROM "
            . "nachrichten n "
            . "INNER JOIN user_nachricht un ON un.nachrichten_id = n.id "
            . "INNER JOIN user u ON un.user_id = u.id "
            . "WHERE "
            . "n.id = '$random'";

    $select_ausgabe = mysql_query($select_abfrage);

    while ($select_row = mysql_fetch_object($select_ausgabe)) {
        $ago = $select_row->erstellt_am;
        $_SESSION['nachrichten_id'] = "$select_row->nachrichten_id";
        $time_ago = time_ago_analyse($ago);
        ?>

        <div class="body_box" style="background-image: url('img/background/<?php echo rand(1, 6) ?>.jpg');background-size: cover;">
            <h3 class="box_title">
                <?php echo $select_row->titel; ?>
                <?php echo "<a class='made_by' href='../index.php?folder=Presentation&page=profile.php&id=$select_row->id'>By: " . $select_row->username . "</a>"; ?>
                <?php echo "<span class='time'>" . $time_ago . "</span>"; ?>
                <div class="daumen">
                    <?php
                    require "gefaellt_mir.php";
                    ?>
                </div>
            </h3>
            <br>
            <p class="box_text">
                <?php echo $select_row->nachricht; ?>
            </p>
        </div>
        <?php
    }
}
?>
