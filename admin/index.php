<?php
#index.php admin
session_start();
require_once "./include/datenbank.php";
require_once "./include/functions.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'admin_login';
}

switch ($action) {
	case 'home':
	$action = 'index';
	break;	
	#----------------------------------------------------------
	#----Seminar----#
	case 'seminar_insert': # done
	$seminar = new Seminar();
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$seminar = new Seminar($_POST);
		$seminar->insert($db);
		set_message('Seminar wurde erfolgreich eingefügt');
		redirect("index.php?action=seminar_selectAll");
	}
	break;
	
	case 'seminar_update': # done
	$seminar = new Seminar();
	$result = $seminar->select($db,$_GET['id']);
	$seminar = new Seminar($result);
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$seminar = new Seminar(cleanAll($_POST));
		$seminar->update($db, $_GET['id']);
		set_message("Seminar wurde erfolgreich editiert");
		redirect("index.php?action=seminar_selectAll");
	}
	break;
	
	case 'seminar_delete': # done
	$seminar = new Seminar();
	$result = $seminar->select($db,$_GET['id']);
	$seminar = new Seminar($result);
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$seminar = new Seminar(cleanAll($_POST));
		$seminar->delete($db, $_GET['id']);
		set_message("Seminar wurde erfolgreich gelöscht");
		redirect("index.php?action=seminar_selectAll");
	}
	break;
	
	case 'seminar_select': # done
	$seminar = new Seminar();
	$result = $seminar->select($db,$_GET['id']);
	$seminar = new Seminar($result);
	set_message('Seminar in der Einzelsicht geöffnet');
	break;
	
	case 'seminar_selectAll': # done
	$seminar = new Seminar();
	$result = $seminar->selectAll($db);
	break;	
	#----------------------------------------------------------
	#----Termin----#
	case 'termin_insert': # done
	$termin = new Termin();
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$termin = new Termin($_POST);
		$termin->insert($db);
		set_message('Termin wurde erfolgreich eingefügt');
		redirect("index.php?action=termin_selectAll");
	}
	break;
	
	case 'termin_update': # done
	$termin = new Termin();
	$result = $termin->select($db,$_GET['id']);
	$termin = new Termin($result);
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$termin = new Termin(cleanAll($_POST));
		$termin->update($db, $_GET['id']);
		set_message("Termin wurde erfolgreich editiert");
		redirect("index.php?action=termin_selectAll");
	}
	break;
	
	case 'termin_delete': # done
	$termin = new Termin();
	$result = $termin->select($db,$_GET['id']);
	$termin = new Termin($result);
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$termin = new Termin(cleanAll($_POST));
		$termin->delete($db, $_GET['id']);
		set_message("Termin wurde erfolgreich gelöscht");
		redirect("index.php?action=termin_selectAll");
	}
	break;
	
	case 'termin_select': # done
	$termin = New Termin();
	$result = $termin->select($db,$_GET['id']);
	$termin = new Termin($result);
	set_message('Termin in der Einzelsicht geöffnet');
	break;
	
    case 'termin_selectAll': # done
	$termin = new Termin();
	$result = $termin->selectAll($db);
	break;	
	#----------------------------------------------------------
	#----Standort----#
	case 'standort_insert': # done
	$standort = new Standort();
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$standort = new Standort($_POST);
		$standort->insert($db);
		set_message('Standort wurde erfolgreich hinzugefügt');
		redirect("index.php?action=standort_selectAll");
	}
	break;
	
	case 'standort_update': # done
	$standort = new Standort();
	$result = $standort->select($db,$_GET['id']);
	$standort = new Standort($result);
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$standort = new Standort(cleanAll($_POST));
		$standort->update($db, $_GET['id']);
		set_message("Standort wurde erfolgreich editiert");
		redirect("index.php?action=standort_selectAll");
	}
	break;
	
	case 'standort_delete': # done
	$standort = new Standort();
	$result = $standort->select($db,$_GET['id']);
	$standort = new Standort($result);
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$standort = new Standort(cleanAll($_POST));
		$standort->delete($db, $_GET['id']);
		set_message("Standort wurde erfolgreich gelöscht");
		redirect("index.php?action=standort_selectAll");
	}
	break;
	
	case 'standort_select': # done
		$standort = new Standort();
		$result = $standort->select($db,$_GET['id']);
		$standort = new Standort($result);
		set_message('Standort in der Einzelsicht geöffnet');
	break;
	
    case 'standort_selectAll': # done
        $standort = new Standort();
        $result = $standort->selectAll($db);
    break;	
	#----------------------------------------------------------
	#----Kategorien----#
	case 'kategorien_insert': # done
	$kategorien = new Kategorie();
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$kategorien = new Kategorie($_POST);
		$kategorien->insert($db);
		set_message('Kategorie wurde erfolgreich hinzugefügt');
		redirect("index.php?action=kategorien_selectAll");
	}
	break;
	
	case 'kategorien_update': # done
	$kategorien = new Kategorie();
	$result = $kategorien->select($db,$_GET['id']);
	$kategorien = new Kategorie($result);
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$kategorien = new Kategorie(cleanAll($_POST));
		$kategorien->update($db, $_GET['id']);
		set_message("Kategorie wurde erfolgreich editiert");
		redirect("index.php?action=kategorien_selectAll");
	}
	break;
	
	case 'kategorien_delete': # done
	$kategorien = new Kategorie();
	$result = $kategorien->select($db,$_GET['id']);
	$kategorien = new Kategorie($result);
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$kategorien = new Kategorie(cleanAll($_POST));
		$kategorien->delete($db, $_GET['id']);
		set_message("Kategorie wurde erfolgreich gelöscht");
		redirect("index.php?action=kategorien_selectAll");
	}
	break;
	
	case 'kategorien_select': # done
		$kategorien = new Kategorie();
		$result = $kategorien->select($db,$_GET['id']);
		$kategorien = new Kategorie($result);
		set_message('Kategorie in der Einzelsicht geöffnet');
	break;
	
	case 'kategorien_selectAll': # done
        $kategorien = new Kategorie();
        $result = $kategorien->selectAll($db);
    break;	
	#----------------------------------------------------------
	#----Personen-Studenten----#
	case 'personen_insert': # done
	$personen = new Person();
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$personen = new Person($_POST);
		$personen->insert($db);
		set_message('Person wurde erfolgreich hinzugefügt');
		redirect("index.php?action=personen_selectAll");
	}
	break;
	
	case 'personen_update': # done
	$personen = new Person();
	$result = $personen->select($db,$_GET['id']);
	$personen = new Person($result);
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$personen = new Person(cleanAll($_POST));
		$personen->update($db, $_GET['id']);
		set_message("Person wurde erfolgreich editiert");
		redirect("index.php?action=personen_selectAll");
	}
	break;
	
	case 'personen_delete': # done
	$personen = new Person();
	$result = $personen->select($db,$_GET['id']);
	$personen = new Person($result);
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$personen = new Person(cleanAll($_POST));
		$personen->delete($db, $_GET['id']);
		set_message("Person wurde erfolgreich gelöscht<br>");
		redirect("index.php?action=personen_selectAll");
	}
	break;
	
    case 'personen_select': # done
		$personen = new Person();
		$result = $personen->select($db,$_GET['id']);
		$personen = New Person($result);
		set_message('Person in der Einzelsicht geöffnet');
	break;
	
	case 'personen_selectAll': # done
		$personen = new Person();
		$result = $personen->selectAll($db);
	break;
	#----------------------------------------------------------
	#----Admin-Login----#
	case 'admin_login':
	if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit']))
	{
		if (!empty($_POST['login']) && !empty($_POST['password']))
		{
			$login = clean($_POST['login']);
			$password = clean($_POST['password']);
			#check password
			$sql = "SELECT * FROM admins WHERE login = :login";
			$daten = [
				'login' => $login
			];
			$stmt = $db->prepare($sql);
			$stmt->execute($daten);
			$result = $stmt->fetch();
			# Password überprüfung mit password_verify
			if ($result) {
			if (password_verify($password, $result['password']))
				{
					$_SESSION['id'] = $result['id'];
					eingeloggt($result['id']);
					set_message('Willkommen Admin');
					redirect('index.php?action=home');
					} else {
						set_error('Falsches Password und/oder falscher login!'); # Password
					}
				} else {
					set_error('Benutzer oder Password nicht gefunden!'); #Benutzer/login
				}
			} else {
				set_error('Alle Felder müssen ausgefüllt werden');
			}
		} else {
			set_message('Bitte füllen Sie alle Felder aus!');
		}
	break;
	#----Admin-Logout----#
    case 'logout':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            unset($_SESSION['id']);
			set_message('Sie haben sich erfolgreich ausgeloggt');
            redirect('index.php?action=admin_login');
			session_destroy();
        }
    break;
	
	default:
	$action = 'index';
}

require_once "views/layout.php";
?>