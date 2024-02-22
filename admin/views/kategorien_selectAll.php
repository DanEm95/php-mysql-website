<h2>Kategorie Daten</h2>

<div>
<button><a href="index.php?action=kategorien_insert">Füge eine neue Kategorie hinzu</a></button>
</div>

<table>
<tr>
	<th>ID</th>
	<th>Kategorie</th>
	<th>Zeigen</th>
	<th>Löschen</th>
	<th>Editieren</th>
</tr>

<?php
foreach($result AS $kategorien)
{
	require "_kategorien_selectAll.php";
}
?>
</table>
