<html>
    <head>
        <title>Formular mit Selbstverweis</title>
        <meta charset="utf-8">
    </head>
    
    <body bgcolor="<?php if (isset($_POST["hintergrund"])) echo $_POST["hintergrund"]; ?>">
        
        <h1>Hintergrundfarbe wählen</h1>
        Wählen Sie eine Hintergrundfarbe für die Datei aus:
        <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="POST">
            <p><input type="radio" name="hintergrund" value="#FFFF00">gelb 
                <input type="radio" name="hintergrund" value="#8FEC95">hellgrün 
                <input type="radio" name="hintergrund" value="#FFA000">orange 
                <input type="radio" name="hintergrund" value="#FFFFFF">weiß</p>
            <p><input type="submit" name="absenden" value="Absenden"></p>
        </form>
        
        <?php
        if (isset($_POST["absenden"]) && isset($_POST["hintergrund"])) 
        {
            echo "<em>Ihre Auswahl wird als Hintergrundfarbe angezeigt.</em>";
        }
        ?>
           
        <?php
$adresse['vorname']    = "Axel";
$adresse['nachname']   = "Pratzner";
$adresse['hausnummer'] = 8;
$adresse['ort']        = "Tübingen";
 
echo "<pre>";
print_r ( $adresse );
        
?>
        
        
    </body>
</html>