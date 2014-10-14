<?php session_start(); ?>

<!--Titel-->
<nav class="pure-menu pure-menu-open pure-menu-horizontal">
    <img class="pure-menu-heading" src="img/blitz.jpg" alt="" style="height: 4em;"/>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="best.php">Best</a></li>
        <li><a href="random.php">Random</a></li>
        <li><a href="trends.php">Trends</a></li>
        <li><a href="doku.php">Info</a></li>
        <li><a href="rules.php">Rules</a></li>

        <?php
        if (isset($_SESSION["login"])) {
            $eingelogt = $_SESSION["login"];
        } else {
            $eingelogt = 0;
        }


        //nie versucht einzuloggen
        if ($eingelogt == 0) {
            ?>
            <li>
                <form class="pure-form" action="Data/login.php" method="POST">
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
            <?php
            //eigeloggt
        } else if ($eingelogt == 1) {
            ?>
            <li><a href="new_message.php">New Message</a></li>
            <li><a href="profil.php">Eingeloggt als <?php
                    if (isset($_SESSION["username"])) {
                        echo $_SESSION["username"];
                    }
                    ?></a></li>
            <li><a href="Data/logout.php">Log out</a></li>
            <?php
            //fehlerhaftes einliogegen
        } else if ($eingelogt == 2) {
            ?>
            <li>
                <form class="pure-form" action="Data/login.php" method="POST">
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
            <?php
        }
        ?>
    </ul>

</nav>
