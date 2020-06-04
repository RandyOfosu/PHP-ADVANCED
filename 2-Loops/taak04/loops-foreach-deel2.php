<?php
$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
?>
<!DOCTYPE html>
<html>
<body>

<form action="loops-foreach-deel2.php">
  <label for="klassenformulier">In welke klas zit je?:</label>
  <select name="klas" id="klassen">
  <?php 
  foreach ($klassen as $key => $value) {
    echo "<option value='$key'>$value</option>";
  }
  ?>
  </select>
  <br><br>
  <input type="submit" value="Verzend">
</form>

</body>
</html>