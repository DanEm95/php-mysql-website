<?php
#index.php meta
session_start(); # startet die Session steht nur ein mal in der Index
require_once "include/datenbank.php"; # Verbindung zur Datenbank herstellen
require_once "include/functions.php"; # Verbindung zu eigenen Funktionen wird hersgestellt.


if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'index';
}

switch ($action) { 		#controller mit switch case der alles steuert
    #----Registrierung----#
	case 'register':
		# registrierungsprozess im controller
        if (!empty($_POST['anrede']) && !empty($_POST['vorname']) && !empty($_POST['nachname'])) 
		{
            $person = new Person($_POST);
			$person->insert($db);
			set_message('Sie haben sich erfolgreich Registriert!');
			redirect("index.php?action=login");
        } 
		else 
		{
            set_message("Bitte Formular ausfüllen!");
        }
	break;
	#----Login----#
	case 'login':
		if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) 
		{
			if (!empty($_POST['email']) && !empty($_POST['password'])) 
			{
				$email = clean($_POST['email']);
				$password = clean($_POST['password']);
				$sql = "SELECT * FROM personen WHERE email = :email";
				$daten = [
					'email' => $email
				];
				$stmt = $db->prepare($sql);
				$stmt->execute($daten);
				$result = $stmt->fetch();
				if ($result) {
					if (password_verify($password, $result['password'])) {
						$_SESSION['id'] = $result['id'];
						eingeloggt($result['id']);
						set_message('Willkommen ' . $result['vorname'] . ' ' . $result['nachname']);
						redirect('index.php?action=home');
					} else {
						set_error('Falsches Password!');
					}
				} else {
					set_error('Benutzer nicht gefunden!');
				}
			} else {
				set_error('Alle Felder müssen ausgefüllt werden');
			}
		} else {
			set_message('Bitte füllen Sie alle Felder aus!');
		}
	break;
	#----Logout----#
	case 'logout':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            unset($_SESSION['id']);
			set_message('Sie haben sich erfolgreich ausgeloggt');
            redirect('index.php?action=login');
			session_destroy();
        }
	break;
	#----------------------------------------------------------#
	#----Seminar----#
	case 'seminar': # done
	$seminar = new Seminar();
	$result = $seminar->selectAll($db);
	break;
	#----Standort----#
	case 'standort': # done
	$standort = new Standort();
	$result = $standort->selectAll($db);
	break;
	#----Termin----#
	case 'termin': # done
	$termin = new Termin();
	$result = $termin->selectAll($db);
	break;
	#----------------------------------------------------------#
	#----Meine Daten----#
    case 'meine_daten':
	$personen = new Person();
	$result = $personen->select($db, $_SESSION['id']);
	$personen = New Person($result);
	if(isset($_POST['password']))
	{
		if(checkPasswordExists($db, $_POST['password'], $_POST['id'])) # Funktion in functions.php
		{# TODO
			set_message("Dieses Passwort existiert bereits");
		}
		else
		{
			$personen = new Person($_POST);
			$personen->updatePw($db,$_SESSION['id']); # Funktion in functions.php
			set_message('Sie haben erfolgreich Ihr Password geändert');
			redirect('index.php?action=meine_daten');
		}
	}
	break;
	#----Meine Termine TODO----#
    case 'meine_termine':
	#$person = New Person();
	#$result = $person->SelectTermine($db, $_SESSION['id']);
	break;
		
	case 'agb': # leitet zur agb.php weiter
	break;
	
    case 'kontakt': # leitet zur kontakt.php weiter
	break;
	
	case 'impressum': # leitet zur impressum.php weiter
	break;
	
	case 'index':
	break;
	
	case 'home':
	$action = 'index';
	break;
	
	default:
	$action = 'index';
}
require_once "views/layout.php";

?>
