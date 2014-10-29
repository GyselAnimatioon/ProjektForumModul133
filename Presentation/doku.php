

<h1> Forum-Projekt Analyse </h1>

<div class="content-inner">
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
        <h3 class="headline-big"> Team: </h3>
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
                -                <img class="logo-js" src="img/doku/js6-logo.png" alt=""/>
                -                JS steht für JavaScript. Es ist eine Skriptsprache, mit der man dynamische Websiten erstellen kann.
                -            </li>
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
                Profilseite
                <ul>
                    <li>Der Nutzer kann sein Profil und seine Nachrichten auf einer seperaten Webpage ansehen.</li>
                </ul>
            </li>
            <li class="list-item">
                Profil ändern 
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
                Suche nach Nachrichten
                <ul>
                    <li>Der Benutzer kann nach verschiedene Kriterien die Nachrichten von der Website anzeigen </li>
                </ul>
            </li>
        </ul>
    </div>
    <div id="zustaendig" class="content-block"> 
        <h3 class="headline-big"> Zuständigkeiten: </h3>
        <h4 class="headline-sm"> Basil Lade: </h4>
        <ul class="list-items">
            <li class="list-item"> Stylen der Dokumentation (css/html/schriftarten) </li>
            <li class="list-item"> Regeln gestylt </li>
            <li class="list-item"> Register.php gestylt </li>
            <li class="list-item"> Navigation.php verbessert </li>
            <li class="list-item"> Mobile und Laptop Ansicht der Website gestaltet </li>
        </ul>
        <h4 class="headline-sm"> Timothé Laborie: </h4>
        <ul class="list-items">
            <li class="list-item"> Fehlern in Dokumentation korrigiert</li>
            <li class="list-item"> Generelle Struktorierung der Website (am 1.10.14)</li>
            <li class="list-item"> best.php zeit berechnung verbessert</li>
            <li class="list-item"> nachrichten zeitspeicherung verbessert </li>
            <li class="list-item"> random.php problem korrigiert </li>
            <li class="list-item"> in profil.php sql/php/html getrennt in die 3 Layers </li>
            <li class="list-item"> HTML für Filter Funktion gemacht </li>
            <li class="list-item"> Dokumentation am 27.10.14 aktualisiert </li>
            <li class="list-item"> Mobile und Laptop Ansicht der Doku gemacht </li>
        </ul>
        <h4 class="headline-sm"> Fabian Gysel: </h4>
        <ul class="list-items">
            <li class="list-item"> Datenbank </li>
            <li class="list-item"> Thumbs up/down </li>
            <li class="list-item"> sicherheit (password hash / insertion) </li>
            <li class="list-item"> Code in vielen Dateien strukturiert </li>
            <li class="list-item"> nachrichten.php code und design gemacht </li>
            <li class="list-item"> Business, Data und Presentation - Layers Sortieren und aufräumen </li>
            <li class="list-item"> Code für Filter </li>
        </ul>
        <h4 class="headline-sm"> Ganzes Team: </h4>
        <ul class="list-items">
            <li class="list-item"> Projekt initialisiert </li>
            <li class="list-item"> IDE bestimmt</li>
            <li class="list-item"> Regelungen bestimmt</li>
            <li class="list-item"> Abgabe </li>
            <li class="list-item"> Dokumentation geschrieben </li>
            <li class="list-item"> CSS algemein</li>
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
        <h3 class="headline-big"> Funktionen der Website: </h3>
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
            <li class="list-item"> Dokumentation ansehen &#10003; </li>
            <li class="list-item"> Regeln ansehen &#10003; </li>
            <li class="list-item"> Website für Händys und Tablets optimiert &#10003;</li>
            <li class="list-item"> Seine Nachrichten löschen </li>
            <li class="list-item"> Anderen Nutzern Privatnachricht schreiben </li>
            <li class="list-item"> Auf Nachrichten antworten </li>
            <li class="list-item"> Auf Nachricht beantwortete Nachrichten bewerten </li>
            <li class="list-item"> Nachrichten öffenlich an jemanden schreiben </li>
            <li class="list-item"> Nachrichten bearbeiten </li>
            <li class="list-item"> vlt. Fotos </li>
        </ul>
    </div>

    <div id="projektarbeit" class="content-block">
        <h3 class="headline-big"> Projektarbeit: </h3>
        <table class="pure-table">
            <thead>
                <tr>
                    <th></th>
                    <th>Beschreibung der geforderten Inhalte im, Dokument</th>
                    <th>Verantwortlich</th>
                    <th>Abgabe Datum</th>
                    <th>Kontrolle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Analyse</td>
                    <td>Die Analyse Phase beinhaltet Umfang und Funktionalität der Applikation. Hauptfunktionen der Applikation werden umschrieben.</td>
                    <td>Lernende (LN)</td>
                    <td>bis 22.09.2014, BSCW</td>
                    <td></td>
                </tr>
                <tr class="pure-table-odd">
                    <td></td>
                    <td>Spezielle Anforderungen werden definiert. Infrastruktur und eingesetzte Technologie, sind zu erwähnen.</td>
                    <td>LN</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Der grobe Projektablauf und die Tätigkeiten der einzelnen Teammitglieder soll in diesem Dokument beschrieben werden. Mögliche Abklärungen (Prototyping) sind zu erwähnen.</td>
                    <td>LN</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="pure-table-odd">
                    <td>Review</td>
                    <td>Das Dokument wird mit den einzelnen Teams besprochen.</td>
                    <td>Lehrperson(LP)</td>
                    <td>bis 29.09.2014, BSCW</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Design</td>
                    <td>In der Design Phasen werden alle Design relevanten Informationen erarbeitet und in diesem Dokument, festgehalten.</td>
                    <td>LN</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="pure-table-odd">
                    <td></td>
                    <td>Genauer Funktionsbeschrieb</td>
                    <td>LN</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Design Diagramme wie Use-Cases, Aktivitäten Diagramm, Übersicht von Funktionen, API Beschreibung der Funktionen. ERM, ERD Diagramme für die Datenbank</td>
                    <td>LN</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="pure-table-odd">
                    <td></td>
                    <td>Architektur Diagramm der Applikation</td>
                    <td>LN</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Test Cases und Test Pattern werden definiert</td>
                    <td>LN</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="pure-table-odd">
                    <td>Review</td>
                    <td>Das Dokument wird mit den einzelnen Teams besprochen werden.</td>
                    <td>LP</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Implementierung</td>
                    <td>Code wird implementiert gemäss den Design Unterlagen. Notwendige Korrekturen werden im Dokument ständig nachgeführt.</td>
                    <td>LN</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="pure-table-odd">
                    <td>Review</td>
                    <td>Review der Projektarbeit</td>
                    <td>LN/LP</td>
                    <td>20.10.2014, TBZ</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Verifikation (Test)</td>
                    <td>Test der Applikation gemäss definierten Test Cases. Notwendige Korrekturen an der Applikation und Dokumentation vornehmen.</td>
                    <td>LN</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="pure-table-odd">
                    <td>Projektabschluss</td>
                    <td>Abgabe der Dokumentation und Applikation.</td>
                    <td>LN/LP</td>
                    <td>03.11.2014</td>
                    <td></td>
                </tr>
            </tbody>
        </table>


        <div id="test" class="content-block">
            <h3 class="headline-big"> Test-Cases: </h3>
            <table class="pure-table">
                <thead>
                    <tr>
                        <th>Case Nr.</th>
                        <th>CaseName</th>
                        <th>Erwartetes Resultat</th>
                        <th>Efektives Resultat</th>
                        <th>Status</th>
                        <th>Datum</th>
                        <th>Unterschrift</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Login</td>
                        <td>Ich werde eingeloggt</td>
                        <td>Ich wurde eingeloggt</td>
                        <td>Pass</td>
                        <td>29.10.2014</td>
                        <td>Fabian Gysel</td>
                    </tr>
                    <tr class="pure-table-odd">
                        <td>2</td>
                        <td>Logout</td>
                        <td>Ich werde ausgeloggt</td>
                        <td>Ich wurde ausgeloggt</td>
                        <td>Pass</td>
                        <td>29.10.2014</td>
                        <td>Fabian Gysel</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Registration</td>
                        <td>Ich werde registriert</td>
                        <td>Ich wurde registriert</td>
                        <td>Pass</td>
                        <td>29.10.2014</td>
                        <td>Fabian Gysel</td>
                    </tr>
                    <tr class="pure-table-odd">
                        <td>4</td>
                        <td>Neue Nachricht</td>
                        <td>Die neue Nachricht wird nach dem erstellen auf der Home Seite angezeigt</td>
                        <td>Die Nachricht wurde angezeigt</td>
                        <td>Pass</td>
                        <td>29.10.2014</td>
                        <td>Fabian Gysel</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Zufällige Nachrichten ansehen</td>
                        <td>Ich sehe eine Zufällige Nachricht</td>
                        <td>Ich sah eine Zufällige Nachricht</td>
                        <td>Pass</td>
                        <td>29.10.2014</td>
                        <td>Fabian Gysel</td>
                    </tr>
                    <tr class="pure-table-odd">
                        <td>6</td>
                        <td>Beste Nachrichten</td>
                        <td>Ich sehe die Nachrichten mit den besten Bewertungen</td>
                        <td>Ich sah die Nachrichten mit den besten Bewertungen</td>
                        <td>Pass</td>
                        <td>29.10.2014</td>
                        <td>Fabian Gysel</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Neue gut Bewertete Nachrichten ansehen</td>
                        <td>Ich sehe eine neue gut Bewertete Nachricht</td>
                        <td>Ich sah eine neue gut Bewertete Nachricht</td>
                        <td>Pass</td>
                        <td>29.10.2014</td>
                        <td>Fabian Gysel</td>
                    </tr>
                    <tr class="pure-table-odd">
                        <td>8</td>
                        <td>Alle Nachrichten</td>
                        <td>Ich sehe alle Nachrichten des Erstelldatums nach sortiert</td>
                        <td>Ich sah alle Nachrichten des Erstelldatums nach sortiert</td>
                        <td>Pass</td>
                        <td>29.10.2014</td>
                        <td>Fabian Gysel</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Positive Bewertung</td>
                        <td>Ich kann eine Nachricht die mir Gefällt Positiv Bewerten</td>
                        <td>Falls mir eine Nachricht gut oder gar besonders gut gefällt, dan konnte ich diese Nachricht Positiv Bewerten und es dem Ersteller so mitteilen. Rechts von dem "+" werden die Aktuellen "Likes" angezeigt.</td>
                        <td>Pass</td>
                        <td>29.10.2014</td>
                        <td>Fabian Gysel</td>
                    </tr>
                    <tr class="pure-table-odd">
                        <td>10</td>
                        <td>Negative Bewertung</td>
                        <td>Ich kann eine Nachricht die mir nicht Gefällt Negativ Bewerten</td>
                        <td>Falls mir eine Nachricht eher nicht gefällt dan konnte ich diese auch Negativ Bewerten. Auch hier werden die aktuellen "Dislikes" angezeigt.</td>
                        <td>Pass</td>
                        <td>29.10.2014</td>
                        <td>Fabian Gysel</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Profil eines anderen User besuchen</td>
                        <td>Ich kann das Profil von dem anshenen der eine Nachricht geschrieben hat.</td>
                        <td>Ich konnte, indem ich auf den jeweiligen Namen klickte auf dessen Profil gehen und dort jeweilige Informationen über der User herausfinden. Z.B. den Vor und Nachname oder die EMail. Ich konnte auch ein Facebook Link sehen, dieser musste aber vom jeweiligen User hinzugefügt werden.</td>
                        <td>Pass</td>
                        <td>29.10.2014</td>
                        <td>Fabian Gysel</td>
                    </tr>
                    <tr class="pure-table-odd">
                        <td>10</td>
                        <td>Negative Bewertung</td>
                        <td>Ich kann eine Nachricht die mir nicht Gefällt Negativ Bewerten</td>
                        <td>Ich konnte eine Nachricht die mir nicht Gefällt Negativ Bewerten</td>
                        <td>Pass</td>
                        <td>29.10.2014</td>
                        <td>Fabian Gysel</td>
                    </tr>
                </tbody>
            </table>
        </div>