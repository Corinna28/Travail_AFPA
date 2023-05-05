<!-- Mois de l'année non bissextile
Créez un tableau associant à chaque mois de l’année le nombre de jours du mois.

Utilisez le nom des mois comme clés de votre tableau associatif.

Affichez votre tableau (dans un tableau HTML) pour faire apparaitre sur chaque ligne le nom du mois et le nombre de jours du mois.

Triez ensuite votre tableau en utilisant comme critère le nombre de jours, puis affichez le résultat. -->

<?php
// Les clés sont les noms des mois de l’année et les valeurs les nombres de jours par mois

$jourMois = array(
    "janvier" => 31,
    "février" => 28,
    "mars" => 31,
    "avril" => 30,
    "mai" => 31,
    "juin" => 30,
    "juillet" => 31,
    "août" => 31,
    "septembre" => 30,
    "octobre" => 31,
    "novembre" => 30,
    "décembre" => 31
);
echo '<table border=1><tr><th>Mois</th><th>Nombre de jours</th></tr>';
foreach ($jourMois as $m => $nbJ) {
    echo "<tr><td>" . $m . "</td><td>" . $nbJ . "</td></tr>";
}
echo "</table>";



asort($jourMois);
echo '<table border=1><tr><th>Mois</th><th>Nombre de jours</th></tr>';
foreach ($jourMois as $m => $nbJ) {
    echo "<tr><td>" . $m . "</td><td>" . $nbJ . "</td></tr>";
}
echo "</table>";

// Ces fonctions permettent le tri des valeurs d'un tableau associatif,

// dans l'ordre alphabétique ou numérique croissant : asort()
// dans l'ordre alphabétique ou numérique décroissant : arsort()
// L'indexation des clefs est conservée : une fois le tri effectué, chaque valeur reste associée à sa clé initiale.
?>