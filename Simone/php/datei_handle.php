<?php

//öffnen der Datei
$dateihandle = fopen("text.txt", "r");

//lesen der Datei zeilenweise
$output = fgets($dateihandle);   //erste Zeile

// readfile("text.txt");   //- Zeigt den ganzen Dateiinhalt an.

//output Datei
echo "<br/>" . $output . "! <br/>";

//lesen der Datei zeilenweise
//feof - prüft, ob ein Dateizeiger am Ende der Datei steht. Zeigt alles
while(!feof($dateihandle)) 
{
    $zeile=fgets($dateihandle);
    echo $zeile."<br />";
}

//in Datei schreiben
//a+ erstellt eine neue Datei falls nicht bereits vorhanden!
$schreiben = fopen("neu.txt","a+");   

//fputs übergibt den Text an die Variable (zählt zusätzlich die charakter)
echo fputs($schreiben, "Hallo Sven"); 

//datei schliessen
fclose($dateihandle); 
fclose($schreiben);
?>