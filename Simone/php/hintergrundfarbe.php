<?php
$titel = "PHP Farben Test";
if (isset($_POST["farbe"]))
{
    $ergebnis = $_POST[""]
}


/*$color = "#999999";
mt_srand((double)microtime()*1000000);
$zufallswert = mt_rand(0, 255);
$color = "#".dechex($zufallswert).dechex($zufallswert).dechex($zufallswert);*/
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <title><?php echo $titel; ?></title>
  <style type="text/css">
  body {  background-color: <?php echo $color; ?> }
      
</style>
</head>
<body>
    
    <form method="post" action="hintergrundfarbe.php">
    <p>Wählen Sie eine Hintergrundfarbe für die Datei aus:</p>
        
        <input type="radio" name="farbe" value="gelb">Gelb
        <input type="radio" name="farbe" value="hellgruen">Hellgrün
        <input type="radio" name="farbe" value="orange">Orange
        <input type="radio" name="farbe" value="weiss">Weiss
        <input type="submit" name="Absenden" value="Absenden">
        
        <p><b>Ihre Auswahl wird als Hintergrundfarbe angezeigt.</b></p>
    
    </form>
  <?php echo $color; ?>
</body>
</html>