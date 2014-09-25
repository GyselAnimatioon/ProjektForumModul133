<!DOCTYPE html>

<?php



?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>F0rum</title>
        <!-- Stylesheet für Titel -->
        <link type="text/css" rel="Stylesheet" href="css/head.css">
        <!-- Stylesheet für Body -->
        <link type="text/css" rel="Stylesheet" href="css/body.css">
    </head>
    <body>
        <!--Titel-->
        <div class="title_box" >
            <h1 class="title">Willkommen bei F0rum</h1>

            <div class="login">
                <form action="login.php" method="POST">
                    <input type="text" name="username" placeholder="Username"><br>
                    <input type="password" name="password" placeholder="Password"><br>
                    <input type="submit" name="submit" value="Sign in" class="small_button">
                    <a href="register.php"><input type="button" value="Sign up" class="small_button"></a>
                </form>
            </div>
            <div class="clear"></div>
        </div>
        
        <div class="body">
            <p>Inhalt</p>
        </div>
        
        <footer>
            &copy; Timothe Laborie, Fabian Gysel, Basil Lade 2014
        </footer>
    </body>
</html>