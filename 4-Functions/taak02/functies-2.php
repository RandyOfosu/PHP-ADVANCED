<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reken uit!</title>
</head>
<body>
<?php 

function rekenUit(int $nummer1, int $nummer2, int $nummer3){
    echo $nummer1 + $nummer2 + $nummer3;
}
    echo "Als ik de getallen 4, 2 en 9 bij elkaar optel, is de uitkomst "; 
    echo rekenUit(4,2,9);
    echo "<br>";
    echo "Als ik de getallen 1, 2 en 3 bij elkaar optel, is de uitkomst "; 
    echo rekenUit(1,2,3);
    echo "<br>";
    echo "Als ik de getallen 40, 28 en 91 bij elkaar optel, is de uitkomst "; 
    echo rekenUit(40,28,91);
?>
</body>
</html>


