<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions PHP</title>
</head>
<body>
<?php


function schrijfKleur($color){
    echo "<p style='color: $color';>Deze tekst is nu een andere kleur</p>";
}
    schrijfKleur("red");
    schrijfKleur("blue");
    schrijfKleur("green");
    schrijfKleur("#0070FF");
?>   

<p >
</body>
</html>