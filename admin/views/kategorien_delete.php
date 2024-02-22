<form action="index.php?action=kategorien_delete&id=<?= $kategorien->getId() ?>" method="post">
<table>
<h2>Wollen Sie die Kategorie wirklich löschen?</h2>
<?php require "_kategorien_delete.php";?>
</table>
</form>
