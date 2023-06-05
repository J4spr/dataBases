<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<?php
$getal1 = 0;
$getal2 = 1;
$getal3 = $getal1 + $getal2;
print " $getal1 ";
print " $getal2 ";
print " $getal3 ";
while ($getal3 +$getal2< 1000) {
    $getal1 = $getal2;
    $getal2 = $getal3;
    $getal3 = $getal2 + $getal1;

    print " $getal3 " ;
}
?>

</body>
</html>