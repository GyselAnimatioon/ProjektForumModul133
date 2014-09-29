<!DOCTYPE html>
<html>
    <head>
        <title>Doku analyse</title>
        <meta charset="UTF-8">
        <!-- Stylesheet für Titel -->
        <link type="text/css" rel="Stylesheet" href="css/pure.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="/css/DokuStyle/doku.css">
        <link href='http://fonts.googleapis.com/css?family=Nixie+One|PT+Mono|Monoton|Varela+Round' rel='stylesheet' type='text/css'>
    </head>
    <body>

        <?php require_once('navigation.php'); ?>

        <!-- verbindet content-outer mit content-inner -->
        <div class="content-wrap">
            <!-- content-outer enthält Titel des Dokuments -->
            <div class="content-outer">
                <h1 class="title"> Forum-Projekt Analyse </h1>
            </div>

            <!-- content-inner enthält Inhalt der Analyse -->
            <div class="content-inner">

                <!-- Jedes "Kapitel" wird in ein Block gepackt(content-block) -->
                <div class="content-block">
                    <h3 class="headline-big"> Inhaltsverzeichnis: </h3>
                    <ul class="list-items">
                        <li class="list-item"><a class="index" href="#team">Team</a></li>
                        <li class="list-item"><a class="index" href="#beschreibung">Projekt Beschreibung</a></li>
                        <li class="list-item"><a class="index" href="#technologien">Einzusetzende Technologien</a></li>
                        <li class="list-item"><a class="index" href="#einz-aufgaben">Aufgaben</a></li>
                        <li class="list-item"><a class="index" href="#zustaendig">Zuständig</a></li>
                        <li class="list-item"><a class="index" href="#proj-ablauf">Projekt-Ablauf</a></li>
                        <li class="list-item"><a class="index" href="#erm">ERM</a></li>
                    </ul>
                </div>

                <div id="team" class="content-block">
                    <!-- Titel des Blocks -->
                    <h3 class="headline-big"> Team: </h3>
                    <!-- Inhalt des Blocks -->
                    <ul class="list-items">
                        <li class="list-item"> Basil Lade </li>
                        <li class="list-item"> Timothé Laborie </li>
                        <li class="list-item"> Fabian Gysel </li>
                    </ul>
                </div>

                <div id="beschreibung" class="content-block">
                    <h3 class="headline-big"> Projekt Beschreibung: </h3>
                    <p> Es wird in einer Partnerarbeit eine 3- Tier WEB Applikation definiert und selbständig entwickelt. </p>
                    <p>Die Applikation wird in 3 Ebene unterteilt.</p>
                    <p>Die Daten-Ebene verwaltet die Datenbank, diese werden wir dannach in PHP benutzen.</p>
                    <p>In der Business-Ebene ist der Code wie z.B. PHP enthalten, mit dieser man dannach Daten aus der Daten-Ebene benutzen kann.</p>
                    <p>Der Presentationen-Layer enthält alles, was der Endnutzer auf dem Bildschirm sieht, wie z.B. Texte auf der Website und Formation der Texte. HTML und CSS werden dort z.B. verwaltet.</p> 
                    <br>
                    <p>
                        Wir wollen ein Webapplikation erstellen, in der es Möglich ist, sich in einer Datenbank Anzumelden oder zu Registrieren. Man soll ein eigenes
                        Profil bekommen und dies dann auch bearbeiten können. Über die Startseite kann man Nachrichten erstellen, diese mit einem Titel versehem und dies 
                        dannach "Posten". Jeder eingeloggte User kann seine Meinung zu einer Nachricht über ein Voting-System ("Gefällt mir", "Gefällt mir nicht") abgeben.
                        Auf der Startseite werden die jeweiligen Nachrichten, mit den meisten "Hochvotings" der Reihe nache aufgeführt.
                        Der User soll auch seine eigenen Nachrichten verwalten können und diese auf einer seperaten Seite einsehen und auch Löschen.
                        Der User kann sich schlussentlich auch wieder Ausloggen.
                    </p>
                </div>

                <div id="technologien" class="content-block">
                    <h3 class="headline-big"> Einzusetzende Technologien: </h3>
                    <ul class="list-items">
                        <li class="list-item logo-item">
                            <img class="logo-mysql" src="img/doku/mysql-logo.png" alt="mysql logo"/>
                            MySQL ist ein Weltweit stark verbreitetes Relationales Datenbanksystem, wir haben  MySQL gewählt weil sie eine der bekanntesten ist und es eine Open-Source Lizensierung gibt.
                        </li>
                        <li class="list-item logo-item">
                            <img class="logo-php" src="img/doku/phplogo-highres.png" alt="php-logo"/>
                            PHP ist eine Serverseitige Programmiersprache und wird für die Funktionalität der Website benötigt, z.B. Erstellen eines Login oder eines Accounts. PHP wurde gewählt, weil es als Schulstandard empfohlen wurde und wir schon etwas Erfahrung haben...
                        </li>

                        <li class="list-item logo-item">
                            <img class="logo-html" src="img/doku/HTML5_Logo_512.png" alt=""/>
                            HTML ist für die Website, es ist eine Auszeichungs Sprache, mit der eine Website struktoriert wird.
                        </li>
                        <li class="list-item logo-item">
                            <img class="logo-css3" src="img/doku/css3-logo.png" alt=""/>
                            CSS wird genutzt um den Style eines HTML-Dokument festzulegen. Wir benutzen CSS als eine der einzigsten Stylesprachen die mit HTML compatibel sind.
                        </li>
                        <li class="list-item logo-item">
                            <img class="logo-js" src="img/doku/js6-logo.png" alt=""/>
                            JS steht für JavaScript. Es ist eine Skriptsprache, mit der man Dynamische Websiten erstellen kann.
                        </li>
                    </ul>
                </div>
                <br>
                <br>
                <br>
                <div id="einz-aufgaben" class="content-block">
                    <h3 class="headline-big"> Aufgaben: </h3>
                    <ul class="list-items">
                        <li class="list-item">
                            Hauptseite (PHP)
                            <ul>
                                <li>Auf der Hauptseite kann man alle Einträge des nutzers sehen.</li>
                            </ul>
                        </li>
                        <li class="list-item">
                            Datenbank (MySQL)
                            <ul>
                                <li>In der Datenbank sind die Nutzer und deren Einträge gespeichert.</li>
                            </ul>
                        </li>
                        <li class="list-item">
                            Registrierung (PHP / MySQL)
                            <ul>
                                <li>Der Nutzer kann sich registrieren.</li>
                            </ul>
                        </li>
                        <li class="list-item">
                            Login (PHP / MySQL)
                            <ul>
                                <li>Der Nutzer kann sich anmelden, vorausgesetzt er hat sich schon Registriert.</li>
                            </ul>
                        </li>
                        <li class="list-item">
                            Nachrichten hizufügen
                            <ul>
                                <li>Nachrichten werden in der Datenbank gespeichert.</li>
                            </ul>
                        </li>
                        <li class="list-item">
                            Nachrichten anzeigen
                            <ul>
                                <li>Nachrichten werden aus der Datenbank geholt und auf der Website dargestellt.</li>
                            </ul>
                        </li>
                        <li class="list-item">
                            Voting
                            <ul>
                                <li>Ein Nutzer kann ein Eintrag eines anderen Nutzers bewerten, indem er einen Daumen hoch oder runter gibt.</li>
                            </ul>
                        </li>
                        <li class="list-item"> 
                            Logout (PHP)
                            <ul>
                                <li>Der Nutzer kann sich abmelden.</li>
                            </ul>
                        </li>
                        <li class="list-item">
                            Profilseite (PHP | Sehr viel Arbeit)
                            <ul>
                                <li>Der Nutzer kann sein Profil und seine Nachrichten auf einer seperaten Webpage ansehen.</li>
                            </ul>
                        </li>
                        <li class="list-item">
                            Profil ändern (PHP | Sehr viel Arbeit)
                            <ul>
                                <li>Der Nutzer kann auf Wunsch sein Profil ändern.</li>
                            </ul>
                        </li>
                        <li class="list-item">
                            Dokumentation / Regelung
                            <ul>
                                <li>Dokumentation enthält Beschreibung des Projekts</li>
                                <li>Regelung enthält verschiedene Regeln, wie z.B. der richtige Umgang mit "Pull", "Commit" und "Push".</li>
                            </ul>
                        </li>
                        <li class="list-item">
                            Design Website
                            <ul>
                                <li>Die Website wird mit CSS gestylt.</li>
                            </ul>
                        </li>
                        <li class="list-item">
                            Struktur der Codes
                            <ul>
                                <li>Beinhaltet: Aufbau und Einrückung der Codes, sinvolle Namen(Variablen, Klassen usw.) und Leserlichkeit. </li>
                            </ul>
                        </li>
                        <li class="list-item">
                            Nachrichtenentwurfs-Ansichtseite
                            <ul>
                                <li>BITTE BESCHREIBUNG HINZUFÜGEN...</li>
                            </ul>
                        </li>
                        <li class="list-item"> Weitere Ideen: </li>
                    </ul>
                </div>

                <div id="zustaendig" class="content-block"> 
                    <h3 class="headline-big"> Zuständigkeiten: </h3>

                    <h4 class="headline-sm"> Basil Lade: </h4>

                    <ul class="list-items">
                        <li class="list-item"> Dokumentation / Regelelung </li>
                        <li class="list-item"> Design der Website </li>
                        <li class="list-item">  </li>
                    </ul>

                    <h4 class="headline-sm"> Timothé Laborie: </h4>

                    <ul class="list-items">
                        <li class="list-item"> Ausloggen </li>
                        <li class="list-item"> Login </li>
                        <li class="list-item">  </li>
                    </ul>

                    <h4 class="headline-sm"> Fabian Gysel: </h4>

                    <ul class="list-items">
                        <li class="list-item"> Haupseite </li>
                        <li class="list-item"> Registrierung </li>
                        <li class="list-item">  </li>
                    </ul>

                    <h4 class="headline-sm"> Team: </h4>

                    <ul class="list-items">
                        <li class="list-item"> Source Control System bestimmt &#10003;</li>
                        <li class="list-item"> Projekt Initialisiert </li>
                        <li class="list-item"> IDE bestimmt &#10003;</li>
                        <li class="list-item"> Regelungen bestimmt </li>
                        <li class="list-item"> Entwicklungs-Software installiert &#10003;</li>
                        <li class="list-item"> Datenbank </li>
                        <li class="list-item"> Profilseite </li>
                        <li class="list-item"> Profilseite abspeichern </li>
                        <li class="list-item"> Abgabe </li>
                    </ul>
                </div>

                <div id="proj-ablauf" class="content-block">
                    <h3 class="headline-big"> Projekt-Ablauf: </h3>

                    <ol class="list-items">
                        <li class="list-item"> Source Control System bestimmen </li>
                        <li class="list-item"> Projekt Initialisieren </li>
                        <li class="list-item"> IDE bestimmen </li>
                        <li class="list-item"> Entwicklungs-Software installieren </li>
                        <li class="list-item"> Aufteilung der Tasks </li>
                        <li class="list-item"> Programmieren (Dokumentiert und mit Test-Cases) </li>
                        <li class="list-item"> Abgabe </li>
                    </ol>
                </div>

                <div id="erm" class="content-block">
                    <h3 class="headline-big"> ERM: </h3>
                    <dl>
                        <!--<dt><img src="/img/doku/ERM.png" alt="Datenbank ERD"/></dt> Bild nicht komplett -->
                        <dd>
                            In der Tabelle <strong>user</strong>
                            sind alle Kontaktdaten des Nutzers gespeichert. Um 
                            später die Nachrichten, nach sehr vielen und genauen 
                            Daten zu sortieren, hat die Tabelle <strong>user</strong> 
                            einige Attribute. Der User hat allerdings bloss einen 
                            Username, Vornamen, Nachnamen und eine EMail anzugeben.
                            Die restlichen Daten können nachträglich hinzugefügt 
                            werden. Alle Daten ausser das Passwort kann direkt 
                            unter der Profilanzeige verädert werden. Diese ruft 
                            man auf, indem man auf "Eingeloggt als ...." klickt.
                        </dd>
                        <br>
                        <dd>
                            In der Tabelle <strong>nachrichten</strong>
                            sind alle Nachrichten gespeichert. Diese verfügen über 
                            einen Titel, einen Text, eine Anzahl der Gefällt mir 
                            und Gefällt mir nicht Anzeige und über ein Datum an 
                            dem die Nachricht erstellt wurde. Die Nachrichten 
                            lassen sich unter nach mehreren Kategorien anzeigen 
                            und über viele weitere Filtern. Seine eigenen Nachrichten 
                            kann man unter der Profilansicht ansehen.
                        </dd>
                        <br>
                        <dd>
                            In der Tabelle <strong>user_nachrichten</strong> 
                            wird jede Nachricht einem Nutzer zugewiesen, 
                            damit später alle Nachrichten von einem bestimmten
                            Nutzer herausgesucht werden kann.
                        </dd>
                    </dl>
                </div>

            </div>
        </div>
    </body>
</html>
