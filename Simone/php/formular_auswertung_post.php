<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Formularauswertung</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style_userform.css"> 
    </head>
    <body>
        <?php
        if (!empty($_POST["artikel"])) 

        {
            echo "<h2>Folgende Artikel wurden ausgewählt:</h2>"."<br>";       
            echo "<h3>".implode(", ", $_POST["artikel"]) . "</h3>";
        }
        ?>

        <form method="get" action="../html/artikel.php">
            <button type="submit" class="btn btn-primary btn-sm" >Andere Artikel hinzufügen</button>

        </form>
        <br>
        <br>
        <h3>Um diese Artikel zu bestellen geben Sie bitte nachfolgend Ihre Adresse ein</h3>

        <form name="abschluss" method="post" action="abschluss.php">

            <fieldset>
                <legend>Kunden-Details</legend>
                <div class="form-group">
                    <label>Vorname</label>
                    <input name="vname" type="text" class="form-control" id="vname" placeholder="Name" required autofocus>
                </div>

                <div class="form-group">
                    <label>Nachname</label>
                    <input name="nname"type="text" class="form-control" id="nname" placeholder="Vorname" required>
                </div>

                <div class="form-group">
                    <label>Strasse</label>
                    <input name="strasse"type="text" class="form-control" id="strasse" placeholder="Strasse" required>
                </div>

                <div class="form-group">
                    <label>PLZ</label>
                    <input name="plz" type="text" class="form-control" id="plz" placeholder="PLZ" required>
                </div>

                <div class="form-group">
                    <label>Stadt</label>
                    <input name="stadt" type="text" class="form-control" id="stadt" placeholder="Stadt" required>
                </div>

                <div class="form-group">
                    <label>E-Mail</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Vorname" required>
                </div>

                <div class="form-group">
                    <input type="checkbox" class="form-control" id="agb" required>
                    <label>Bitte akzeptieren Sie unsere AGB's</label>
                </div>


                <button type="submit" class="btn btn-primary btn-lg active">Absenden</button>
                <button type="reset" class="btn btn-default btn-lg active">Löschen</button>









            </fieldset>
        </form>
    </body>
</html>
