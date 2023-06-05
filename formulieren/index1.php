<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

<?php
if (isset($_POST["knop"])) {
    print "Je gaf <b>" . $_POST["voornaam"] . "</b> op als voornaam en als achternaam gaf je " . $_POST["achternaam"] . "<b>.
<br>Geslacht: <br>" . $_POST["gender"] . "</b>></br>Vervoer:";
    if (isset($_POST["vervoer1"])) {
        print "<br>" . $_POST["vervoer1"];
    }
    if (isset($_POST["vervoer2"])) {
        print "<br>" . $_POST["vervoer2"];
    }
    if (isset($_POST["vervoer3"])) {
        print "<br>" . $_POST["vervoer3"];
    }
} else {
    echo '<table>
<form method="post" action="index.php">
<tr><td>Voornaam</td><td><input type="text" name="voornaam"></td></tr>
<tr><td>Achternaam</td><td><input type="text" name="achternaam"></td></tr>
<tr><td>Gender</td>
<td>
<input type="radio" name="gender" value="m">man
<input type="radio" name="gender" value="v">vrouw
<input type="radio" name="gender" value="x">in de war
</td></tr>
<tr><td>Vervoer</td>
<td>
<input type="checkbox" name="vervoer1" value="te voet">Ik kom te voet.<br>
<input type="checkbox" name="vervoer2" value="fiets">Ik kom met de fiets.<br>
<input type="checkbox" name="vervoer3" value="auto">Ik kom met de bus.<br>
</td>
</tr>
<tr><td><input type="submit" name="knop" value="Doorsturen!"></td></tr>
</form>
</table>
';
}
?>
</body>
</html>

