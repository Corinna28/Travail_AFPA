<?php
// La fonction doit prendre deux paramètres, le lien et le titre

// lien("https://www.reddit.com/", "Reddit Hug");
// Appelée de cette façon, la fonction doit générer

// <a href="https://www.reddit.com/">Reddit Hug</a>

function fonctionlien($url, $site)
{
   echo '<a href="' . $url . '">' . $site . '</a>';
}

fonctionlien("https://github.com", "GITHUB");


// Ecrivez une fonction qui calcul la somme des valeurs d'un tableau
// La fonction doit prendre un paramètre de type tableau

//  $tab = array(4, 3, 8, 2);
//  $resultat = somme($tab);
// $resultat doit contenir 17
echo '<br><br><br><br><br>';

$tab = array(4, 3, 8, 2);
function somme($tab)
{
   $somme = 0;
   foreach ($tab as $resultat) {
      $somme += $resultat;
   }
   return $somme;

}
$resultat = somme($tab);
echo $resultat;



echo '<br><br><br><br><br>';

//    Créer une fonction qui vérifie le niveau de complexité d'un mot de passe
// Elle doit prendra un paramètre de type chaîne de caractères. Elle retournera une valeur booléenne qui vaut true si le paramètre (le mot de passe) respecte les règles suivantes :

// Faire au moins 8 caractères de long
// Avoir au moins 1 chiffre
// Avoir au moins une majuscule et une minuscule
// $resultat = complex_password("TopSecret42");
// $resultat doit contenir true.

// Aidez-vous des expressions régulières !
function verif($mdp)
{
   if (strlen($mdp) < 8) {
      return false;
   }

   if (!preg_match('/\d/', $mdp)){
      return false;
   }

if (!preg_match('/[A-Z][a-z]/',$mdp)){
   return false;
}
return true;
}

// Recherche si une chaîne de caractères est contenue dans une autre (ex. recherche si ABCDE contient BCD). Peut rechercher via des expressions régulières	preg_match ("BCD","ABCDEF")	Renvoie 1 (TRUE) si touvé, 0 (FALSE) sinon

// preg_match — Effectue une recherche de correspondance avec une expression rationnelle standard
?>