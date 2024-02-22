<div>
	<label for="id">ID</label>
	<input type="text" id="id" name="id" value="<?= $standort->getId() ?>" readonly>
</div>
<div>
	<label for="standort">Standort</label>
	<input type="text" id="standort" name="standort" value="<?= $standort->getStandort() ?>" required>
</div>
<button type="submit">Update</button>
