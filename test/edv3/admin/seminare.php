<style>
 table {
  border-collapse: collapse;
  width: 100%;
 }
 
 th, td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
 }
 
 th {
  background-color: #4CAF50;
  color: white;
 }
 
 tr:nth-child(even) {
  background-color: #f2f2f2;
 }
 
 tr:hover {
  background-color: #ddd;
 }
</style>


<?php
$ausgabe = "<table>";
$ausgabe .=
"<tr><th>Id</th><th>Titel</th><th>Beschreibung</th><th>Preis</th><th>Editieren</th><th>Löschen</th><th>Sicht</th></tr>";

$servername = "localhost";
$username = "root";
$passwort = "";
$dbname = "edv3";

try {
	$conn = new PDO ("mysql:host=$servername;dbname=$dbname",
	$username, $passwort);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("SELECT * FROM module");
	$stmt-> execute();
	
	// set the resulting array to associative
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	foreach($stmt->fetchAll() as $k=>$v)
	{
			$ausgabe .= "<tr>";
		foreach($v AS $wert)
		{
	$ausgabe .= "<td>" . $wert . "</td>";
		}
		$ausgabe .= "<td>" . "<a href='modul_anlegen.php?action=editieren&id=5'>editieren</a>" . "</td>" . "<td>" . "<a href='modul_anlegen.php?action=löschen&id=5'>löschen</a>" . "</td>" . "<td>" . "<a href='modul_anlegen.php?action=sicht'>sicht</a>" . "</td>" . "</tr>";
	}
} catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
}

	$ausgabe .= "</table>";
	echo $ausgabe;
?>
