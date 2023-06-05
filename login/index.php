<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>login screen</title>
</head>
<body>
<?php

if ($_SESSION["username"] == "gebruiker") {
    print "Je bent ingelogd als gebruiker";
    echo '<br></br>Klik <a href="index.php">hier</a> om naar de indexpagina te gaan';
    print "<br><a href='logout.php'>log uit</a>";
} elseif ($_SESSION["username"] == "admin") {
    print "Je bent ingelogd als admin.";
    echo '<br></br>Klik <a href="index.php">hier</a> om naar index te gaan';
    print "<br><a href='logout.php'>log uit</a>";
} else {
    header('Location: login.php');
}
?>
</body>
</html>