<?php
//error_reporting(0);
$servername = "localhost";
$username = "root";
$passwort = '';
$dbname = "mvc3";

$options = array 
(
	PDO::ATTR_PERSISTENT => true,
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::MYSQL_ATTR_USE_BUFFERED_QUERY=>true,
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);

$dsn = "mysql:host=$servername;dbname=$dbname";

try {
 $db = new PDO($dsn, $username, $passwort, $options);
} catch (PDOException $e) {
 echo "Verbindung zur Datenbank fehlgeschlagen: " . $e->getMessage() . "<br>";
 echo "<hr>";
}
?>
