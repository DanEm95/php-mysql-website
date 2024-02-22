<tr>
	<td><?= $kategorien->getId() ?></td>
	<td><?= $kategorien->getKategorien() ?></td>
	<td><a href="index.php?action=kategorien_select&id=<?= $kategorien->getId() ?>">Show</a></td>
	<td><a href="index.php?action=kategorien_delete&id=<?= $kategorien->getId() ?>">Delete</a></td>
	<td><a href="index.php?action=kategorien_update&id=<?= $kategorien->getId() ?>">Update</a></td>
</tr>
