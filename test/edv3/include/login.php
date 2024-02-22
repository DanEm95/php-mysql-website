<?php
session_start();
require "datenbank.php";

try {
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $passwort);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
   echo "Connection failed: " . $e->getMessage();
}

if (isset($_POST['login'])) {
   $email = $_POST['email'];
   $passwort = $_POST['passwort'];

   $stmt = $conn->prepare("SELECT * FROM studenten WHERE email = :email AND passwort = :passwort");
   $stmt->bindParam(':email', $email);
   $stmt->bindParam(':passwort', $passwort);
   $stmt->execute();

   if ($stmt->rowCount() > 0) {
       $_SESSION['loggedin'] = true;
       $_SESSION['email'] = $email;
       header("Location: ../student_login.php");
   } else {
       echo "<script>alert('Email or Password is incorrect');</script>";
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
</head>
<body>
   <h1>Login</h1>
   <form method="post" action="login.php">
       <label for="email">Email:</label>
       <input type="email" id="email" name="email" required>
       <br>
       <label for="passwort">Password:</label>
       <input type="password" id="passwort" name="passwort" required>
       <br>
       <input type="submit" name="login" value="Login">
	   <input type="button" value="Back to home" onclick="window.location='../index.php'">
   </form>
</body>
</html>
