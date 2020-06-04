<?php
$klassen = array(
        $student  = array(
        "voornaam" => "Jan",
        "achternaam" => "Janssen",
        "klas" => "9A",
        "Leeftijd" => 17,
        "Woonplaats" => "Amstelveen"
        ));
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <?php

    foreach ($klassen as $student => $value) {
        echo $key.$value."<br>";
    }

    ?>
    
</body>
</html>