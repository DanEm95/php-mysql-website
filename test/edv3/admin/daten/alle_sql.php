<?php
## update_seminar($db, $_POST);
#Alle UPDATE Zugriffe auf der Datenbank
$sql = "UPDATE `module` SET titel = :titel, beschreibung = :beschreibung, preis = :preis WHERE id = :id ";
		#print_r( $_POST);exit;
		$daten = 
		[
			'id' => $_POST['id'],	
			'titel' =>$_POST['titel'],	
			'beschreibung' =>$_POST['beschreibung'],	'preis' =>$_POST['preis']
		];
		
		$stmt = $db->prepare($sql);
		$stmt->execute($daten);
		$message="Seminar wurde erfolgreich editiert<br>";
		redirect("seminare.php?message=$message");


#Alle INSERT Zugriffe auf der Datenbank
$sql = "INSERT INTO personen()VALUES(:anrede,:vorname)";
$daten =[];
$stmt = $db->prepare($sql);
		$stmt->execute($daten);
		$message="Person wurde erfolgreich eingetragen<br>";
		redirect("seminare.php?message=$message");
		
		
# Alle DELETE Zugriffe auf der Datenbank
$sql = "DELETE FROM seminare WHERE id = :id";
$daten = 
		[
			'id' => $_GET['id']
		];

$stmt = $db->prepare($sql);
		$stmt->execute($daten);
		$message="Seminar wurde erfolgreich gelöscht<br>";
		redirect("seminare.php?message=$message");


# Alle SELECT Zugriffe auf der Datenbank
$meine_termine = "SELECT termine.id, titel, beginn, ende, termine.stadt FROM termine JOIN module
ON module_id = module.id
JOIN personen_termine
ON termine_id = termine.id
JOIN personen
ON personen.id = personen_id
WHERE personen_id = :id";

$daten = 
		[
			'id' => $_GET['id']
		];



$stmt = $db->prepare("SELECT * FROM module");
$stmt->execute();
$result = $stmt->fetchAll();// 2-dim Array
$result = $stmt->fetch();//1-dim Array

$sql = "SELECT id, titel, beschreibung FROM module WHERE titel LIKE '%programmierung%' OR beschreibung LIKE '%programmierung%'";




#Alle UPDATE Zugriffe auf der Datenbank

function update_seminar($db, $data)
{
$sql = "UPDATE `module` SET titel = :titel, beschreibung = :beschreibung, preis = :preis WHERE id = :id ";
		#print_r( $_POST);exit;
		$daten = 
		[
			'id' => $data['id'],	
			'titel' =>$data['titel'],	
			'beschreibung' =>$data['beschreibung'],	'preis' =>$data['preis']
		];
		
		$stmt = $db->prepare($sql);
		$stmt->execute($daten);
		$message="Seminar wurde erfolgreich editiert<br>";
		redirect("seminare.php?message=$message");
		
}
?>