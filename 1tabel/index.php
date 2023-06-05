<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-with, initial-scal=1">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
include "connect.php";

$sql = "SELECT * FROM tblgegevens";
$resultaat = $mysqli->query($sql);


        echo "<table>";
        while ($row = $resultaat->fetch_assoc()) {
            echo "
                <tr>
                    <td>" . $row['volgnummer'] . "</td>
                    <td>" . $row['naam'] . "</td>
                    <td>" . $row['voornaam'] . "</td>
                    <td>" . $row['klas'] . "</td>
                    <td>" . $row['straat'] . "</td>
                    <td>" . $row['postcode'] . "</td>
                    <td>" . $row['plaats'] . "</td>
                    <td><a href='wis.php?tewissen=" . $row['volgnummer'] . "'>Wissen</a></td>
                    <td><a href='wijzig.php?teveranderen=" . $row['volgnummer'] . "'>Wijzigen</a></td>
                </tr>";
        }
        echo "</table>";

print "<a href='toevoegen.php'>Voeg een record toe</a>";


?>
</html>
