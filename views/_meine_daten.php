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
	<td>
<form  action="" method="post">
    <input type="password" id="password" name="password">
    <button type="submit">Submit</button>
</form>
	</td>
</tr>
