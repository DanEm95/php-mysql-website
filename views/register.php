<div class="registercontainer">
<form id="form" action="" method="post">
   <p id="form-title">Registrieren</p>
   
   	<div id="input-container">
	<select type="anrede" id="anrede" name="anrede" required>
		<option value="">Bitte auswählen</option>
		<option value="mr">Herr</option>
		<option value="mrs">Frau</option>
	</select>
  
	  <span>
		<svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
			<path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M16 19h4c.6 0 1-.4 1-1v-1a3 3 0 0 0-3-3h-2m-2.2-4A3 3 0 0 0 19 8a3 3 0 0 0-5.2-2M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
		</svg>
	  </span>
  </div>
   
	<div id="input-container">
	  <input type="text" id="vorname" name="vorname" placeholder="Vorname" autocomplete="off" value="<?php echo isset($_POST['vorname']) ? $_POST['vorname'] : ''; ?>" required><br>
	  <span>
		<svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
			<path fill-rule="evenodd" d="M17.4 3c.3 0 .6.1.7.3l2.6 2.6c.4.3.4 1 0 1.4l-2.5 2.5-4-4 2.5-2.5c.2-.2.5-.3.7-.3Zm-4.6 4.2-9.5 9.5a1 1 0 0 0 0 1.4l2.6 2.6c.3.4 1 .4 1.4 0l9.5-9.5-4-4ZM6 6c.6 0 1 .4 1 1v1h1a1 1 0 0 1 0 2H7v1a1 1 0 1 1-2 0v-1H4a1 1 0 0 1 0-2h1V7c0-.6.4-1 1-1Zm9 9c.6 0 1 .4 1 1v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 1 1 0-2h1v-1c0-.6.4-1 1-1Z" clip-rule="evenodd"/>
			<path d="M19 13h-2v2h2v-2ZM13 3h-2v2h2V3Zm-2 2H9v2h2V5ZM9 3H7v2h2V3Zm12 8h-2v2h2v-2Zm0 4h-2v2h2v-2Z"/>
		</svg>
  </div>
  
  <div id="input-container">
	  <input type="text" id="nachname" name="nachname" placeholder="Nachname" autocomplete="off" value="<?php echo isset($_POST['nachname']) ? $_POST['nachname'] : ''; ?>" required>

	  <span>
		<svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
			<path fill-rule="evenodd" d="M17.4 3c.3 0 .6.1.7.3l2.6 2.6c.4.3.4 1 0 1.4l-2.5 2.5-4-4 2.5-2.5c.2-.2.5-.3.7-.3Zm-4.6 4.2-9.5 9.5a1 1 0 0 0 0 1.4l2.6 2.6c.3.4 1 .4 1.4 0l9.5-9.5-4-4ZM6 6c.6 0 1 .4 1 1v1h1a1 1 0 0 1 0 2H7v1a1 1 0 1 1-2 0v-1H4a1 1 0 0 1 0-2h1V7c0-.6.4-1 1-1Zm9 9c.6 0 1 .4 1 1v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 1 1 0-2h1v-1c0-.6.4-1 1-1Z" clip-rule="evenodd"/>
			<path d="M19 13h-2v2h2v-2ZM13 3h-2v2h2V3Zm-2 2H9v2h2V5ZM9 3H7v2h2V3Zm12 8h-2v2h2v-2Zm0 4h-2v2h2v-2Z"/>
		</svg>
	  </span>
	</div>
	
	<div id="input-container">
	  <input type="text" id="strasse" name="strasse" placeholder="Strasse" autocomplete="off" value="<?php echo isset($_POST['strasse']) ? $_POST['strasse'] : ''; ?>" required>

	  <span>
		<svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
			<path fill-rule="evenodd" d="M17.4 3c.3 0 .6.1.7.3l2.6 2.6c.4.3.4 1 0 1.4l-2.5 2.5-4-4 2.5-2.5c.2-.2.5-.3.7-.3Zm-4.6 4.2-9.5 9.5a1 1 0 0 0 0 1.4l2.6 2.6c.3.4 1 .4 1.4 0l9.5-9.5-4-4ZM6 6c.6 0 1 .4 1 1v1h1a1 1 0 0 1 0 2H7v1a1 1 0 1 1-2 0v-1H4a1 1 0 0 1 0-2h1V7c0-.6.4-1 1-1Zm9 9c.6 0 1 .4 1 1v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 1 1 0-2h1v-1c0-.6.4-1 1-1Z" clip-rule="evenodd"/>
			<path d="M19 13h-2v2h2v-2ZM13 3h-2v2h2V3Zm-2 2H9v2h2V5ZM9 3H7v2h2V3Zm12 8h-2v2h2v-2Zm0 4h-2v2h2v-2Z"/>
		</svg>
	  </span>
	</div>
	
	<div id="input-container">
	  <input type="text" id="hausnr" name="hausnr" placeholder="Hausnummer" autocomplete="off" value="<?php echo isset($_POST['hausnr']) ? $_POST['hausnr'] : ''; ?>" required>

	  <span>
		<svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
			<path fill-rule="evenodd" d="M17.4 3c.3 0 .6.1.7.3l2.6 2.6c.4.3.4 1 0 1.4l-2.5 2.5-4-4 2.5-2.5c.2-.2.5-.3.7-.3Zm-4.6 4.2-9.5 9.5a1 1 0 0 0 0 1.4l2.6 2.6c.3.4 1 .4 1.4 0l9.5-9.5-4-4ZM6 6c.6 0 1 .4 1 1v1h1a1 1 0 0 1 0 2H7v1a1 1 0 1 1-2 0v-1H4a1 1 0 0 1 0-2h1V7c0-.6.4-1 1-1Zm9 9c.6 0 1 .4 1 1v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 1 1 0-2h1v-1c0-.6.4-1 1-1Z" clip-rule="evenodd"/>
			<path d="M19 13h-2v2h2v-2ZM13 3h-2v2h2V3Zm-2 2H9v2h2V5ZM9 3H7v2h2V3Zm12 8h-2v2h2v-2Zm0 4h-2v2h2v-2Z"/>
		</svg>
	  </span>
	</div>
	
	<div id="input-container">
	  <input type="text" id="ort" name="ort" placeholder="Ort" autocomplete="off" value="<?php echo isset($_POST['ort']) ? $_POST['ort'] : ''; ?>" required>

	  <span>
		<svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
			<path fill-rule="evenodd" d="M17.4 3c.3 0 .6.1.7.3l2.6 2.6c.4.3.4 1 0 1.4l-2.5 2.5-4-4 2.5-2.5c.2-.2.5-.3.7-.3Zm-4.6 4.2-9.5 9.5a1 1 0 0 0 0 1.4l2.6 2.6c.3.4 1 .4 1.4 0l9.5-9.5-4-4ZM6 6c.6 0 1 .4 1 1v1h1a1 1 0 0 1 0 2H7v1a1 1 0 1 1-2 0v-1H4a1 1 0 0 1 0-2h1V7c0-.6.4-1 1-1Zm9 9c.6 0 1 .4 1 1v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 1 1 0-2h1v-1c0-.6.4-1 1-1Z" clip-rule="evenodd"/>
			<path d="M19 13h-2v2h2v-2ZM13 3h-2v2h2V3Zm-2 2H9v2h2V5ZM9 3H7v2h2V3Zm12 8h-2v2h2v-2Zm0 4h-2v2h2v-2Z"/>
		</svg>
	  </span>
	</div>
	
	<div id="input-container">
	  <input type="text" id="plz" name="plz" placeholder="Postleitzahl" autocomplete="off" value="<?php echo isset($_POST['plz']) ? $_POST['plz'] : ''; ?>" required>

	  <span>
		<svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
			<path fill-rule="evenodd" d="M17.4 3c.3 0 .6.1.7.3l2.6 2.6c.4.3.4 1 0 1.4l-2.5 2.5-4-4 2.5-2.5c.2-.2.5-.3.7-.3Zm-4.6 4.2-9.5 9.5a1 1 0 0 0 0 1.4l2.6 2.6c.3.4 1 .4 1.4 0l9.5-9.5-4-4ZM6 6c.6 0 1 .4 1 1v1h1a1 1 0 0 1 0 2H7v1a1 1 0 1 1-2 0v-1H4a1 1 0 0 1 0-2h1V7c0-.6.4-1 1-1Zm9 9c.6 0 1 .4 1 1v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 1 1 0-2h1v-1c0-.6.4-1 1-1Z" clip-rule="evenodd"/>
			<path d="M19 13h-2v2h2v-2ZM13 3h-2v2h2V3Zm-2 2H9v2h2V5ZM9 3H7v2h2V3Zm12 8h-2v2h2v-2Zm0 4h-2v2h2v-2Z"/>
		</svg>
	  </span>
	</div>
	
	<div id="input-container">
	  <input type="email" id="email" name="email" placeholder="Email" autocomplete="off" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" required>

	  <span>
		<svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		  <path d="M15 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
		</svg>
	  </span>
	</div>
	
	<div id="input-container">
	  <input type="password" id="password" name="password" placeholder="Password" autocomplete="off" value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>" required>

	  <span>
		<svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
			<path fill-rule="evenodd" d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7c0-1.1.9-2 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6c.6 0 1 .4 1 1v3a1 1 0 1 1-2 0v-3c0-.6.4-1 1-1Z" clip-rule="evenodd"/>
		</svg>
	  </span>
	</div>
	
	 <button name="submit" id="submit" type="submit">
	Registrieren
  </button>

  <p id="signup-link">
	Bereits registriert?
	<a href="index.php?action=login">Einloggen</a>
  </p>
</form>
</div>