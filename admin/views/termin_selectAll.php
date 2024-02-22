<h2>Termin Daten</h2>

<div>
<button><a href="index.php?action=termin_insert">Füge einen neuen Termin hinzu</a></button>
</div>

<table>
<tr>
	<th>ID</th>
	<th>Beginn</th>
	<th>Ende</th>
	<th>Seminare ID</th>
	<th>Standorte ID</th>
	<th>Raum</th>
	<th>Zeigen</th>
	<th>Löschen</th>
	<th>Editieren</th>
</tr>

<?php
foreach($result AS $termin)
{
	require "_termin_select_all.php";
}
?>
</table>
