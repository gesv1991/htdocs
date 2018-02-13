<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Funktionen</title>
    
</head>
<body>
    
    <h1>Funktionen basics</h1>
    <p>function malzwei wird definiert</p>
<?php
    //funktionsdefinition simple
    function malzwei ($izahl)
    {
        return $izahl * 2;
        
    }
    //Funktionsaufruf
    echo " ausgabe funktion direkt mit echo und parameter 4 'echo malzwei(4)' = Resultat: " . malzwei(4) . "<br/>";
    
    $resultat = malzwei(8);
    echo "Ausgabe mit echo und Speicherung in $resultat mit malzwei(8) / Das Resultat ist: $resultat / <br/>";
    
    //speicherung der parameter in eine variable 

    function malzwei2 ($zahl)
    {
        return $zahl * 2;
        
    }

    //funktionsaufruf
    $parameter = 10;
    $resultat2 = malzwei2($parameter);
    echo "Ausgabe mit 'malzwei2(\$parameter)' / das resultat ist: $resultat2 <br/>";


    // Parameter zuweisung 

    function addition($hinzu) {
        return $hinzu + 10;
    }

    $wert = 100;
    echo "Ausgabe variable \$wert 100 wird dem parameter der funktion addition zugewiesen welche 10 addiert - neuer wert von hinzu ist nun 110. Resultat: " . addition($wert) . "<br/>";

    // mehrere Parameter 

    function multipli ($mult1, $mult2){
        return $mult1 * $mult2;
    }

    //Funktionsaufruf

    echo "Resultat der multiplikation mit zwei parametern 10 und 20. Resultat: " . multipli(10, 20) . "<br/>";


?>
</body>
</html>