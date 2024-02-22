<h2>Personen Daten</h2>

<div>
<button><a href="index.php?action=personen_insert">Füge eine neue Person hinzu</a></button>
</div>

<table>
<tr>
	<th>ID</th>
	<th>Anrede</th>
	<th>Vorname</th>
	<th>Nachname</th>
	<th>Straße</th>
	<th>Hausnummer</th>
	<th>Ort</th>
	<th>Plz</th>
	<th>Email</th>
	<th>Password</th>
	<th>Zeigen</th>
	<th>Löschen</th>
	<th>Editieren</th>
</tr>

<?php
foreach($result AS $personen)
{
	require "_personen_select_all.php";
}
?>
</table>
