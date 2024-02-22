<!DOCTYPE html>
<html>
<head>

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

	<script>
		function openPopup(id) {
			window.open('./include/modul_sicht.php', 'popupWindow', 'width=600,height=600,scrollbars=yes');
		}
	</script>
</head>
<body>

	<?php
		session_start();
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
			echo "<a href='include/logout.php'>Logout</a>";
		}
	?>

	<?php

	$ausgabe = "<table>";
	$ausgabe .=
	"<tr><th>Id</th><th>Titel</th><th>Beschreibung</th><th>Preis</th><th>Sicht</th></tr>";

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
			$ausgabe .= "<td>" . "<a href='#' onclick='openPopup(" . $v['id'] . ")'>sicht</a>" . "</td>" . "</tr>";
		}
	} catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}

		$ausgabe .= "</table>";
		echo $ausgabe;
		
	?>

</body>
</html>
