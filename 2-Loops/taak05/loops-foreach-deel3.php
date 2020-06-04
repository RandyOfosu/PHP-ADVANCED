<?php
$klassen = array(
        $student  = array(
        "voornaam" => "Jan",
        "achternaam" => "Janssen",
        "klas" => "9A",
        "Leeftijd" => 17,
        "Woonplaats" => "Amstelveen"
        )
    );
    // foreach ($student as $key => $value) {
    //     echo $key." : ".$value."<br>";
    // };
?>


<!DOCTYPE html>
<html lang="en">
<body>
<?php    
foreach ($student as $key => $value) {
        echo "<table>
        <td>$key</td>
        <td>$value</td>
        </table>";
    };
?>   
</body>
</html>