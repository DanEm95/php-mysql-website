<tr>
	<td><?= $seminar->getId() ?></td>
	<td><?= $seminar->getTitel() ?></td>
	<td><?= $seminar->getBeschreibung() ?></td>
	<td><?= $seminar->getPreis() ?></td>
	<td><?= $seminar->getKategorien_Id() ?></td>
	<td><a href="index.php?action=seminar_select&id=<?= $seminar->getId() ?>">Show</a></td>
	<td><a href="index.php?action=seminar_delete&id=<?= $seminar->getId() ?>">Delete</a></td>
	<td><a href="index.php?action=seminar_update&id=<?= $seminar->getId() ?>">Update</a></td>
</tr>
