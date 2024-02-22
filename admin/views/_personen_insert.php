<input type="hidden" name="id" value="<?= $personen->getId() ?>">
<div>
	<label for="anrede">Anrede</label>
	<input type="text" id="anrede" name="anrede" value="<?= $personen->getAnrede() ?>" required>
</div>
<div>
	<label for="vorname">Vorname</label>
	<input type="text" id="vorname" name="vorname" value="<?= $personen->getVorname() ?>" required>
</div>
<div>
	<label for="nachname">Nachname</label>
	<input type="text" id="nachname" name="nachname" value="<?= $personen->getNachname() ?>" required>
</div>
<div>
	<label for="strasse">Strasse</label>
	<input type="text" id="strasse" name="strasse" value="<?= $personen->getStrasse() ?>" required>
</div>
<div>
	<label for="hausnr">Hausnummer</label>
	<input type="text" id="hausnr" name="hausnr" value="<?= $personen->getHausnr() ?>" required>
</div>
<div>
	<label for="ort">Ort</label>
	<input type="text" id="ort" name="ort" value="<?= $personen->getOrt() ?>" required>
</div>
<div>
	<label for="plz">PLZ</label>
	<input type="text" id="plz" name="plz" value="<?= $personen->getPlz() ?>" required>
</div>
<div>
	<label for="email">Email</label>
	<input type="email" id="email" name="email" value="<?= $personen->getEmail() ?>" required>
</div>
<div>
	<label for="password">Password</label>
	<input type="password" id="password" name="password" value="<?= $personen->getPassword() ?>" required>
</div>
<button type="submit">Insert</button>
