<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../../../Users/JasperVerbruggen/Documents/Databases/php/maaltafels/stijl.css">
    <title></title>
</head>
<body>
<?php
print "<table>";;
for ($y = 0; $y <= 10; $y++) {
    print "<tr>";
    for ($x = 0; $x <= 10; $x++) {
        print "<td>";
        print ($x * $y);
        print "</td>";
    }
    print "</tr>";
}

print "</table>";

?>

</body>
</html>