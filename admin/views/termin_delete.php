<form action="index.php?action=termin_delete&id=<?= $termin->getId() ?>" method="post">
<table>
<h2>Wollen Sie den Termin wirklich löschen?</h2>
<?php require "_termin_delete.php";?>
</table>
</form>
