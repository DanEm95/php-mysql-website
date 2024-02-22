<tr>
	<td><?= $standort->getId() ?></td>
	<td><?= $standort->getStandort() ?></td>
	<td><a href="index.php?action=standort_select&id=<?= $standort->getId() ?>">Show</a></td>
	<td><a href="index.php?action=standort_delete&id=<?= $standort->getId() ?>">Delete</a></td>
	<td><a href="index.php?action=standort_update&id=<?= $standort->getId() ?>">Update</a></td>
</tr>
