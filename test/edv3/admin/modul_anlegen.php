<style>
input, textarea{
	display:block;
	
}
</style>
<?php
if($_GET['action']=='editieren')
{
$servername = "localhost";
$username = "root";
$passwort = "";
$dbname = "edv3";

try {
	$db = new PDO("mysql:host=$servername;dbname=$dbname",
	$username, $passwort);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $db->prepare("SELECT * FROM module WHERE id= '" .$_GET['id'] . "'");
	$stmt-> execute();
$daten = $stmt->fetch();
//		print_r($daten);exit;
$id = $daten['id'];
$titel = $daten['titel'];
$beschreibung = $daten['beschreibung'];
$preis = $daten['preis'];
$formulartitel = "Modul editieren";
}
 catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
}
}
else
{
	$formulartitel= "Modul anlegen";
}
?>

<h1><?= $formulartitel ?></h1>

<form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>"> 
<label for="titel">Titel </label>
<input type="text" name="titel" id="titel" placeholder="Titel des Moduls" required value="<?php if(isset($titel)) {echo $titel;}?>">

<label for="beschreibung">Beschreibung </label>
<textarea cols="40" rows="10" name="beschreibung" id="beschreibung" placeholder="Beschreibung des Moduls" required><?php if(isset($beschreibung)) {echo $beschreibung;} ?></textarea>

<label for="preis">Preis </label>
<input type="preis" name="preis" id="preis" placeholder="Preis des Moduls" required value="<?php if(isset($preis)) {echo $preis;}?>">

<input type="submit" value="absenden">
</form>

<?php

if(!empty($_POST['titel']) && !empty($_POST['beschreibung']) && !empty($_POST['preis']))
{
	
	//insert
	echo $_POST['titel'] . "<br>";
	echo $_POST['beschreibung'] . "<br>";
	echo $_POST['preis'] . "<br>";
}

if(isset($id))
{
$sql = "UPDATE module SET titel = :titel, beschreibung = :beschreibung, preis = :preis WHERE id = :id ";
//echo $sql;exit;
$daten =
[
	'titel' =>$titel,
	'beschreibung' =>$beschreibung,
	'preis' =>$preis,
	'id' => $id
];
//print_r($daten);
$stmt = $db->prepare($sql);
$stmt->execute($daten);
}

else
{	
	if(!empty($_POST['titel']) && !empty($_POST['beschreibung']) && !empty($_POST['preis']))
{
	
	//insert
	echo $_POST['titel'] . "<br>";
	echo $_POST['beschreibung'] . "<br>";
	echo $_POST['preis'] . "<br>";
}
}
