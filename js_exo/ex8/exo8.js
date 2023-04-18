
var nom = prompt("Entrez votre Prénom: ");
document.write("Vous avez entré: " + nom);
var val = confirm ("Voulez-vous continuer?");
if(val==true){
    document.write("L'utilisateur veut continuer !");
}