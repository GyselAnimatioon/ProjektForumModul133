<nav class="pure-menu pure-menu-open pure-menu-horizontal desktop">
    <img class="pure-menu-heading" src="img/blitz_von_timothe.png" alt="" style="height: 4em;"/>
    <ul>
        <li><a href="../index.php?folder=Business&page=nachrichten_ausgeben.php&exec=nachricht">Home</a></li>
        <li><a href="../index.php?folder=Business&page=nachrichten_ausgeben.php&exec=best">Best</a></li>
        <li><a href="../index.php?folder=Business&page=nachrichten_ausgeben.php&exec=random">Random</a></li>
        <li><a href="../index.php?folder=Business&page=nachrichten_ausgeben.php&exec=trends">Trends</a></li>
        <li><a href="../index.php?folder=Presentation&page=filter_site.php">Filter</a></li>
        <li><a href="../index.php?folder=Presentation&page=doku.php">Info</a></li>
        <!--<li><a href="../index.php?folder=Presentation&page=rules.php">Rules</a></li>-->

        <?php
        if (isset($_SESSION["login"])) {
            $eingelogt = $_SESSION["login"];
        } else {
            $eingelogt = 0;
        }
        if ($eingelogt == 0 || $eingelogt == 2) {
            ?>
            <li>
                <form class="pure-form" action="../index.php?folder=Data&page=login.php" method="POST">
                    <fieldset>
                        <input class="login-text" type="text" name="username" placeholder="Username">
                        <input class="login-text" type="password" name="password" placeholder="Password">
                        <input type="submit" name="submit" value="Log in" class="pure-button  pure-button-primary">
                    </fieldset>
                </form>
            </li>
            <li>
                <form class="pure-form" action="../index.php?folder=Presentation&page=register.php" method="POST">
                    <fieldset>
                        <input type="submit" name="submit" value="Register" class="pure-button pure-button-success">
                    </fieldset>
                </form>
            </li>
            <?php
        } else if ($eingelogt == 1) {
            ?>
            <li><a href="../index.php?folder=Presentation&page=new_message.php">New Message</a></li>
            <li><a href="../index.php?folder=Presentation&page=profil.php">Eingeloggt als <?php
                    if (isset($_SESSION["username"])) {
                        echo $_SESSION["username"];
                    }
                    ?></a></li>
            <li><a href="../index.php?folder=Data&page=logout.php">Log out</a></li>
            <?php
        }
        ?>
    </ul>
</nav>
<div class="mobile">
    <div class="logo-verdecker">F0rum</div>
    <button id="showLeft"><div class="mobile-nav-icon" style="height: 24px; width: 24px; touch-action: pan-y; -webkit-user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div></button>

    <nav class="cbp-spmenu fixed cbp-spmenu-vertical cbp-spmenu-left" id="nano-content">
        <a href="../index.php?folder=Business&page=nachrichten_ausgeben.php&exec=nachricht">Home</a></li>
         <a href="../index.php?folder=Business&page=nachrichten_ausgeben.php&exec=best">Best</a></li>
         <a href="../index.php?folder=Business&page=nachrichten_ausgeben.php&exec=random">Random</a></li>
         <a href="../index.php?folder=Business&page=nachrichten_ausgeben.php&exec=trends">Trends</a></li>
         <a href="../index.php?folder=Presentation&page=filter_site.php">Filter</a></li>
         <a href="../index.php?folder=Presentation&page=doku.php">Info</a></li>
        <!-- <a href="../index.php?folder=Presentation&page=rules.php">Rules</a></li>-->

        <?php
        if (isset($_SESSION["login"])) {
            $eingelogt = $_SESSION["login"];
        } else {
            $eingelogt = 0;
        }
        if ($eingelogt == 0 || $eingelogt == 2) {
            ?>
             
                <form class="pure-form" action="../index.php?folder=Data&page=login.php" method="POST">
                    <fieldset>
                        <input class="login-text" type="text" name="username" placeholder="Username">
                        <input class="login-text" type="password" name="password" placeholder="Password">
                        <input type="submit" name="submit" value="Log in" class="pure-button  pure-button-primary">
                    </fieldset>
                </form>
            </li>
             
                <form class="pure-form" action="../index.php?folder=Presentation&page=register.php" method="POST">
                    <fieldset>
                        <input type="submit" name="submit" value="Register" class="pure-button pure-button-success">
                    </fieldset>
                </form>
            </li>
            <?php
        } else if ($eingelogt == 1) {
            ?>
             <a href="../index.php?folder=Presentation&page=new_message.php">New Message</a></li>
             <a href="../index.php?folder=Presentation&page=profil.php">Eingeloggt als <?php
                    if (isset($_SESSION["username"])) {
                        echo $_SESSION["username"];
                    }
                    ?></a></li>
             <a href="../index.php?folder=Data&page=logout.php">Log out</a></li>
            <?php
        }
        ?>
    </nav>
</div>