<?php

// on importe le contenu du fichier "db.php"
include('db.php');
// on exécute la méthode de connexion à notre BDD
$db = connexionBase();



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

    
        
    } else {
        // Authentification échouée
        echo "Identifiant ou mot de passe incorrect.";
    }


    
header('Location: discs.php');
        exit;
?>