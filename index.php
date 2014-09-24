<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Forum</title>
        <!-- Stylesheet für Titel -->
        <link type="text/css" rel="Stylesheet" href="css/head.css">
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
    </body>
</html>