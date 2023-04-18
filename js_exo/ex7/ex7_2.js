var Nombre1 = window.prompt("Saisissez la somme 1");
var operateur = window.prompt("Choississez un opérateur (+, -, *, /)")
var Nombre2 = window.prompt("Saisissez la somme 2");

Nombre1=parseInt(Nombre1);
Nombre2=parseInt(Nombre2);

switch (operateur) {

    case '+': 
    console.log (Nombre1+Nombre2);
    break;

    case '-':
    console.log (Nombre1-Nombre2);
    break;

    case '/':
    console.log (Nombre1/Nombre2);
    break;

    case '*':
    console.log (Nombre1*Nombre2);
    break;

}
