<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>array functions</title>
        <style> td{border: 1px solid black} table{border-collapse: collapse} </style>
    </head>
    <body>

        <h1>Funktionen zur Arraybearbeitung</h1>
        <?php

        // lassen Sie sich anzeigen, wie viele Elemente der folgende Array aufweist
        $namen = array ("Meier", "Mueller", "Peterhans", "Vogel", "Zuellig");
        echo count($namen)."  / Anzahl Elemente <br/>";

        // summieren Sie Zahlen 
        $summe_one = array (10, 500, 20, 20, 50);
        $summe_two = array (10, 500, "20", 20, 50);
        $one = array_sum($summe_one);
        $two = array_sum($summe_two);
        echo $one+$two." / Summe von 2 Arrays <br/>"."<br/>";

        // sortieren Sie den folgenen array alphabetisch 
        $alpha = array ("Haus", "Boot", "Motorrad", "Velo");
        sort($alpha);
        print_r ($alpha);
        echo "<br/>";

        // nun sortieren Sie rückwärts 
        $backalpha = array ("Pferde", "Ameisen", "Hunde", "Katzen");
        rsort($backalpha);
        print_r ($backalpha);
        echo "<br/>";

        // sortieren Sie den folgenden array 
        $pics = array ("bild1.jpg", "bild20.jpg", "bild2.jpg", "bild10.jpg");
        natsort($pics);
        print_r($pics);
        echo "<br/>";

        // verknüpfen Sie die folgenden Arrays zu einem neuen, einzigen Array 
        $array_one = array ("Honda", "Hyundai", "Ford", "BMW");
        $array_two = array ("Mercedes", "Toyota", "Skoda");

        $array_neu = array_merge($array_one, $array_two);
        print_r($array_neu);
        echo "<br/>"."<br/>";

        // Lassen Sie sich zuerst die aktuelle position des arrayzeigers anzeigen, dann setzen Sie ihn auf das nächste Element, nochmal auf das nächste und dann wieder auf das vorhergehende. Zu guter Letzt setzen Sie ihn wieder auf das Erste
        $farben = array ("rot", "gelb", "grün", "blau");

        //aktuelle Position
        echo pos($farben)."<br/>";

        //Element vorwärts
        echo next($farben)."<br/>";
        echo next($farben)."<br/>";

        //ein Element zurück
        echo prev($farben)."<br/>"; 

        //zurücksetzen
        echo reset($farben)."<br/>"."<br/>";

        // Erstellen Sie einen assoz. array mit 4-5 Ländern und Hauptstädten - iterieren Sie den Array und zeigen Sie ihn an auf dem Bildschirm. 
        $a = array("Schweiz"=>"Bern", "Italien"=>"Rom", "USA"=>"Washington", "Frankreich"=>"Paris", "Spanien"=>"Madrid");
        $anzahl = count($a);
        foreach ($a as $key => $key_value)
        {
            echo $key." = " .$key_value."<br/>";
        }

        //Mehrdimensionales Array erstellen mit Land, Hauptstadt und Sprache

        $a2 = array(array("Land"=>"Schweiz", "Hauptstadt"=>"Bern", "Sprache"=>"Deutsch, Französisch, Italienisch"),
                    array("Land"=>"Italien", "Hauptstadt"=>"Rom", "Sprache"=>"Italienisch"),
                    array("Land"=>"Frankreich", "Hauptstadt"=>"Paris", "Sprache"=>"Französisch"),
                    array("Land"=>"Spanien", "Hauptstadt"=>"Madrid", "Sprache"=>"Spanisch"),
                    array("Land"=>"Deutschland", "Hauptstadt"=>"Berlin", "Sprache"=>"Deutsch"));

        foreach ($a2 as $city) {
            echo "<table>";
            echo "<tr>";
            echo "<td>". $city["Land"]."</td>";
            echo "<td>". $city["Hauptstadt"]."</td>";
            echo "<td>". $city["Sprache"]."</td>";
            echo "</tr>";
            echo "</table>";
        }
        ?>
    </body>
</html>