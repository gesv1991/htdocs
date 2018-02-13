function check(){

    var vname = document.form1.vorname.value;
    var nname = document.form1.nachname.value;
    var zip = document.form1.plz.value;
    var mail = document.form1.email.value;
    var agb = document.form1.agb.checked;
    var nameck = /[a-zA-ZäöüÄÖÜ ,.'-]+$/;
    // mit einem / (slash am Anfang und                                                  // Ende)         //Nur Buchstaben, keine Sonderzeichen, keine Zahlen.

    var zipck = /^[0-9]{4}$/;       //Zahlen von 0-9 und Max 4 Ziffern.
    var mailck = /^[a-zA-Z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;   //egaaaal@egaaal.ch
    var empty = 'Dieses Feld darf nicht leer sein';

    /*
    .innerHTML = property (Eigenschaft)
    Wenn Variable nname leer ist, dann wird die ID'error_nname' mittels innerHTML überschrieben zu der Variable empty.
    */
    if (nname == "") {      
        document.getElementById('error_nname').innerHTML = empty;
        document.form1.nachname.focus();      //legt den Cursor auf das Feld nachname.
        return false;      //gibt false zurück damit das Formular nicht geschickt wird.
    }
    else {
        document.getElementById('error_nname').innerHTML = "";
    }

    if (!nameck.test(nname)){
        document.getElementById('error_nname').innerHTML = "Nur Buchstaben, keine Sonderzeichen, keine Zahlen";
        document.form1.nachname.focus();
        return false;
    }
    else {
        document.getElementById('error_nname').innerHTML = "";
        document.getElementById('approval_nname').innerHTML ="Alles I.O!";
    }

    if (vname == "") {
        document.getElementById('error_vname').innerHTML = empty;
        document.form1.vorname.focus();
        return false;
    }
    else {
        document.getElementById('error_vname').innerHTML = "";
    }

    if (!nameck.test(vname)){
        document.getElementById('error_vname').innerHTML = "Nur Buchstaben, keine Sonderzeichen, keine Zahlen";
        document.form1.vorname.focus();
        return false;
    }
    else {
        document.getElementById('error_vname').innerHTML = "";
        document.getElementById('approval_vname').innerHTML ="Alles I.O!";
    }


    if (zip == "") {
        document.getElementById('error_plz').innerHTML = "Bitte geben Sie eine 4-stellige PLZ ein";
        document.form1.plz.focus();
        return false;
    }
    else {
        document.getElementById('error_plz').innerHTML = "";

    }

    if (!zipck.test(zip)){
        document.getElementById('error_plz').innerHTML = "Die PLZ muss 4-stellig sein";
        document.form1.plz.focus();
        return false;
    }
    else {
        document.getElementById('error_plz').innerHTML = "";
        document.getElementById('approval_plz').innerHTML ="Alles I.O!";

    }

    if (mail == "") {
        document.getElementById('error_mail').innerHTML = "Bitte Ihre E-Mail-Adresse eingeben!";
        document.form1.email.focus();
        return false;
    }
    else {
        document.getElementById('error_mail').innerHTML = "";
    }

    if (!mailck.test(mail)){
        document.getElementById('error_mail').innerHTML = "Bitte geben Sie eine gültige E-Mail Adresse ein";
        document.form1.email.focus();
        return false;
    }
    else {
        document.getElementById('error_mail').innerHTML = "";
        document.getElementById('approval_mail').innerHTML ="Alles I.O!";
    }


    //Prüft ob einer von beiden RadioButton angewählt wurde
    var radio1 = document.getElementById("radio1").checked;
    var radio2 = document.getElementById("radio2").checked;  
    if ((radio1== "")&& (radio2=="")) {
        alert("Bitte geben Sie an ob Sie Mitglied sind.");
        document.form1.radio1.focus();    
        return false;
    }

    if (agb == false) {     //AGB prüfung
        alert("Bitte bestätigen Sie, dass Sie die AGB gelesen haben!");
        document.form1.agb.focus();
        return false;
    }

    return true;

}  





/*document.write("good morning");     //gibt good morning aus.

//Prüft ob vorname einen Wert hat.
   if (document.form1.vorname.value == "") {
        alert('Bitte geben Sie einen Vornamen ein');
        document.form1.vorname.focus();
        return false;
    }

    if (document.form1.email.value == "") {
        alert('Bitte geben Sie einen MAIL ein');
        document.form1.email.focus();
        return false;
    }

//Sucht im Wert email nach einem '@'
    if (document.form1.email.value.includes("@")==0) {
        alert('eine Mail braucht ein @');
        document.form1.email.focus();
        return false;
    }    

//Sucht im Wert email nach einem '@'
    if (document.form1.email.value.indexOf("@")==-1) {
        alert('eine Mail braucht ein @');
        document.form1.email.focus();
        return false;
    }


document.write("good morning");

function color() {      //Färbt das ID Element (pink) in die Farbe Pink!
    document.getElementById('pink').style.color ="pink";
}

function wechsel() { 
//sucht den Namen h1 und listet eine Array dazu auf. Nimmt den 1. [0] eintrag und färbt diesen Blau.
document.getElementsByTagName('h1')[0].style.color ='blue';
}*/