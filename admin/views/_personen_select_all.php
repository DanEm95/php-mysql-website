<tr>
	<td><?= $personen->getId() ?></td>
	<td><?= $personen->getAnrede() ?></td>
	<td><?= $personen->getVorname() ?></td>
	<td><?= $personen->getNachname() ?></td>
	<td><?= $personen->getStrasse() ?></td>
	<td><?= $personen->getHausnr() ?></td>
	<td><?= $personen->getOrt() ?></td>
	<td><?= $personen->getPlz() ?></td>
	<td><?= $personen->getEmail() ?></td>
	<td><?= $personen->getPassword() ?></td>
	<td><a href="index.php?action=personen_select&id=<?= $personen->getId() ?>">Show</a></td>
	<td><a href="index.php?action=personen_delete&id=<?= $personen->getId() ?>">Delete</a></td>
	<td><a href="index.php?action=personen_update&id=<?= $personen->getId() ?>">Update</a></td>
</tr>
