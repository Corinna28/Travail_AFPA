<!-- Reprenez le formulaire que vous avez réalisé dans la séance précédente (JavaScript). Dans ce formulaire, vous devez modifier l'attribut action de la balise form pour indiquer l'adresse d'un script PHP.

    <form action="monscript.php">
Puis créer un script PHP permettant d'afficher l'ensemble des valeurs transmises.

    $_REQUEST["nom_du_input"] 
Cette instruction permet de récupérer la valeur du paramètre nom_du_input.

 -->


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = $_POST['mail'];
    $subject = $_POST['subject'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['Radio'];
    $date_naissance = $_POST['DDN'];
    $code_postal = $_POST['CP'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $question = $_POST['question'];

    
    echo "Nom: " .$nom . "<br>";
    echo "Prénom: " .$prenom . "<br>";
    echo "Sexe: " .$sexe . "<br>";
    echo "Date De Naissance: " .$date_naissance. "<br>";
    echo "Code Postal: " .$code_postal. "<br>";
    echo "Adresse: " .$adresse. "<br>";
    echo "Ville: " .$ville. "<br>";
    echo "Mail: " .$mail. "<br>";
    echo "Question: " .$subject. "<br>";
    echo "Sujet: " .$question. "<br>";


}
?>


<!-- 
$_SERVER est un tableau contenant des informations telles que les en-têtes, les chemins et les emplacements de script. Les entrées de cet array sont créées par le serveur web, il n'y a donc aucune garantie que chaque serveur web fournira chacune de ces informations ; les serveurs peuvent en omettre certaines ou en fournir d'autres qui ne sont pas répertoriées ici. Cependant, la plupart de ces variables sont prises en compte dans la spécification » CGI/1.1 et sont susceptibles d'être définies.

Note: Lorsque PHP est exécuté en ligne de commande command line , la plupart de ces entrées ne seront pas disponibles ou n'auront aucun sens.

En plus des éléments énumérés ci-dessous, PHP créera des éléments supplémentaires avec des valeurs provenant des en-têtes de requête. Ces entrées seront nommées HTTP_ suivi du nom de l'en-tête, en majuscules et avec des traits de soulignement au lieu des tirets. Par exemple, l'en-tête Accept-Language sera disponible sous la forme $_SERVER['HTTP_ACCEPT_LANGUAGE']. -->