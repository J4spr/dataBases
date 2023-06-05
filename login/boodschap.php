<?php
session_start();
?>
<?php
$_SESSION["username"] = $_POST["username"];
if ($_POST["username"] == "gebruiker" && $_POST["password"] =="gebruiker") {
    print "Je bent ingelogd als gebruiker";
    echo '<br></br>Klik <a href="index.php">hier</a> om naar de indexpagina te gaan';
}
elseif ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
print "Je bent ingelogd als admin";
echo '<br></br>Klik <a href="index.php">hier</a> om naar index te gaan';
}
else {
    print "ongeldige inloggegevens";
    echo '<br></br>Klik <a href="login.php">hier</a> om terug opnieuw te proberen';
}
?>
