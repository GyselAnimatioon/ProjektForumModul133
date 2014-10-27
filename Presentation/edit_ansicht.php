<?php

require_once 'Business/functions.php';
require_once 'Data/select_query_functions.php';

$nachricht_id = filter_input(INPUT_GET, "id");
$_SESSION['nachrichten_id'] = $nachricht_id;
$editable = edit_query($nachricht_id);
if(!is_int($editable)) {
    ?>
<form class="pure-form pure-g" method="POST" action="../index.php?folder=Data&page=new_message_auswertung.php&new=1">
    <div class="pure-u-1">
        <input class="pure-input-1" type="text" name="title" value="<?php echo $editable->titel; ?>" placeholder="Titel">
    </div>
    <div class="pure-u-1">
    </div>
    <div class="pure-u-1">
        <input class="pure-input-1" type="text" name="text" value="<?php echo $editable->nachricht; ?>" placeholder="Nachricht">
    </div>
    <div class="pure-u-1">
        <input class="pure-button pure-button-error pure-input-1-4" type="reset" value="Reset!">
        <input class="pure-button pure-button-primary pure-input-1-4" type="submit" value="Senden!">
    </div>
</form>

<?php
} else {
    $url = "Location: ../index.php?folder=Business&page=nachrichten_ausgeben.php&exec=nachricht";
    header($url);
}

?>

