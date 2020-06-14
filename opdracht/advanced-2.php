   <?php
    $ik = array
    ('Voornaam: ' => 'Randy',
     'Achternaam ' => 'Ofosu',
     'Leeftijd: ' => '25',
     'Woonplaats: ' => 'Amsterdam',
     'Hobby: ' => 'Produceren van Muziek'
    );
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingevulde formuliertje</title>
</head>
<body>
<table>
<?php foreach ($ik as $gegevens => $value):?>
<tr>
<td><?php echo $gegevens;?></td>
<td><?php echo $value;?></td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>

<?php echo $_POST["tableDikte"];?>