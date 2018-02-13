<!doctype html>
<html>
    <head>
        <title>Rechenergebnis</title>
        <meta charset="utf-8" >
    </head>
    <body>

        <?php

        $liste = array("Fleisch", "Brot", "Wasser", "Kaese", "Schuhe", "Kaugummi");
        $alles=count($liste);

        for ($i=0;$i<$alles;$i++){
            echo $liste[$i] . "<br>";      
        }
        //array_push fügt der array Liste neue elemente hinzu
        array_push($liste, "Apfel", "Himbeere");
        print_r($liste);
        echo "<br>";

        //überschreibt das 5. Element mit Pfeffer.
        $liste[5]="Pfeffer";
        
        //Fügt das Element Speck ein
        $liste[]="Speck";
        print_r($liste);
        echo $liste[6];


        ?>
    </body>
</html>