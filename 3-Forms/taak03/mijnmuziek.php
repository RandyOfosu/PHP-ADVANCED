<html>
<body>
 <form method="get">
     <h1>Alles over jouw favoriete muziek</h1>
     Favoriete nummer:<br> <input type="text" name="Favoriete_nummer"><br>
     Artiest:<br> <input type="text" name="Artiest"><br> 
     Titel:<br> <input type="text" name="Titel"><br>
     Jaar van uitkomst:<br> <input type="text" name="Jaar van uitkomst"><br> 
     Muzieksoort:<br> <input type="text" name="Muzieksoort"><br><br>
     <input type="submit" value="verzend">
 </form>
</body>
</html>

<?php 

echo "<h3>Dit zijn de gegevens die zijn ingevuld</h3>";
echo $_GET["Favoriete_nummer"]."<br>";
echo $_GET["Artiest"]."<br>";
echo $_GET["Titel"]."<br>";
echo $_GET["Jaar_van_uitkomst"]."<br>";
echo $_GET["Muzieksoort"]."<br>";

?>