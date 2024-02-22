<form action="index.php?action=personen_delete&id=<?= $personen->getId() ?>" method="post">
<table>
<h2>Wollen Sie die Person wirklich löschen?</h2>
<?php require "_personen_delete.php";?>
</table>
</form>
