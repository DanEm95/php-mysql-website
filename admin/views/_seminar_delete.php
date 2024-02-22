<tr>
	<th>ID</th>
	<th>Titel</th>
	<th>Beschreibung</th>
	<th>Preis</th>
	<th>Kategorien ID</th>
	<th>Aktionen</th>
</tr>

<tr>
	<td><?= $seminar->getId() ?></td>
	<td><?= $seminar->getTitel() ?></td>
	<td><?= $seminar->getBeschreibung() ?></td>
	<td><?= $seminar->getPreis() ?></td>
	<td><?= $seminar->getKategorien_Id() ?></td>
	<td><button type="submit">Delete</button></td>
</tr>
