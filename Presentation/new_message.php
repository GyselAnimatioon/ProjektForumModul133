

 <div class="standard_form">
        <div class="content-wrap">


            <form class="pure-form pure-g" method="POST" action="../index.php?page=new_message_auswertung.php">

                <div class="pure-u-1">
                    <input class="pure-input-1" type="text" name="title" placeholder="Titel">
                </div>
                <div class="pure-u-1">

                </div>
                <div class="pure-u-1">
                    <textarea class="pure-input-1" name="text" placeholder="Nachricht"></textarea> 
                </div>
                <div class="pure-u-1">
                    <input type="hidden" name="date_sek" value="<?php echo date("s"); ?>">
                    <input type="hidden" name="date_min" value="<?php echo date("i"); ?>">
                    <input type="hidden" name="date_h" value="<?php echo date("G"); ?>">
                    <input type="hidden" name="date_day" value="<?php echo date("j"); ?>">
                    <input type="hidden" name="date_m" value="<?php echo date("n"); ?>">
                    <input type="hidden" name="date_y" value="<?php echo date("Y"); ?>">
                </div>
                
                <div class="pure-u-1">
                    <input class="pure-button pure-button-error pure-input-1-4" type="reset" value="Reset!">
                    <input class="pure-button pure-button-primary pure-input-1-4" type="submit" value="Senden!">
                </div>

            </form>

        </div>
 </div>