<h2>Standort Daten</h2>

<div>
<button><a href="index.php?action=standort_insert">Füge einen neuen Standort hinzu</a></button>
</div>

<table>
<tr>
	<th>ID</th>
	<th>Standort</th>
	<th>Zeigen</th>
	<th>Löschen</th>
	<th>Editieren</th>
</tr>

<?php
foreach($result AS $standort)
{
	require "_standort_select_all.php";
}
?>
</table>
