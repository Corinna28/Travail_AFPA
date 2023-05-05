<?php

// on importe le contenu du fichier "db.php"
include "db.php";
// on exécute la méthode de connexion à notre BDD
$db = connexionBase();

// on lance une requête pour chercher toutes les fiches d'artistes
$requete = $db->query("SELECT * FROM disc INNER JOIN artist on disc.artist_id = artist.artist_id");
// on récupère tous les résultats trouvés dans une variable
$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
// on clôt la requête en BDD
$requete->closeCursor();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Disc</title>

</head>

<body>

<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand">Liste des Disques</a>
  <form class="form-inline">
    <button type="button" class="btn btn-primary">Ajouter</button>
  </form>

</nav>