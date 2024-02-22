<?php
    session_start();
	#include 'include/functions.php';
?>


<?php

    if (isset($_SESSION["success_message"])) {
        echo "<script>
            function showMessage() {
                alert('" . $_SESSION["success_message"] . "');
            }
        </script>";
        // Unset the session variable to prevent displaying it again on future page loads
        unset($_SESSION["success_message"]);
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>EDV-Schule</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
    <style>
    body, html {
      height: 100%;
      font-family: "Inconsolata", sans-serif;
    }

    .bgimg {
      background-position: center;
      background-size: cover;
      background-image: url("https://www.w3schools.com/w3images/streetart2.jpg");
      min-height: 75%;
    }

    .courses {
      display: none;
    }
    </style>
  </head>
<body onload="showMessage()">

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block w3-black">ABOUT</a>
    </div>
    <div class="w3-col s3">
      <a href="#courses" class="w3-button w3-block w3-black">COURSES</a>
    </div>
    <div class="w3-col s3">
      <a href="#where" class="w3-button w3-block w3-black">CHOOSE</a>
    </div>
  </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag">Öffnungszeiten von 08:00 Uhr bis 16:00 Uhr</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-size:90px">Die<br>EDV-Schule</span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">Maybachstraße 77, Hamburg 22761, Germany</span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ÜBER DIE EDV-SCHULE</span></h5>
    <p>Die EDV-Schule ist eine Plattform, die sich darauf konzentriert, die grundlegenden Kenntnisse im Bereich der Datenverarbeitung und Softwareentwicklung zu vermitteln.</p>
    <p>Unser Angebot richtet sich an Schüler, Studierende und professionelle, die eine fundierte Grundlage benötigen, um sich erfolgreich in der digitalen Welt zurechtzufinden.</p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>"Sometimes it is better to leave software alone, rather than trying to improve it." - Andrew Hunt und David Thomas, The Pragmatic Programmer: From Journeyman to Master</i></p>
      <p>Cheff, master_of_coding and Owner: Dan Brown</p>
    </div>
    <img src="https://www.w3schools.com/w3css/img_workshop.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
    <p><strong>Öffnungszeiten:</strong> 08:00 Uhr bis 16:00 Uhr.</p>
    <p><strong>Addresse:</strong> Maybachstraße 77, Hamburg 22761, Germany</p>
  </div>
</div>

<!-- Courses Container -->
<div class="w3-container" id="courses">
  <div class="w3-content" style="max-width:700px">
 
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">UNSERE KURSE</span></h5>
  
    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="opencourses(event, 'Php');" id="myLink">
        <div class="w3-col s6 tablink">PHP</div>
      </a>
      <a href="javascript:void(0)" onclick="opencourses(event, 'Zert');">
        <div class="w3-col s6 tablink">Zertifizierungen</div>
      </a>
    </div>

    <div id="Php" class="w3-container courses w3-padding-48 w3-card">
      <h5>PHPA ➡ Dauer 10 Tage</h5>
      <p class="w3-text-grey">Objektorientierte Programmierung mit PHP: <br>Grundlagen der PHP-Programmierung</p><br>
    
      <h5>PHPB ➡ Dauer 9 Tage</h5>
      <p class="w3-text-grey">Objektorientierte Programmierung mit PHP: <br>Webentwicklung mit PHP</p><br>
    
      <h5>PHPC ➡ Dauer 10 Tage</h5>
      <p class="w3-text-grey">Objektorientierte Programmierung mit PHP: <br>PHP & Datenbanken</p><br>
    
      <h5>PHPD ➡ Dauer 10 Tage</h5>
      <p class="w3-text-grey">Objektorientierte Programmierung mit PHP: <br>Fremdformate, Administration und Sicherheit mit PHP</p><br>
    
      <h5>PHPE ➡ Dauer 10 Tage</h5>
      <p class="w3-text-grey">Objektorientierte Programmierung mit PHP: <br>PHP-Fallstudie</p><br>
	  
	  <h5>ZEND ➡ Dauer 10 Tage</h5>
      <p class="w3-text-grey">Zend-PHP-Zertifizierung</p>
    </div>

    <div id="Zert" class="w3-container courses w3-padding-48 w3-card">
      <h5>PHPZ1 ➡ Preis 999,99💲</h5>
      <p class="w3-text-grey">〰 PHP 7 Zertifizierung, Code Certification 〰</p><br>
    
      <h5>PHPZ2 ➡ Preis 999,99💲</h5>
      <p class="w3-text-grey">〰 PHP 8 Zertifizierung, Pro 〰</p><br>
    
      <h5>PHPZ3 ➡ Preis 999,99💲</h5>
      <p class="w3-text-grey">〰 PHP-Entwickler Zertifizierung, PDO-Associate Certification 〰</p>
    </div>  
    <img src="https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExNDFtMXMwMmh6N2hpdjh3bmY3aXdyZmplZTNpNms0dXptYjZoeW1lNyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/cLkg857UN0y4ISQoTT/giphy.gif" style="width:100%;max-width:1000px;margin-top:32px;">
  </div>
</div>

<!-- Contact/Area Container -->
<div class="w3-container" id="where" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">CHOOSE YOUR DESTINY</span></h5>
    <p>Wähle den Kurs, der zu dir passt.</p>
    <img src="https://www.w3schools.com/w3images/map.jpg" class="w3-image" style="width:100%">
    <p><span class="w3-tag">FYI!</span> Zuletzt wurde das Schulkonzept optimiert, um die schulischen Leistungen der Schüler zu verbessern. Durch die Integration neuer Technologien wie Chromebooks, Virtual-Classroom-Tools und moderner Kommunikationsmittel wurde ein sicheres, anpassungsfähiges und flexibles Lernumfeld geschaffen.</p>
    <p><strong>Registriere dich und buche direkt einen Kurs.</strong></p>
    
	<form action="./include/insert.php" method="post">
			<p>
				<label  for="anrede">Anrede:
					<select id="anrede" name="anrede" required>
						<option value="Herr">Herr</option>
						<option value="Frau">Frau</option>
						<option value="none">Keine Auswahl</option>
					</select>
				</label>
			</p>

		<label for="vorname">Vorname:</label>
		<input class="w3-input w3-padding-16 w3-border" type="text" id="vorname" name="vorname" required><br>

		<label for="nachname">Nachname:</label>
		<input class="w3-input w3-padding-16 w3-border" type="text" id="nachname" name="nachname" required><br>

		<label for="email">Email:</label>
		<input class="w3-input w3-padding-16 w3-border" type="email" id="email" name="email" required><br>

		<label for="ort">Ort:</label>
		<input class="w3-input w3-padding-16 w3-border" type="text" id="ort" name="ort" required><br>

		<label for="passwort">passwort:</label>
		<input class="w3-input w3-padding-16 w3-border" type="passwort" id="passwort" name="passwort" required><br>
		

		<input class="w3-button w3-black" type="submit" value="Register">
		<p><a class="w3-button w3-black" href="./include/login.php" target="_blank">Login</a></p>

	</form>
	

	
  </div>
</div>

<!-- End page content -->
</div>

<!-- Footer. This section contains an ad for W3Schools Spaces. You can leave it to support us. -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
  <p>Die EDV-Schule ist stolz, Ihnen die besten Online-Kurse im Bereich der Datenverarbeitung und Softwareentwicklung anbieten zu können. 
  <br>Hier finden Sie unsere AGB, Impressum und Kontakt</p>
  <a class="w3-button w3-round-xxlarge w3-dark-grey w3-margin-bottom" href="./include/agb.html" target="_blank">AGB</a>
  <a class="w3-button w3-round-xxlarge w3-dark-grey w3-margin-bottom" href="./include/impressum.html" target="_blank">Impressum</a>
  <a class="w3-button w3-round-xxlarge w3-dark-grey w3-margin-bottom" href="./include/kontakt.html" target="_blank">Kontakt</a>
 <!-- Footer end. -->
 </footer>

<script>
// Tabbed courses
function opencourses(evt, coursesName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("courses");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(coursesName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>


</body>
</html>

