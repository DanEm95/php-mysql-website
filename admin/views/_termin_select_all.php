<tr>
	<td><?= $termin->getId() ?></td>
	<td><?= $termin->getBeginn() ?></td>
	<td><?= $termin->getEnde() ?></td>
	<td><?= $termin->getSeminare_id() ?></td>
	<td><?= $termin->getStandorte_id() ?></td>
	<td><?= $termin->getRaum() ?></td>
	<td><a href="index.php?action=termin_select&id=<?= $termin->getId() ?>">Show</a></td>
	<td><a href="index.php?action=termin_delete&id=<?= $termin->getId() ?>">Delete</a></td>
	<td><a href="index.php?action=termin_update&id=<?= $termin->getId() ?>">Update</a></td>
</tr>
