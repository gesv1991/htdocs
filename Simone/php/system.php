<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Allgemeine Systeminformationen</title>
    
</head>
<body>
    
    <h1>Allgemeine Systeminformationen erhalten</h1>
<?php
    //Suchen Sie zu den untenstehenden Aufgabenstellungen die passende Variable 

    //Name der geöffneten Datei
    echo $_SERVER["SCRIPT_NAME"]."<br/>";

    // Name des Servers 
    echo $_SERVER["SERVER_NAME"]."<br/>";

    // Kennung des Besucherbrowsers 

    echo $_SERVER["HTTP_USER_AGENT"]."<br/>";
	
	// Adresse, die auf die aktuelle Seite verwiesen hat

 //   $adresse= $_SERVER["HTTP_REFERER"]; falls vorhanden wird es angezeigt.

    if(isset($_SERVER["HTTP_REFERER"])){
        echo $_SERVER["HTTP_REFERER"];
    }
    
    // IP-Adresse des Besuchers 

    echo $_SERVER["REMOTE_ADDR"]."<br/>";


    // Port 
    echo $_SERVER["SERVER_PORT"]."<br/>";
?>
</body>
</html>