<html>
    <head>
        <title>SQL-Abfrage</title>
    </head>
    <body>
        <h1>Newsletter-Eintragung</h1>
        <?php
        $server = "localhost";
        $user = "root";
        $pass = "geheim";
        $dbname = "homepage";
        $name = $_POST["UserName"];
        $mail = trim($_POST["UserMail"]); // trim, falls nur Leerzeichen eingegeben wurden

        if (empty($mail)) 
        {
            echo "Bitte geben Sie eine E-Mail-Adresse an.";
            echo "<p><a href=\"newsletter_lsg.html\">Zurück zum Formular</a></p>";
        } 
        else 
        {
            $verbindung = new mysqli($server, $user, $pass, $dbname);
            // Check connection
            if ($verbindung->connect_error) {
                die("Connection failed: " . $verbindung->connect_error);
            } 

            $sql = "INSERT INTO newsletter VALUES ('$name', '$mail')";
            if ($verbindung->query($sql) === TRUE) {
                echo "Ihre Adresse wurde erfolgreich eingetragen";
            } else {
                echo "Error: " . $sql . "<br>" . $verbindung->error;
            }
            $verbindung->close();
        }
        ?>
    </body>
</html>