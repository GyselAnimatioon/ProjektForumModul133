
<div class="body_box" style="background-image: url('../img/background/<?php echo rand(1, 6) ?>.jpg');background-size: cover; word-break:break-all; color:white;">
    <h3 class="box_title">
        <?php echo $select_row->titel; ?>
        <?php echo "<a class='made_by' href='../index.php?folder=Presentation&page=profile.php&id=$select_row->user_id'>By: " . $select_row->username . "</a>"; ?>
        <?php echo "<span class='time'>" . $time_ago . "</span>"; ?>
        <div class="daumen">
            <?php
            require 'Presentation/edit.php';
            
            require "Presentation/gefaellt_mir.php";
            ?>
        </div>
    </h3>
    <br>
    <p >
        <?php echo $select_row->nachricht; ?>
    </p>
</div>