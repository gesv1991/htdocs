<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Funktionen in Verzweigungen</title>

    </head>
    <body>

        <h1>variable vorhanden? empty</h1>
        <?php
        $test= "";
        $test_gefuellt="10";
        if(empty($test)){
            echo "Variable \$leer ist leer. <br/>";
            echo $test;
        }

        // testen Sie mit einer Funktion, ob die Var $test leer oder nicht. 
 if(!empty($test_gefuellt)){
            echo "<br> Der Variable \$test gefüllt ist folgender Wert zugewiesen worden.";
            echo $test_gefuellt;
        }

        ?>
    </body>
</html>