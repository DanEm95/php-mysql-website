<div>
	<label for="id">ID</label>
	<input type="text" id="id" name="id" value="<?= $termin->getId() ?>" readonly>
</div>
<div>
	<label for="beginn">Beginn</label>
	<input type="text" id="beginn" name="beginn" value="<?= $termin->getBeginn() ?>" readonly>
</div>
<div>
	<label for="ende">Ende</label>
	<input type="text" id="ende" name="ende" value="<?= $termin->getEnde() ?>" readonly>
</div>
<div>
	<label for="seminare_id">Seminar ID</label>
	<input type="text" id="seminare_id" name="seminare_id" value="<?= $termin->getSeminare_id() ?>" required>
</div>
<div>
	<label for="standorte_id">Standorte ID</label>
	<input type="text" id="standorte_id" name="standorte_id" value="<?= $termin->getStandorte_id() ?>" required>
</div>
<div>
	<label for="raum">Raum</label>
	<input type="text" id="raum" name="raum" value="<?= $termin->getRaum() ?>" required>
</div>
<button type="submit">Update</button>
