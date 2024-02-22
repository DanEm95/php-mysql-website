<?php
function redirect(string $url) { # leitet auf eine angegebene seite 
	header("Location: $url");
	exit;
}

function set_error($message) { # gibt eine error message aus siehe layout.php
    $_SESSION['errors'][] = $message;
}

function cleanAll($array) {
	$daten = [];

	foreach ($array as $key => $value) { # entfernt die keys aus dem array 
		$daten[$key] = clean($value);
	}
	return $daten;
}

function set_message($message) { # gibt eine Nachricht in der Session aus siehe layout.php
    $_SESSION['messages'][] = $message;
}


function eingeloggt($user_id) {
	# Check ob session ID angegeben.
	if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
		# Check ob die user ID mit der session ID übereinstimmt.
		if ($_SESSION['id'] == $user_id) {
			return true;
		}
	}
	return false;
}


function clean($param) { #entfernt jegliche <> <-- tags aus dem array und ersetzt diese
	return htmlspecialchars(strip_tags(trim($param)));
}

function richtig(string $param) {
	return ucwords(strtolower($param));
}

# autoload lädt automatisch alle klassen aus dem models Ordner reagiert auf new
function autoloader(string $param)
{
    if (file_exists("models/" . $param . ".php")) {
        require_once "models/" . $param . ".php";
    }
}

spl_autoload_register('autoloader');
?>
