<form action="index.php?action=standort_delete&id=<?= $standort->getId() ?>" method="post">
<table>
<h2>Wollen Sie den Standort wirklich löschen?</h2>
<?php require "_standort_delete.php";?>
</table>
</form>
