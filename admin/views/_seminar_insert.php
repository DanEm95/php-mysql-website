<input type="hidden" name="id" value="<?= $seminar->getId() ?>">
<div>
	<label for="titel">Titel</label>
	<input type="text" name="titel" id="titel" required>
</div>
<div>
	<label for="beschreibung">Beschreibung</label>
	<textarea name="beschreibung" id="beschreibung" rows="3" required></textarea>
</div>
<div">
	<label for="preis">Preis</label>
	<input type="number" name="preis" id="preis" required>
</div>
<div>
	<label for="kategorien_id">Kategorien ID</label>
	<input type="text" name="kategorien_id" id="kategorien_id">
</div>
<button type="submit">Insert</button>
