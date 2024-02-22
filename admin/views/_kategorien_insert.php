<input type="hidden" name="id" value="<?= $kategorien->getId() ?>">
<div>
	<label for="kategorien">Kategorie</label>
	<input type="text" id="kategorien" name="kategorien" value="<?= $kategorien->getKategorien() ?>" required>
</div>
<button type="submit">Insert</button>
