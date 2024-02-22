<div class="logincontainer">
<form id="form" action="" method="post">
   <p id="form-title">Einloggen in deinen Account</p>
	<div id="input-container">
	  <input name="email" autocomplete="off" placeholder="Email eingeben" type="email">
	  <span>
		<svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		  <path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
		</svg>
	  </span>
  </div>
  <div id="input-container">
	  <input name="password" autocomplete="off" placeholder="Password eingeben" type="password">

	  <span>
		<svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
			<path fill-rule="evenodd" d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7c0-1.1.9-2 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6c.6 0 1 .4 1 1v3a1 1 0 1 1-2 0v-3c0-.6.4-1 1-1Z" clip-rule="evenodd"/>
		</svg>
	  </span>
	</div>
	 <button name="submit" id="submit" type="submit">
	Einloggen
  </button>

  <p id="signup-link">
	Kein Account?
	<a href="index.php?action=register">Registrieren</a>
  </p>
</form>
</div>