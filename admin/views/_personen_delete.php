<tr>
	<th>ID</th>
	<th>Anrede</th>
	<th>Vorname</th>
	<th>Nachname</th>
	<th>Straße</th>
	<th>Hausnummer</th>
	<th>Ort</th>
	<th>Plz</th>
	<th>Email</th>
	<th>Password</th>
	<th>Aktionen</th>
</tr>

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
	<td><button type="submit">Delete</button></td>
</tr>
