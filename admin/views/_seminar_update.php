<div>
	<label for="id">ID</label>
	<input type="text" id="id" name="id" value="<?= $seminar->getId() ?>" readonly>
</div>
<div>
	<label for="titel">Titel</label>
	<input type="text" id="titel" name="titel" value="<?= $seminar->getTitel() ?>" required>
</div>
<div>
	<label for="beschreibung">Beschreibung</label>
	<textarea name="beschreibung" id="beschreibung" rows="3" required><?= $seminar->getBeschreibung() ?></textarea>
</div>
<div">
	<label for="preis">Preis</label>
	<input type="number" id="number" name="preis" value="<?= $seminar->getPreis() ?>" required>
</div>
<div>
	<label for="kategorien_id">Kategorien ID</label>
	<input type="text" id="kategorien_id" name="kategorien_id" value="<?= $seminar->getKategorien_Id() ?>" readonly>
</div>
<button type="submit">Update</button>
