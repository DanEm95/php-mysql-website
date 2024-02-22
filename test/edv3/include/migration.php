<?php
require "datenbank.php";

try {
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $passwort);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Connected successfully"; 

	// your sql query
	$sql = "CREATE TABLE IF NOT EXISTS personen (
		id INT PRIMARY KEY AUTO_INCREMENT,
		anrede VARCHAR(30) NOT NULL,
		vorname VARCHAR(30) NOT NULL,
		nachname VARCHAR(30) NOT NULL,       
		ort VARCHAR(30) NOT NULL,
		email VARCHAR(50) NOT NULL DEFAULT '',
		passwort VARCHAR(60) NOT NULL,
		UNIQUE (email)
	) DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";

   // execute the sql query
   $conn->exec($sql);

   echo "Table created successfully";
} catch(PDOException $e) {
   echo "Connection failed: " . $e->getMessage();
}

?>

