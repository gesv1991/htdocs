<!DOCTYPE html>
<html>

<head>
    <title>Einfaches Mailformular</title>
</head>
<body>
<!-- sessionzähler -->
<?php
session_start(); // session gestartet/erstellt oder weitergeführt falls bereits vorhanden

if (!isset($_SESSION["besuche"])){
	$_SESSION["besuche"]=1;
}
else {
	$_SESSION["besuche"]++;
}

echo "Anzahl Seitenaufrufe:" . $_SESSION["besuche"];

?>

<h1>Kundenformular</h1>
<form name='mailformular' action='mail_val_lsg.php' method='post'>
<!--<input type='hidden' name='recipient' value='test@test.ch'> empfänger erst im script setzen kann sonst manipuliert und für SPAM verwendet werden--> 
<label>Name:</label><input type='text' name='name' /><br/>
<label>Vorname:</label><input type='text' name='vorname' /><br/>
<label>E-Mail:</label><input type='text' name='mail' /><br/>
<label>Betreff:</label><input type='text' name='subject' /><br/>
<label>Kommentar:</label><textarea name="comment"></textarea><br/>
<input type='submit' name='submit' value='senden!' />
</form>


</body>
</html>
