

        <?php 
           $ago = 500;
                if($ago < 60){
                    $time_ago = $ago ." sek ago";
                } elseif($ago < 3600){
                    $time_ago = ($ago/60) ." min ago";
                } elseif($ago < 86400) {
                    $time_ago = ($ago/3600) ." hours ago";
                } elseif($ago < 31536000) {
                    $time_ago = ($ago/86400) ." hours ago";
            }
     echo gmdate("H:i:s",$ago) . " ago";


        
            
    include_once "Data/DBConnection.php";

            $select_querry = "SELECT "
                    . "* "
                    . "FROM "
                    . "nachrichten n "
                    . "INNER JOIN user_nachricht un ON un.nachrichten_id = n.id "
                    . "INNER JOIN user u ON un.user_id = u.id "
                    . "ORDER BY "
                    . "n.daumen_hoch "
                    . "DESC";

      
            $nachrichten_querry = mysql_query($select_querry);

            while ($row = mysql_fetch_object($nachrichten_querry)) {
                $time = mktime($row->erstellt_h, $row->erstellt_min, $row->erstellt_sek, $row->erstellt_m, $row->erstellt_day, $row->erstellt_y);
                $ago = time() - $time;
                $_SESSION['nachrichten_id'] = "$row->nachrichten_id";
                //In dieser if-abfrage wird abgefragt vor wieviel sekunden dieser Post gepostet worden ist und
                //es wird eine ca. angabe in $time_ago geschrieben.
                //Die While schlaufe ist um bei NetBeans das ganze eifach zu minimieren,
                //dies ersparrt mir viel unnötiges scrollen.
                $ago = 7462946;
                if($ago < 60){
                    $time_ago = $ago ." sek ago";
                } elseif($ago < 3600){
                    $time_ago = ($ago/60) ." min ago";
                } elseif($ago < 86400) {
                    $time_ago = ($ago/3600) ." hours ago";
                } elseif($ago < 31536000) {
                    $time_ago = ($ago/86400) ." hours ago";
            }
     echo $time_ago;
                ?>

                <div class="body_box" style="background-image: url('img/background/<?php echo rand(1, 6) ?>.jpg');background-size: cover;">
                    <h3 class="box_title">
                        <?php echo $row->titel; ?>
                        <?php echo "<a class='made_by' href='profile.php?id=$row->id'>By: " . $row->username . "</a>"; ?>
                        <?php echo "<span class='time'>" . $time_ago . "</span>"; ?>
                        <div class="daumen">


                            <?php
                            require "gefaellt_mir.php";
                            ?>
                        </div>
                    </h3>
                    <br>
                    <p class="box_text">
                        <?php echo $row->nachricht; ?>
                    </p>
                </div>
                <?php
            }
            ?>
        </div>
