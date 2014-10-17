<?php
require_once 'Business/functions.php';
require_once 'Data/select_query_functions.php';
$nachrichten_id = get_nachrichten_id();
$plus = get_nachrichten_like($nachrichten_id);
$minus = get_nachrichten_dislike($nachrichten_id);
?>

<a href = "../index.php?folder=Data&page=gefaellt_mir_auswertung.php&how=1&id=<?php echo $nachrichten_id; ?>" class = "like_button_up">+</a>
<?php echo $plus; ?>
<a href="../index.php?folder=Data&page=gefaellt_mir_auswertung.php&how=0&id=<?php echo $nachrichten_id; ?>" class="like_button_down">-</a> 
<?php echo $minus; ?>
