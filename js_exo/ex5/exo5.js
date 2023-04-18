myVar = "Bonjour"
var nom = window.prompt("Saisissez votre nom");
var prenom = window.prompt("Saisissez votre prénom");

if (window.confirm("Etes-vous un homme ?") == true) 
{
    window.alert("Bonjour Monsieur " + nom +" "+ prenom);
    
}
else 
{
    window.alert("Bonjour Madame " + nom +" "+ prenom);

}
