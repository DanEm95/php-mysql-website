<?php require_once "./views/head.php"; ?>


<?php
	if(isset($_SESSION['id']) && eingeloggt($_SESSION['id']))
	{
		require_once "../admin/views/navi_admin.php";
	}
	else
	{
		require_once "views/navi_logged_out.php";
	}
?>

<div class="message">
<?php
if (isset($_SESSION['messages'])) {
    foreach ($_SESSION['messages'] as $message) {
		echo '<span style="color: green;">' . $message . '</span>';
    }
	unset($_SESSION['messages']);
}
?>
</div>

<div class="error">
<?php
if (isset($_SESSION['errors'])) {
    foreach ($_SESSION['errors'] as $error) {
		echo '<span style="color: #FB5012;">' . $error . '</span>';
    }
	unset($_SESSION['errors']);
}
?>
</div>

<section>
<?php require_once "views/" .$action . '.php'; ?>
</section>
</body>
</html>
