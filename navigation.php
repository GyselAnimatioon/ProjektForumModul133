<!--Titel-->
<nav class="pure-menu pure-menu-open pure-menu-horizontal">
    <img class="pure-menu-heading" src="img/blitz.jpg" alt="" style="height: 4em;"/>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="best.php">Best</a></li>
        <li><a href="random.php">Random</a></li>
        <li><a href="#">Trends</a></li>
        <li><a href="doku.php">Info</a></li>
        <li><a href="rules.php">Rules</a></li>
    </ul>

    <?php
    session_start();

    if (isset($_SESSION["login"])) {
        $eingelogt = $_SESSION["login"];
    } else {
        $eingelogt = 0;
    }

    if ($eingelogt == 0) {
        ?>
        <ul>
            <li>
                <form class="pure-form" action="login.php" method="POST">
                    <fieldset>
                        <input type="text" name="username" placeholder="Username">
                        <input type="password" name="password" placeholder="Password">
                        <input type="submit" name="submit" value="Log in" class="pure-button  pure-button-primary">
                    </fieldset>
                </form>
            </li>
            <li>
                <form class="pure-form" action="register.php" method="POST">
                    <fieldset>
                        <input type="submit" name="submit" value="Register" class="pure-button pure-button-success">
                    </fieldset>
                </form>
            </li>
        </ul>
        <!--
            <li><form action="login.php" method="POST"></li>
            <li><input type="text" name="username" placeholder="Username"></li>
            <li><input type="password" name="password" placeholder="Password"></li>
            <li><a><input type="submit" name="submit" value="Log in" class="small_button"></a></li>
            <li></form></li>
            <li><a href="register.php">Register</a></li>
        -->
        <?php
    } else if ($eingelogt == 1) {
        ?>
        <ul>
            <li><a href="new_message.php">New Message</a></li>
            <li><a href="profil.php">Eingeloggt als <?php
                    if (isset($_SESSION["username"])) {
                        echo $_SESSION["username"];
                    }
                    ?></a></li>
            <li><a href="logout.php">Log out</a></li>
        </ul>
        <?php
    } else if ($eingelogt == 2) {
        ?>
        <ul>
            <li>
                <form class="pure-form" action="register.php" method="POST">
                    <fieldset>
                        <input type="text" name="username" placeholder="Username">
                        <input type="password" name="password" placeholder="Password">
                        <input type="submit" name="submit" value="Log in" class="pure-button  pure-button-primary">
                    </fieldset>
                </form>
            </li>
            <li><?php
                if (isset($_SESSION["message"])) {
                    echo $_SESSION["message"];
                }
                ?></li>
            
                <form class="pure-form" action="register.php" method="POST">
                    <fieldset>
                        <input type="submit" name="submit" value="Register" class="pure-button pure-button-success">
                    </fieldset>
                </form>
            <?php
        }
        ?>
    </ul>

</nav>
