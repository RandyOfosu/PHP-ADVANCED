<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formuliertje</title>
</head>
<body>
    <form action='advanced-2.php' method='post'>

    <!-- Inputbox table-border -->
    <label>tableranddikte (px)</label>
    <input type="text" id='tableDikte'>
    <br>

    <!-- Inputbox padding -->
    <label>padding (px)</label>
    <input type="text" id='padding'>
    <br>

    <!-- Selectionbox Tekstkleur -->
    <label>Tekstkleur</label>
    <select name='tekstkleur' id='tekstkleur'>
    <?php   
        $kleuren = array("red", "blue", "green", "black", "brown");

        foreach ($kleuren as $teint) {
        echo "<option value='$teint'>$teint</option>"; 
    }
    ?>
    </select>
    <br>

    <!-- Selectionbox Achtergrondkleur -->
    <label>Achtergrondkleur</label>
    <select name="achtergrondkleur" id="achtergrondkleur">
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