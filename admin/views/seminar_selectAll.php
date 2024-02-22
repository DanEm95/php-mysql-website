<h2>Seminar Daten</h2>

<div>
<button><a href="index.php?action=seminar_insert">Füge einen neues Seminar hinzu</a></button>
</div>

<table>
<tr>
	<th>ID</th>
	<th>Titel</th>
	<th>Beschreibung</th>
	<th>Preis</th>
	<th>Kategorien ID</th>
	<th>Zeigen</th>
	<th>Löschen</th>
	<th>Editieren</th>
</tr>

<?php
foreach($result AS $seminar)
{
	require "_seminar_select_all.php";
}
?>
</table>
