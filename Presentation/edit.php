<?php
require_once 'Business/functions.php';
require_once 'Data/select_query_functions.php';
$nachrichten_id = get_nachrichten_id();

?>

<a href="../index.php?folder=Presentation&page=edit_ansicht.php&id=<?php echo $nachrichten_id; ?>" class="edit">&#9998;</a>
