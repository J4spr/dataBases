<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="">
    <title>Document</title>
</head>
<body>
<?php
include "connect.php";
echo "<h1>Tabel aanpassen</h1>";


if (isset($_POST['veranderen'])) {
    $volgnummer = $_POST['volgnummer'];
    $naam = $_POST['naam'];
    $voornaam = $_POST['voornaam'];
    $straat = $_POST['straat'];
    $postcode = $_POST['postcode'];
    $sql = "UPDATE tblgegevens SET naam = '" . $naam . "', voornaam = '" . $voornaam . "', klas = '" . $klas . "', straat = '" . $straat . "', postcode= '" . $postcode . "','
     WHERE volgnummer = '" . $volgnummer;
    print $sql;

    if ($_SESSION['mysqli']->query($sql)) {
        echo "record succesvol bijgewerkt!";
    } else {
        echo "error record wijzigen!" . $mysqli->error;
    }
    print "<br><a href='index.php'>Ga terug naar de lijst</a>";
} else {

    $sql = "SELECT * FROM tblgegevens WHERE volgnummer=" . $_GET["teveranderen"];
    $resultaat = $mysqli->query($sql);
    $row = $resultaat->fetch_assoc();


    echo '
        <table>
            <form action="change.php" method="post">
                <tr><td>volgnummer: </td><td><input type="hidden" name="volgnummer" value="' . $row["volgnummer"] . '">' . $row["volgnummer"] . '</td></tr>
                <tr><td>naam: </td><td><input type="text" name="naam" value="' . $row["naam"] . '"></td></tr>
                <tr><td>voornaam: </td><td><input type="text" name="voornaam" value="' . $row["voornaam"] . '"></td></tr>
                <tr><td>straat: </td><td><input type="text" name="straat" value="' . $row["straat"] . '"></td></tr>
                <tr><td>postcode: </td><td><input type="text" name="postcode" value="' . $row["postcode"] . '"></td></tr>
                <tr><td colspan=2><input type="submit" name="veranderen" value="veranderen"></td></tr>
            </form>
        </table>';
}
$mysqli->close();
?>
</body>
</html>