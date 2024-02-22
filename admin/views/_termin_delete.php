<tr>
	<th>ID</th>
	<th>Beginn</th>
	<th>Ende</th>
	<th>Seminare ID</th>
	<th>Standorte ID</th>
	<th>Raum</th>
	<th>Aktionen</th>
</tr>

<tr>
	<td><?= $termin->getId() ?></td>
	<td><?= $termin->getBeginn() ?></td>
	<td><?= $termin->getEnde() ?></td>
	<td><?= $termin->getSeminare_id() ?></td>
	<td><?= $termin->getStandorte_id() ?></td>
	<td><?= $termin->getRaum() ?></td>
	<td><button type="submit">Delete</button></td>
</tr>
