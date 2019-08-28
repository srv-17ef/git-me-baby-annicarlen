<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHPtest</title>
</head>
<body>

<?php
echo '<h1>Kolla, php</h1><br>';

$text = '<h2>Om nån :D</h2><br>';
echo($text);

$person = "Rickard";
$age = "30";
$size = "xxl";
$nrOfKids = 2;
$pets = "1 sköldpadda";
$trueAge = 43.5;

echo($person."<br>".$size."<br>".$nrOfKids."<br>".$pets."<br>".$trueAge);

if($trueAge > 40) {
    echo('<br>GAMLING');
}
echo "<br>Ålder? ";

switch( $age) {
    case 10:
        echo "10";
       break;
    case 20:
        echo "20";
        break;
    case 30:
        echo "30";
        break;
}
for($i=1; $i<=100; $i++){
    if($i===1){
       echo "<br>En elefant balanserade
på en liten spindel-tråd
Det tyckte han var så intressant,
så han gick och hämtade en annan elefant.";
    } else {
    echo "<br>$i elefanter balanserade
på en liten spindel-tråd
Det tyckte dom var så intressant,
så dom gick och hämtade en annan elefant.";
}}



?>

</body>
</html>