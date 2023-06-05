<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

<?php
$getal1 = rand(0, 10);
$getal2 = rand(0, 10);


if (isset($_POST["knop"])) {
    if ($_POST['antwoord'] == $_POST['getal1'] + $_POST['getal2']) {
        print $_POST['getal1'];
        print "+";
        print $_POST['getal2'];
        print " = ";
        print $_POST['getal1'] + $_POST['getal2'];
        print "<br>";
        print "Het is juist";
        echo '<form>
        <input type="submit"name="reset" value="Doorgaan">
        </form>';

    } else {
        print "Het is fout";
        echo '<form>
                <input type="submit"name="reset" value="Doorgaan">
        </form>
        ';
    }
} else {
    print "$getal1 + $getal2";

    echo '<form method="post" action="index.php">  
    <input type="text" name="antwoord">
    <input type="hidden" name="getal1" value=' . $getal1 . '>
    <input type="hidden" name="getal2" value=' . $getal2 . '>
    <input type="submit" name = "knop" value="Controleer!">
    </form>';
}


?>
</body>
</html>