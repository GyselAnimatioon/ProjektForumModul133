<div class="body_box" style="background-image: url('../img/background/<?php echo rand(1, 6) ?>.jpg');background-size: cover;">
    <h3 class="box_title">
        <?php echo $select_row->titel; ?>
        <?php echo "<a class='made_by' href='../index.php?folder=Presentation&page=profile.php&id=$select_row->id'>By: " . $select_row->username . "</a>"; ?>
        <?php echo "<span class='time'>" . $time_ago . "</span>"; ?>
        <div class="daumen">
            <?php
            require "Business/gefaellt_mir.php";
            ?>
        </div>
    </h3>
    <br>
    <p class="box_text">
        <?php echo $select_row->nachricht; ?>
    </p>
</div>