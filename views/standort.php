<h2 class="h2-daten">Standort Daten</h2>

<div class="table-wrapper">
<table class="table-self table table-striped table-hover">
<tr>
	<th>Standort</th>
	<th>Standorte ID</th>
</tr>

<?php
foreach($result AS $standort)
{
	require "_standort_all.php";
}
?>
</table>
</div>