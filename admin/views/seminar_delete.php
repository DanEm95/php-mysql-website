<form action="index.php?action=seminar_delete&id=<?= $seminar->getId() ?>" method="post">
<table>
<h2>Wollen Sie das Seminar wirklich löschen?</h2>
<?php require "_seminar_delete.php";?>
</table>
</form>
