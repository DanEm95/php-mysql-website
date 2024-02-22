<?php
session_start();
require "datenbank.php";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $passwort);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $anrede = $_POST['anrede'];
    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];
    $ort = $_POST['ort'];
	$email = $_POST['email'];
	$passwort = $_POST['passwort'];
    #$passwort = password_hash($_POST['passwort'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO studenten (anrede, vorname, nachname, ort, email, passwort) VALUES (:anrede, :vorname, :nachname, :ort, :email, :passwort)";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':anrede', $anrede);
    $stmt->bindParam(':vorname', $vorname);
    $stmt->bindParam(':nachname', $nachname);
    $stmt->bindParam(':ort', $ort);
	$stmt->bindParam(':email', $email);
    $stmt->bindParam(':passwort', $passwort);

    if ($stmt->execute()) {
        $_SESSION["user_id"] = $conn->lastInsertId();
        $_SESSION["user_anrede"] = $anrede;
        $_SESSION["user_vorname"] = $vorname;
        $_SESSION["user_nachname"] = $nachname;
        $_SESSION["user_ort"] = $ort;
		$_SESSION["user_email"] = $email;
        $_SESSION["user_passwort"] = $passwort;
	
	// Set a session variable to store the success message
	$_SESSION["success_message"] = "Du hast dich erfolgreich registriert!";

	// Redirect to index.php
	header("Location: ../index.php");
		exit();
	} else {
		echo "Error: Es gibt ein Problem mit der Registrierung deines Accounts. Bitte versuche es später erneut.";
	}

    $stmt = null;
    $conn = null;
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
