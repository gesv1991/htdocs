	<?php

	// Nur ausführen, falls Formular wirklich abgeschickt wurde
	$empfaenger= "test@test.ch";
	$betreff= $_POST["subject"];
	$kommentar= $_POST["comment"];
	$absender_name=$_POST["name"];
	$absender_mail=$_POST["mail"];
	$send_mail=true;

	if(empty($_POST['name'])||empty($_POST['vorname'])||empty($_POST['mail'])||empty($_POST['subject'])||empty($_POST['comment'])||empty($_POST['name']))
	{
		echo "Das Formular hat leere Felder. <br>";
		$send_mail=false;
	}
	else{
	echo "Das Formular ist korrekt ausgefuellt. <br>";
	$send_mail = true; 
	}

		if (preg_match("/@/", $_POST['mail'])=='0'){
		echo "mail muss ein @ enthalten <br>";
	$send_mail=false;
	}	
	  // Setzt eine Steuervariable, die beeinflusst,
	  // ob die Mailfunktion aufgerufen wird
	  // Versenden der Mail mit der Mailfunktion, falls $send_mail Variable wahr ist.
	  if($send_mail)
	  {
	    $mail_sent = mail ($empfaenger, $betreff, $kommentar, "From: $absender_name <$absender_mail>" );
	    echo "Mail wurde verschickt";
	}
	// Falls mail nicht versandt werden konnte, Meldung ausgeben
	if(!$mail_sent)
	{
	  print("Mail konnte nicht versandt werden.");
	}

	?>
