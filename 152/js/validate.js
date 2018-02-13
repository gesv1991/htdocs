$(document).ready(function(){
    //eigene Methodem für die jeweiligen Eingaben. Dies ist die Methode "namen"
    jQuery.validator.addMethod("namen", function(value, element){
        return this.optional(element) || /^[a-zA-ZüÜäÄöÖéèàâç ]*$/.test(value);
    },	"Ungültige Zeichen!")
    jQuery.validator.classRuleSettings.namen = {namen: true};

    //PLZ Prüfer
    jQuery.validator.addMethod("zipcode", function(value, element) {
        return this.optional(element) || /^[0-9]+$/.test(value);
    }, "Ungültige PLZ Zeichen!")     //pattern gibt an dass zahlen von 0-9 möglich sind.
    jQuery.validator.classRuleSettings.zipcode = {zipcode: true};

    //Datum - Geburtstagdatum prüfer.
    jQuery.validator.addMethod("bdate", function(value, element) {
        return this.optional(element) || /^(0?[1-9]|[12][0-9]|3[0-1])[/., -](0?[1-9]|1[0-2])[/., -](19|20)?\d{2}$/.test(value);
    }, "Ungültiger Geburtstag!")
    jQuery.validator.classRuleSettings.bdate = {bdate: true};

    //E-Mail Prüfung  
    jQuery.validator.addMethod("email", function(value, element) {
        return this.optional(element) || /^\w[.-_\w]*@[.-_\w]+\.[a-z]{2,6}$/.test(value);w
    }, "Ungültige E-Mail Adressen") 
    jQuery.validator.classRuleSettings.email = {email: true};

    //Benutzernamen prüfung
    jQuery.validator.addMethod("username", function(value, element) {
        return this.optional(element) || /^\w+$/.test(value);w
    }, "Ungültiger Benutzernamen") 
    jQuery.validator.classRuleSettings.username = {username: true}; 

    //validieren

    $("#userform").validate({ //#userform steht für die formular ID im HTML.
        
        rules: {  //Regeln welche jeweils mit den Methoden oben ausgeführt werden.
            vname: {    //vname steht für die ID vorname
                required: true,
                namen: true
            },
            nname: {
                required: true,
                namen: true
            },
            plz: {
                required: true,
                zipcode: true,
                minlength: 4,
                maxlength: 5
            },  
            ort: {
                required: true,
                namen: true
            },
            bdate: {
                required: true,
                birthday: true
            },
            email: {
                required: true,
                email: true
            },
            username: {
                required: true,
                username: true,
                minlength: 3,
                maxlength: 16,  //gibt die maxlänge an - muss somit nicht im
                //pattern angegeben werden.
                remote: { type: "post",
                         url: "../php/user.php"
                        }   //stellt die Verbindung mit der php datei her.
            },
            //passwort wird direkt in einer anderen datei kontrolliert. aber hier    ausgeführt.
            password: {
                required: true
            },
            confirm_password: {
                required: true,
                equalTo: "#password"
            }, //prüft ob das Passwort 2 mal gleich ist.
        },

        success: function(element) {
            element
                .text('OK!').addClass('valid')   // wenn erfolg wird die                                              Klasse 'valid' vergeben und der Text "OK" wird ausgegeben.
                .closest('.control-group').removeClass('error').addClass('success');
        },
        //eigene Ausgabenachrichten eintragen
        messages: {
            vname: {
                required: "Bitte einen Vornamen angeben"
            },
            nnamen: {
                required: "Bitte einen Nachnamen angeben"
            },
            plz: {
                required: "Bitte eine PLZ angeben"
            },
            birthday: {
                required: "Bitte ein Geburtstag eingeben"
            },
            email: {
                required: "Bitte Email eingeben"
            },
            username: {
                requred: "Bitte einen Benutzernamen eingeben"
            },
            password: {
                required: "gib mo code amaa"
            },
        }
    });
});
