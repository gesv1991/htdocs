<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Funktionen in Verzweigungen</title>

    </head>
    <body>

        <h1>variable vorhanden? isset</h1>
        <?php

        if(isset($test)){
            echo "Variable \$test vorhanden <br>";
            echo "Variable ".$test;
        }
        else {
            echo "variable ist nicht vorhanden";
        }
        //testen Sie mit Hilfe der Funktion isset, ob die Variable $test vorhanden ist
        ?>
    </body>
</html>