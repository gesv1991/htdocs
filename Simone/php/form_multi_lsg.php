<!doctype html>
<html>
    <head>
        <title>Rechenergebnis</title>
        <meta charset="utf-8" >
    </head>
    <body>
        <h1>Kleiner Webkalkulator</h1>
        <form method="post" name="mal" >

            <input type="text" name="zahl1" placeholder="1. Zahl">
            <input type="text" name="zahl2" placeholder="2. Zahl">
            <input type="submit" name="mal" value="Zahlen multiplizieren">
            <input type="submit" name="plus" value="Zahlen addieren">
        </form>

        <?php
        echo "<h1>Rechenergebnis</h1>";
        if (isset($_POST["mal"])) 
        {
            $ergebnis = $_POST["zahl1"] * $_POST["zahl2"];
            echo $_POST["zahl1"] . " mal " . $_POST["zahl2"] . " ist gleich $ergebnis.";
        }
        if (isset($_POST["plus"])) 
        {
            $ergebnis = $_POST["zahl1"] + $_POST["zahl2"];
            echo $_POST["zahl1"] . " plus " . $_POST["zahl2"] . " ist gleich $ergebnis.";
        }
        ?>
    </body>
</html>