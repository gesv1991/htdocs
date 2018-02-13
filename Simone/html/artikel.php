<!doctype html>

<html lang="de">
    <head>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style_userform.css"> 
        <title>Artikel auswählen</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta charset="UTF-8">
        <meta name="author" content="Sven Gebert">
    </head>
    <body>
    <div id="Hintergrund">
              </div>  
        <br>
        <br>
        <h1>Bite wählen Sie in der folgenden Liste einen Artikel aus:</h1>
        <form name="artikel_form" method="post" action="../php/formular_auswertung_post.php"> 
            
 <!--           <div class="col-sm-offset-2 col-sm-10" >
                <div class="checkbox">
                    <input type="checkbox" name="artikel[]" value="Artikel Nr 1 - Kuchen">
                    Artikel Nr 1. - Kuchen
                </div>
            </div>
                <div class="col-sm-offset-2 col-sm-10" >
                    <div class="checkbox">
                        <input type="checkbox" name="artikel[]"value="Artikel Nr 2 - Glas">Artikel Nr 2 - Glas
                    </div>
                </div>
                <div class="col-sm-offset-2 col-sm-10" >
                    <div class="checkbox">
                        <input type="checkbox" name="artikel[]"value="Artikel Nr 3 - Papier">Artikel Nr 3 - Papier
                    </div>
                </div>
                <div class="col-sm-offset-2 col-sm-10" >
                    <div class="checkbox">
                        <input type="checkbox" name="artikel[]" value="Artikel Nr 4">
                        Artikel Nr 4 - Buch
                    </div>
                </div>
-->
                <select size="5" name="artikel[]" multiple class="form-control" required>
                    
                    <option style="word-spacing: 30px" value="Flasche"> Flasche Nr:11.256 </option>
                    <option style="word-spacing: 38px" value="Papier">Papier Nr:12.935</option>
                    <option style="word-spacing: 46.5px" value="Buch">Buch Nr:23.209</option>
                    <option style="word-spacing: 49px" value="Glas">Glas Nr:22.949</option>
                    <option style="word-spacing: 43px" value="Block">Block Nr:12.993</option>
                </select>

            <br>

            <button type="submit" class="btn btn-success">Bestätigen</button>
             <button type="reset" class="btn btn-delete">Löschen</button>

        </form> 
        
    </body> 
</html>