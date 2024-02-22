<div>
	<label for="id">ID</label>
	<input type="text" id="id" name="id" value="<?= $kategorien->getId() ?>" readonly>
</div>
<div>
	<label for="kategorien">Kategorie</label>
	<input type="text" id="kategorien" name="kategorien" value="<?= $kategorien->getKategorien() ?>" required>
</div>
<button type="submit">Update</button>
