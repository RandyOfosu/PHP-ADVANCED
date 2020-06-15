<!-- Foreach loop met gegevens over mezelf -->
<?php
    $ik = array
    ('Voornaam: ' => 'Randy',
     'Achternaam: ' => 'Ofosu',
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

<style>
    table, td{
        border: <?php echo $_GET['tabelDikte'];?>px solid black;
        padding: <?php echo $_GET['padding'];?>px;
        border-collapse: collapse;
    }
    body {
        color: <?php echo $_GET['tekstKleur'];?>;
        background-color: <?php echo $_GET['achtergrondKleur'];?>;
    }
</style>

<body>

<table>

<!-- function maakt extra rijen aan -->
<?php function maakRij($gegevens = 'n.v.t.', $value = 'niet ingevuld'){ 
    global $ik;
    $ik[$gegevens] = $value;
    // echo '<tr><td>'.$gegevens.'</td><td>'.$value.'</td></tr>';
}

maakRij("Favoriete eten", "Eten met veel vlees");

?>

<!-- Tabel met gegevens uit de foreach loop -->
<?php foreach ($ik as $gegevens => $value){?>
<tr>
<td><?php echo $gegevens;?></td>
<td><?php echo $value;?></td>
</tr>
<?php }; ?>

</table>


</body>
</html>
