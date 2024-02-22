<pre>
Klausurprojekt 
Dozent: Bishara Sabbagh 
Modul: PHPD
Abgabe: 23.02.2024 
Klasse: FAH31
Es soll eine Frontend/Backend Website entwickelt werden. Die Website soll mit HTML, 
CSS, PHP, OOP, MVC Entwurfsmuster, MySQL und PDO Webtechnologien realisiert 
werden. (Optional: auch die Webtechnologien JavaScript, AJAX und jQuery) 
Thema:___________________MVC_EDV-Schule_Teil-2___________________ 
Anforderungen: 
1. mindestens 5 Seiten. 
2. einige Template- und Partial-Dateien. 
3. mindestens zwei CSS-Dateien. 
3. Einige Bilder und Grafiken. 
4. Seiten-Navigation als Partials. 
5. Alle Quellcode Dateien (PHP, MYSQL) müssen kommentiert werden. 
6. Eine Dokumentation mit UML und „screen-shots“ in ‚HTML‘-Format. 
7. Die Website soll Benutzerfreundlich sein. 
8. Die Website soll sicher, was die Eingaben der Benutzer betrifft, sein. 
9. Die Dateien sollten in entsprechende Unterordner platziert werden. 
10. Die fertige Website soll in die Ordner „PHPD/Klausurprojekt“ kopiert werden. 
11. Fazit – Erfahrungen, Erfolge und Misserfolge. 
Zur PHP, MySQL und PDO sollen die Skripte die folgenden Bedingungen erfüllen: 
1. Ein SQL-Skript für die Herstellung der Datenbank und einige Migrationsskripte. 
2. Ein Such-Formular [mit einer Auswahl-Liste]. 
3. Registrierung, Login/Logout-Formulare
4. Formulare für alle CRUD Aktionen 
5. Eine Listen-Sicht und Einzel–Sicht Design in Templates 
6. 2 UML-Diagramme in dia und JPG Formate
7. Ordner Struktur sollte MVC-Entwurfsmuster Konform sein. 
8. Der Frontend-Controller soll alle Aktionen implementieren . 
9. Seiten-Navigation als Teil-Template(partial). 
10. mindestens einmal Type-Hinting und Instanceof implementieren
11. mindestens einmal Klassenfunktionen (z.B. method_exists(), …) verwenden
12.Fehlermeldungen und/oder Erfolgsmeldungen – „flash messages“
13. Backend Für die Administration mit Login/Passwort 
14. Backend mit eigenem Controller soll alle Aktionen implementieren. 
15. Minimale Sicherheit und Validierung sollten garantiert werden. 
16. Active record Design Pattern implementieren 
17. Klassen sollten eine Interface implementieren
18. Interface [abstract-class, trait] implementieren 
19. Auto-Loading implementieren 
20. Klassen in Namespace Models kreieren
21. Formulardaten filtern und validieren
22. [Statistiken Seite]
23. Datenbank, Projektordner, zip-Archiv namen: mvc1-14 
24. README Wie, wo und was … login, password

<?php
$images = ["app_create.png", "create_database.png", "describe_admins.png", "describe_kategorien.png", "describe_personen.png", "describe_personen_termine.png", "describe_seminare.png", "describe_standorte.png", "describe_termine.png", "mysql_mariadb_version.png", "php_version.png", "mysqldump.png"];
if (count($images) > 0) {
    echo "<html><head><style>
        .image-container img {
            width: 1000px;
            height: 500px;
            object-fit: contain;
        }
    </style></head><body>";
    foreach ($images as $image) {
        echo "<div class='image-container'><img src='$image' alt='Image'/></div>";
    }
    echo "</body></html>";
} else {
    echo "No images found";
}
?>