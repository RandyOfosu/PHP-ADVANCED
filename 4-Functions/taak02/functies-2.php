<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reken uit!</title>
</head>
<body>
<?php 

function rekenUit($nummer1 = 0, $nummer2 = 0, $nummer3 = 0){
    $totaal = $nummer1 + $nummer2 + $nummer3;
    echo "Als ik de getallen $nummer1, $nummer2 en $nummer3 bij elkaar optel, is de uitkomst $totaal<br>";
}  
rekenUit(5,2,19);
rekenUit(1,4,3);
rekenUit(40,28,125);
?>
</body>
</html>


