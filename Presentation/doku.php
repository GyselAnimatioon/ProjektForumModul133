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
                <li class="list-item"><a class="index" href="#beschreibung">Projektbeschreibung</a></li>
                <li class="list-item"><a class="index" href="#technologien">Einzusetzende Technologien</a></li>
                <li class="list-item"><a class="index" href="#einz-aufgaben">Aufgaben</a></li>
                <li class="list-item"><a class="index" href="#zustaendig">Zuständig</a></li>
                <li class="list-item"><a class="index" href="#proj-ablauf">Projekt-Ablauf</a></li>
                <li class="list-item"><a class="index" href="#erm">ERM</a></li>
                <li class="list-item"><a class="index" href="#funktionen">Funktion der Website</a></li>
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
            <h3 class="headline-big"> Projektbeschreibung: </h3>
            <p> Es wird in einer Partnerarbeit eine 3- Tier WEB Applikation definiert und selbständig entwickelt. </p>
            <p>Die Applikation wird in 3 Ebenen unterteilt.</p>
            <p>Die Daten-Ebene verwaltet die Datenbank, diese werden wir danach in PHP benutzen.</p>
            <p>In der Business-Ebene ist der Code wie z.B. PHP enthalten, mit welchem man Daten aus der Daten-Ebene benutzen kann.</p>
            <p>Der Präsentation-Ebene enthält alles, was der Endnutzer auf dem Bildschirm sieht, wie z.B. Texte auf der Website und Formation der Texte. HTML und CSS werden dort z.B. verwaltet.</p> 
            <br>

            Wir wollen eine Webapplikation erstellen, in der es möglich ist, sich in einer Datenbank anzumelden oder zu registrieren. Man soll ein eigenes
            Profil bekommen und dies dann auch bearbeiten können. Über die Startseite kann man Nachrichten erstellen, diese mit einem Titel versehen und 
            dannach "posten". Jeder eingeloggte User kann seine Meinung zu einer Nachricht über ein Voting-System ("Gefällt mir", "Gefällt mir nicht") abgeben.
            Auf der Startseite werden die jeweiligen Nachrichten mit den meisten "Hochvotings" der Reihe nach aufgeführt.
            Der User soll auch seine eigenen Nachrichten verwalten und diese auf einer seperaten Seite einsehen und auch löschen können.
            Der User kann sich schliesslich auch wieder ausloggen.

        </div>

        <div id="technologien" class="content-block">
            <h3 class="headline-big"> Einzusetzende Technologien: </h3>
            <ul class="list-items">
                <li class="list-item logo-item">
                    <img class="logo-mysql" src="img/doku/mysql-logo.png" alt="mysql logo"/>
                    MySQL ist ein weltweit stark verbreitetes eelationales Datenbanksystem, wir haben MySQL gewählt, weil es eine der bekanntesten ist und es eine Open-Source Lizensierung gibt.
                </li>
                <li class="list-item logo-item">
                    <img class="logo-php" src="img/doku/phplogo-highres.png" alt="php-logo"/>
                    PHP ist eine serverseitige Programmiersprache und wird für die Funktionalität der Website benötigt, z.B. Erstellen eines Login oder eines Accounts. PHP wurde gewählt, weil es als Schulstandard empfohlen wurde und wir schon etwas Erfahrung damit haben.
                </li>

                <li class="list-item logo-item">
                    <img class="logo-html" src="img/doku/HTML5_Logo_512.png" alt=""/>
                    HTML ist für die Website, es ist eine Auszeichungs Sprache, mit der eine Website strukturiert wird.
                </li>
                <li class="list-item logo-item">
                    <img class="logo-css3" src="img/doku/css3-logo.png" alt=""/>
                    CSS wird genutzt um den Style eines HTML-Dokuments festzulegen. Wir benutzen CSS, weil es die einzige Stylesprache die mit HTML kompatibel ist.
                </li>
                <li class="list-item logo-item">
                    <img class="logo-js" src="img/doku/js6-logo.png" alt=""/>
                    JS steht für JavaScript. Es ist eine Skriptsprache, mit der man dynamische Websiten erstellen kann.
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
                        <li>Auf der Hauptseite kann man alle Einträge des Nutzers sehen.</li>
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
                        <li>Der Nutzer kann sich anmelden, vorausgesetzt er hat sich schon registriert.</li>
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
                        <li>Ein Nutzer kann einen Eintrag eines anderen Nutzers bewerten, indem er einen Daumen hoch oder runter gibt.</li>
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
                        <li>Die Dokumentation enthält die Beschreibung des Projekts</li>
                        <li>Die Regelung enthält verschiedene Regeln, wie z.B. der richtige Umgang mit "Pull", "Commit" und "Push".</li>
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
                <li class="list-item"> Dokumentation / Regelung </li>
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
                <li class="list-item"> Projekt initialisiert </li>
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
                <li class="list-item"> Projekt initialisieren </li>
                <li class="list-item"> IDE bestimmen </li>
                <li class="list-item"> Entwicklungs-Software installieren </li>
                <li class="list-item"> Aufteilung der Tasks </li>
                <li class="list-item"> Programmieren (dokumentiert und mit Test-Cases) </li>
                <li class="list-item"> Abgabe </li>
            </ol>
        </div>

        <div id="erm" class="content-block">
            <h3 class="headline-big"> ERM: </h3>
            <dl>
                <dd>
                    In der Tabelle <strong>user</strong>
                    sind alle Kontaktdaten des Nutzers gespeichert. Um 
                    später die Nachrichten nach sehr vielen und genauen 
                    Daten zu sortieren, hat die Tabelle <strong>user</strong> 
                    einige Attribute. Der User hat allerdings bloss einen 
                    Usernamen, Vornamen, Nachnamen und eine EMail anzugeben.
                    Die restlichen Daten können nachträglich hinzugefügt 
                    werden. Alle Daten ausser dem Passwort kann direkt 
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
                    lassen sich nach mehreren Kategorien anzeigen 
                    und über viele weitere Filter. Die eigenen Nachrichten 
                    kann man unter der Profilansicht ansehen.
                </dd>
                <br>
                <dd>
                    In der Tabelle <strong>user_nachrichten</strong> 
                    wird jede Nachricht einem Nutzer zugewiesen, 
                    damit später alle Nachrichten von einem bestimmten
                    Nutzer herausgesucht werden können.
                </dd>
            </dl>
        </div>
        <div id="funktionen" class="content-block">
            <!-- Titel des Blocks -->
            <h3 class="headline-big"> Funktionen der Website: </h3>
            <!-- Inhalt des Blocks -->
            <ul class="list-items">
                <li class="list-item"> Profil verwalten &#10003;</li>
                <li class="list-item"> Anmelden &#10003;</li>
                <li class="list-item"> Abmelden &#10003;</li>
                <li class="list-item"> Registrieren &#10003;</li>
                <li class="list-item"> Nachrichten Schreiben &#10003;</li>
                <li class="list-item"> Nachrichten bewerten &#10003;</li>
                <li class="list-item"> Andere Profile ansehen &#10003;</li>
                <li class="list-item"> Beste Nachrichten ansehen &#10003;</li>
                <li class="list-item"> Neuste Nachrichten ansehen &#10003;</li>
                <li class="list-item"> Zeitspanne seit Erstellung einer Nachricht &#10003;</li>
                <li class="list-item"> Zufall Nachricht ansehen &#10003;</li>
                <li class="list-item"> Trendige Nachrichten ansehen </li>
                <li class="list-item"> Weiter gefilterte Nachrichten ansehen </li>
                <li class="list-item"> Doku ansehen &#10003; </li>
                <li class="list-item"> Regeln ansehen &#10003; </li>
                <li class="list-item"> Seine Nachrichten löschen </li>
                <li class="list-item"> Anderen Nutzern Privatnachricht schreiben </li>
                <li class="list-item"> Auf Nachrichten antworten </li>
                <li class="list-item"> Auf Nachricht beantwortete Nachrichten bewerten </li>
                <li class="list-item"> Nachrichten öffenlich an jemanden schreiben </li>
                <li class="list-item"> Nachrichten bearbeiten </li>
                <li class="list-item"> vlt. Fotos </li>
            </ul>
        </div>
    </div>
</div>