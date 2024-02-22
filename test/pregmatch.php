<?php>
$muster_login = '/^[a-zA-ZüöäßÄÖÜ]{6,20}$/';

if(!preg_match($muster_login, $_POST['login']))
{
	echo "Loginname muss aus klein/groß Buchstaben und mindestens 6 zeichen lang sein";
}
?>