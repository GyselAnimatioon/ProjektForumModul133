<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="/css/RegistrationStyle/registration.css">
        <!-- Bibliothek für formular -->
        <link rel="stylesheet" href="/css/pure.css">
        <link href='http://fonts.googleapis.com/css?family=Nixie+One|PT+Mono|Monoton|Varela+Round' rel='stylesheet' type='text/css'>
    </head>
    <body>

        <?php require_once('navigation1.php'); ?>

        <div class="content-wrap">
            <div class="content-outer">
                <h1 class="headline-big">Registration</h1>
            </div>

            <div class="content-inner">
                <!-- Formular mit PURE Bibliothek gestaltet -->
                <form class="pure-form pure-g" method="POST" action="Data/register_auswertung.php">
                    <div class="pure-u-1">
                        <input class="pure-input-1" type="text" name="username" placeholder="Username">
                    </div>
                    <div class="pure-u-1-2">
                        <input class="pure-input-1" type="text" name="vorname" placeholder="Vorname">
                    </div>
                    <div class="pure-u-1-2">
                        <input class="pure-input-1" type="text" name="nachname" placeholder="Nachname">
                    </div>
                    <div class="pure-u-1">
                        <input class="pure-input-1" type="email" name="mail" placeholder="EMail">
                    </div>
                    <div class="pure-u-1-2">
                        <input class="pure-input-1" type="password" name="password" placeholder="Passwort">
                    </div>
                    <div class="pure-u-1-2">
                        <input class="pure-input-1" type="password" name="password2" placeholder="Passwort Bestätigen">
                    </div>

                    <div class="pure-u-1">
                        <input class="pure-button pure-input-2-4 pure-button-primary" type="submit" value="Registrieren!">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
