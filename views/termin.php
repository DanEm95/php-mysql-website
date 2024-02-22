<h2 class="h2-daten">Termin Daten</h2>

<div class="table-wrapper">
<table class="table-self table table-striped table-hover">
<tr>
	<th>Beginn</th>
	<th>Ende</th>
	<th>Seminare ID</th>
	<th>Standorte ID</th>
	<th>Raum</th>
</tr>

<?php
foreach($result AS $termin)
{
	require "_termin_all.php";
}
?>
</table>
</div>