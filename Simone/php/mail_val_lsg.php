<!doctype html>
<html>
	<head>
    	<meta charset="utf-8">
    </head>
<?php
 error_reporting(E_ERROR | E_PARSE);
 
// Nur ausführen, falls Formular wirklich abgeschickt wurde

if(isset($_POST["submit"])                                    )

{
  // Setzt eine Steuervariable, die beeinflusst,
  // ob die Mailfunktion aufgerufen wird
  $send_mail = true; 
  
  //prüfen ob der referrer die eigene webseite beinhaltet. Falls nein Mail trigger aus
  
  /*if(substr_count($_SERVER["HTTP_REFERER"], "test.ch")==0)
  {
	  $send_mail=false;
	  }
	  */

  // Umwandeln der globalen Übergabevariablen zu normalen Variablen 
  $empfaenger = "test@test.ch"; //Empfänger wird im php script definiert um nicht manipuliert werden zu können
  $name = $_POST["name"];
  $vorname = $_POST["vorname"];
  $mail = $_POST["mail"];
  $betreff = $_POST["subject"];
  $kommentar = $_POST["comment"];
  

  // Prüfen, ob keines der Felder leer ist.
  // Falls ja, Verarbeitung unterbrechen!  
  if(empty($betreff) OR empty($kommentar) OR empty($name) OR empty($mail))

  {
    $send_mail = false;
    echo "Alle Felder müssen ausgefüllt sein.<br/>";
  }
  
	
  // Prüfen, ob Mailadresse valide ist.
  // Die machen wir exemplarisch mit einem primitiven Verfahren,
  // welches das Vorhandensein eines @ Zeichnes prüft. 
  if(substr_count($mail, "@")==0)
  {
    $send_mail = false;
    echo "Bitte eine gültige Mailadresse eingeben mit @ Zeichen. <br/>";
  }


  // Versenden der Mail mit der Mailfunktion, falls $send_mail Variable wahr ist.
  if($send_mail)
  {
    $mail_sent = mail ($empfaenger, $betreff, $kommentar, "From: $name <$mail>" );
  }
}

// Falls mail nicht versandt werden konnte, Meldung ausgeben // Achtung 
if(!$mail_sent)
{
  print("Mail konnte nicht versandt werden.");
}
  else
  {
  
  print("Herzlichen Dank! Das Mail wurde gesandt, Sie erhalten bald eine Rückmeldung!");
  }


?>
</html>