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
        
        <?php require_once('navigation.php');?>
        
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
                    <p>Die Daten-Ebene verwaltet die Datenbank, diese werden wir dannach in PHP benutz.</p>
                    <p>In der Business-Ebene wird Code wie z.B. PHP verwalten, mit dieser man dannach Daten aus der Daten-Ebene benutzen kann.</p>
                    <p>Im Presentationen-Layer wird alles verwaltet, was der Endnutzer auf dem Bildschirm sieht, wie z.B. Texte auf der Website und Formation der Texte. HTML und CSS werden dort z.B. verwaltet.</p> 
                    <br>
                    <p>
                        Wir wollen ein Webapplikation erstelln, in der es Möglich ist sich in eine Datenbnk Anzumelden oder zu Registrieren. Man soll ein eigenes
                        Profil bekommen und dies dann auch bearbeiten könne. Über die Startseite kann man Nachrichten erstllen, diese mit einem Titel verzeichnen und dies 
                        dannach "Posten". Jeder eingeloggte User kann seine Meinung zu dieser Nachrichten über ein Voting-System ("Gefällt mir", "Gefällt mir nicht") abgeben.
                        Auf der Startseite werden die jeweiligen Nachrichten, mit den meissten "Hochvotings" der Reihe nache aufgeführt.
                        Der User soll auch seine eigenen Nachrichten verwalten können und diese auf einer Seperaten Seite einsehen und auch auf wunsch Löschen.
                        Der User kann sich schlussentlich auch wieder Ausloggen.
                    </p>
                </div>

                <div id="technologien" class="content-block">
                    <h3 class="headline-big"> Einzusetzende Technologien: </h3>
                    <ul class="list-items">
                        <li class="list-item"> MySQL ist ein Weltweit stark verbreitetes Relationales Datenbanksystem, wir haben  MySQL gewählt weil sie eine der bekanntesten ist und es eine Open-Source Lizensierung gibt. </li>
                        <li class="list-item"> PHP ist eine Serverseitige Programmiersprache und wird für die Funktionalität der Website benötigt, z.B. Erstellen eines Login oder eines Accounts. PHP wurde gewählt, weil es als Schulstandard empfohlen wurde und wir schon etwas Erfahrung haben..</li>
                        <li class="list-item"> HTML für die Website, es ist eine Auszeichungs Sprache um ein Dokument zu strukturieren. </li>
                        <li class="list-item"> CSS wird genutzt um den Style eines HTML-Dokument festzulegen. Wir benutzen CSS als eine der einzigsten Stylesprachen die mit HTML compatibel sind.</li>
                        <li class="list-item"> JS steht für JavaScript. Es ist eine Skriptsprache, mit der man Dynamische Websiten erstellen kann.</li>
                    </ul>
                </div>
                
                <div id="einz-aufgaben" class="content-block">
                    <h3 class="headline-big"> Aufgaben: </h3>
                    <ul class="list-items">
                        <li class="list-item"> Hauptseite (PHP)</li>
                        <li class="list-item"> Datenbank (MySQL)</li>
                        <li class="list-item"> Login (PHP / MySQL)</li>
                        <li class="list-item"> Registrierung (PHP / MySQL)</li>
                        <li class="list-item"> Nachrichten zur Datenbank hizufügen ()</li>
                        <li class="list-item"> Nachrichten aus Datenbank anzeigen </li>
                        <li class="list-item"> Gefällt mir Anzeige </li>
                        <li class="list-item"> Logout (PHP)</li>
                        <li class="list-item"> Profilseite (PHP | Sehr viel Arbeit)</li>
                        <li class="list-item"> Profil zurückspeichern (PHP | Sehr viel Arbeit)</li>
                        <li class="list-item"> Dokumentation / Regelung </li>
                        <li class="list-item"> Design Website </li>
                        <li class="list-item"> HTML usw. Struktur </li>
                        <li class="list-item"> Nachrichtenentwurfs-Ansichtseite </li>
                        <li class="list-item"> Eigene Nachrichten </li>
                        <li class="list-item">  </li>
                        <li class="list-item"> Eitere Ideen: </li>
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
                    
                    <img src="../img/ERM.png" alt=""/>
                </div>
                
            </div>
        </div>
    </body>
</html>
