<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
        header("location:login.php");
        exit;
}
?>

Gratuliere! Du bist jetzt Eingeloggt. 
<a href="logout.php">Klicke hier</a> um dich auszuloggen.<br>

Um in das admin Panel zu gelangen. <a href="seminare.php">Klicke hier</a>
