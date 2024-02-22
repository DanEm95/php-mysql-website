<h2 class="h2-daten">Seminar Daten</h2>

<div class="table-wrapper">
<table class="table-self table table-striped table-hover">
<tr>
	<th>Titel</th>
	<th>Beschreibung</th>
	<th>Preis</th>
	<th>Kategorien ID</th>
</tr>

<?php
foreach($result AS $seminar)
{
	require "_seminar_all.php";
}
?>
</table>
</div>