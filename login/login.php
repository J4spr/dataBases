<?php
session_start();
?>

<?php
if (isset($_POST["login"])){
header('Location: boodschap.php');
}
else {
    echo '
<form method="post"action="boodschap.php">
	username: 
	<br>
	<input type="text" name="username">
	<br>
	password
	<br>
	<input type="password" name="password">
	<input type="submit" name="login">
</form>';
}
?>
