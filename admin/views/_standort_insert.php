<input type="hidden" name="id" value="<?= $standort->getId() ?>">
<div>
	<label for="standort">Standort</label>
	<input type="text" id="standort" name="standort" value="<?= $standort->getStandort() ?>" required>
</div>
<button type="submit">Insert</button>
