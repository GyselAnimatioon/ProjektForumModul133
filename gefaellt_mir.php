<?php
//Nachrichten ID Abfrage
$nachrichten_id = $_SESSION['nachrichten_id'];

//Wieviele Likes Abfrage
$plus_abfrage = "SELECT COUNT(how) AS how FROM gefaellt_mir WHERE nachrichten_id = '$nachrichten_id' AND how = 1";
$plus_ausgabe = mysql_query($plus_abfrage);
while ($plus_row = mysql_fetch_object($plus_ausgabe)) {
    $plus = $plus_row->how;
}

//Wieviele Dislikes Abfrage
$minus_abfrage = "SELECT COUNT(how) AS how FROM gefaellt_mir WHERE nachrichten_id = '$nachrichten_id' AND how = 0";
$minus_ausgabe = mysql_query($minus_abfrage);
while ($minus_row = mysql_fetch_object($minus_ausgabe)) {
    $minus = $minus_row->how;
}

if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
    //Eingeloggt
    //User ID Abfragen
    $user_name = $_SESSION['username'];
    $user_id_abfrage = "SELECT * FROM user WHERE username = '$user_name'";
    $user_id_ausgabe = mysql_query($user_id_abfrage);
    while ($user_id_row = mysql_fetch_object($user_id_ausgabe)) {
        $user_id = $user_id_row->id;
        $_SESSION['id'] = $user_id;
    }

    //Wie bewertet Abfrage
    $wie_bewertet_abfrage = "SELECT * FROM gefaellt_mir WHERE user_id = '$user_id' AND nachrichten_id = '$nachrichten_id' ";
    $wie_bewertet_ausgabe = mysql_query($wie_bewertet_abfrage);
    while ($wie_bewertet_row = mysql_fetch_object($wie_bewertet_ausgabe)) {
        $wie_bewertet = $wie_bewertet_row->how;
        $schonmal_bewertet = 1;
    }

    //Schonmal bewertet Abfrage
    if (!isset($wie_bewertet)) {
        $schonmal_bewertet = 0;
    }

    //Bewertung
    if ($schonmal_bewertet == 1) {
        if ($wie_bewertet == 1) {
            ?>

            <span class="like_button_up_set">+</span> 
            <?php echo $plus; ?>
            <a href="Data/gefaellt_mir_auswertung.php?how=0&new=0&id=<?php echo $nachrichten_id; ?>" class="like_button_down">-</a> 
            <?php echo $minus; ?>

            <?php
        } else if ($wie_bewertet == 0) {
            ?>

            <a href="Data/gefaellt_mir_auswertung.php?how=1&new=0&id=<?php echo $nachrichten_id; ?>" class="like_button_up">+</a> 
            <?php echo $plus; ?>
            <span class="like_button_down_set">-</span> 
            <?php echo $minus; ?>

            <?php
        }
    } else if ($schonmal_bewertet == 0) {
        ?>

        <a href="Data/gefaellt_mir_auswertung.php?how=1&new=1&id=<?php echo $nachrichten_id; ?>" class="like_button_up">+</a> 
        <?php echo $plus; ?>
        <a href="Data/gefaellt_mir_auswertung.php?how=0&new=1&id=<?php echo $nachrichten_id; ?>" class="like_button_down">+</a> 
        <?php echo $minus; ?>

        <?php
    }
} else {
    ?>

    <span class="like_button_up">+</span> 
    <?php echo $plus; ?>
    <span class="like_button_down">-</span> 
    <?php echo $minus; ?>

    <?php
}
?>