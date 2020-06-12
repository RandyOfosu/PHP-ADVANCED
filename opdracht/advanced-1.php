<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $kleuren = array("red", "blue", "green", "black", "brown");

    ?>

    <form action=''>
    <label>Achtergrondkleur</label>
    <select name='tekstkleur' id='tekstkleur'>
    <?php     foreach ($kleuren as $teint) {
        echo "<option value='teint'><?php echo $teint?></option>";
    }
    ?>
    </form>
    </select>
    
    

</body>
</html> 