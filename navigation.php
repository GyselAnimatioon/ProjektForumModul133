<!--Titel-->
<nav class="pure-menu pure-menu-open pure-menu-horizontal">
    <img class="pure-menu-heading" src="img/blitz.jpg" alt="" style="height: 4em;"/>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Best</a></li>
        <li><a href="#">Random</a></li>
        <li><a href="#">Trends</a></li>
        <li><a href="doku.php">Info</a></li>
        <li><a href="rules.php">Rules</a></li>
        <li><a href="#">Contact</a></li>

        <?php
        
        $eingelogt = true;
        
        
        if(!$eingelogt) {
            ?>
            <li><form action="login.php" method="POST"></li>
            <li><input type="text" name="username" placeholder="Username"></li>
            <li><input type="password" name="password" placeholder="Password"></li>
            <li><a><input type="submit" name="submit" value="Sign in" class="small_button"></a></li>
            <li></form></li>
            <li><a href="register.php">Sign up</a></li>
            <?php
        } else {
            ?>
            <li>Eingeloggt als f.gysel@rafisa.ch</li>
            <?php
        }
        ?>
    </ul>
    <div class="clear"></div>
</nav>
