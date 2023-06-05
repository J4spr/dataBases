<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--link rel="stylesheet" type="text/css" href="style.css"-->
    <title>Document</title>
</head>
<body>
<?php
include "connect.php";
$sql = "SELECT volgnummer, naam, voornaam, straat, plaats, tblgegevens.postcode FROM tblgegevens, tblpostcode WHERE tblgegevens.postcode = tblpostcode.postcode order by volgnummer";
$resultaat = $mysqli->query($sql);

echo "
<form method='post' action='index.php'>
<table>";
while ($row = $resultaat->fetch_assoc()) {
    echo "
        <tr>
            <td>" . $row['volgnummer'] . "</td>
            <td>" . $row['naam'] . "</td>
            <td>" . $row['voornaam'] . "</td>
            <td>" . $row['straat'] . "</td>
            <td>" . $row['postcode'] . "</td>
            <td>" . $row['plaats'] . "</td>
            <td><a href=delete.php?tewissen=" . $row['volgnummer'] . ">wissen</a></td>
            <td><a href=change.php?teveranderen=" . $row['volgnummer'] . ">veranderen</a></td>
        </tr>";
}
echo '</<table>
</form>';
print "<a href='add.php'>voeg een record toe</a>";
?>
</body>
</html>