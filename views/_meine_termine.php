<?php
$sql = "SELECT titel,beginn,ende,standort,raum,seminare.preis 
FROM seminare 
JOIN termine 
ON seminare_id = seminare.id
JOIN standorte
ON standorte_id = standorte.id 
JOIN personen_termine
ON termine_id = termine.id
WHERE personen_id = :personen_id";

$stmt = $db->prepare($sql);
$stmt->bindParam(':personen_id', $_SESSION['id'], PDO::PARAM_INT);
$stmt->execute();
?>

<tr>
<?php	
		while ($result = $stmt->fetch()) {
		echo '<tr>';
		echo '<td>' . $result['titel'] . '</td>';
		echo '<td>' . $result['beginn'] . '</td>';
		echo '<td>' . $result['ende'] . '</td>';
		echo '<td>' . $result['standort'] . '</td>';
		echo '<td>' . $result['raum'] . '</td>';
		echo '<td>' . $result['preis'] . '</td>';
	}
?>
</tr>
