var valider = document.getElementById("Envoyer");
var nom = document.getElementById("Nom");
var prenom = document.getElementById("Prénom");
var datedenaissance = document.getElementById("date");
var code_postal = document.getElementById("CP");
var adresse = document.getElementById("Adresse");
var ville = document.getElementById("Ville");
var email = document.getElementById("Email");
var sujet = document.getElementById("sujet");
var question = document.getElementById("question");
var checkbox = document.getElementById("box");
var form = document.getElementById("formulaire");


form.addEventListener("submit", function f_valid(e) {
    var formValid = true;

    if (nom.value === "") {
        formValid = false;
        nomm.innerHTML = "Nom Manquant"; // indique message d'erreur
        nomm.style.color = "red";

    }
    if (prenom.value === "") {
        formValid = false;
        prenomm.innerHTML = "Prénom Manquant";// indique message d'erreur
        prenomm.style.color = "red";

    }
    if (date.value === "") {
        formValid = false;
        datem.innerHTML = "Date de naissance Manquante";// indique message d'erreur
        datem.style.color = "red";

    }
    
    if (code_postal.value === "") {
        formValid = false;
        codepostalm.innerHTML = "Code Postal Manquant";// indique message d'erreur
        codepostalm.style.color = "red";

    }
    if (adresse.value === "") {
        formValid = false;
        adressem.innerHTML = "Adresse Manquante";// indique message d'erreur
        adressem.style.color = "red";

    }
    if (ville.value === "") {
        formValid = false;
        villem.innerHTML = "Ville Manquante";// indique message d'erreur
        villem.style.color = "red";

    }
  

    if (!formValid) {
        e.preventDefault();
    }

});