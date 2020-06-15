<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formuliertje</title>
</head>
<body>
    <form action='advanced-2.php' method='GET'>

    <!-- Inputbox table-border -->
    <label>Tabelranddikte (px)</label>
    <input type="text" name='tabelDikte' id='tabeldikte'>
    <br>

    <!-- Inputbox padding -->
    <label>Padding (px)</label>
    <input type="text" name='padding' id='padding'>
    <br>

    <!-- Selectionbox Tekstkleur -->
    <label>Tekstkleur</label>
    <select name='tekstKleur' id='tekstkleur'>
    <?php   
        $kleuren = array("white","red", "blue", "green", "black", "brown");

        foreach ($kleuren as $teint) {
        echo "<option value='$teint'>$teint</option>"; 
    }
    
    ?>
    </select>
    <br>

    <!-- Selectionbox Achtergrondkleur -->
    <label>Achtergrondkleur</label>
    <select name="achtergrondKleur" id="achtergrondKleur">
    <?php
    foreach($kleuren as $teint){
    echo "<option value='$teint'>$teint</option>";
    }
    ?>
    </select>
    <br>

    <button type="submit">verstuur</button>

    </form>
    

</body>
</html> 