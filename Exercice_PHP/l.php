<?php
 // Prochain vendredi $dt = new \DateTime(); $dt->modify('next friday');

// Tant que le jour enregistré n'est pas le 13
while($dt->format('d') != 13) {
    // Passage au vendredi suivant
    $dt->modify('next friday');
}

// Affichage de la date enregistrée
echo $dt->format('d/m/Y');
  ?>