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
  <title>Disc_New</title>

</head>

<body>

  <div class="container-fluid">

    <form action="" id="formulaire" method="post">
      <fieldset>

        <legend>
          <p class="h3">Ajouter un Vynile</p>
        </legend>
        <div class="form-group">
          <label for="exampleFormControlInput1">Title*</label>
          <input type="text" class="form-control" id="title1" placeholder="Veuillez saisir un titre">
        </div><br>
        <div class="form-group">
          <label for="exampleFormControlInput1">Artist*</label>
          <input type="text" class="form-control" id="artist1" placeholder="Veuillez saisir un artiste">
        </div><br>
        <div class="form-group">
          <label for="exampleFormControlInput1">Year*</label>
          <input type="text" class="form-control" id="year1" placeholder="Veuillez saisir l'Année">
        </div><br>
        <div class="form-group">
          <label for="exampleFormControlInput1">Genre*</label>
          <input type="text" class="form-control" id="Genre1" placeholder="Veuillez saisir le genre">
        </div><br>
        <div class="form-group">
          <label for="exampleFormControlInput1">Label*</label>
          <input type="text" class="form-control" id="label1" placeholder="Veuillez saisir le Label">
        </div><br>
        <div class="form-group">
          <label for="exampleFormControlInput1">Price*</label>
          <input type="text" class="form-control" id="price1" placeholder="Veuillez saisir le prix">
        </div><br>

        <!-- L'upload de fichier -->
        <label for="picture">Picture : </label>
        <br>

        <input type="file" id="picture" name="picture" accept="image/png, image/jpeg">
        <br>
        <br>
        <br>
        <!-- Bouton modifier retour -->
        <button type="button" class="btn btn-primary">Ajouter</button>
        <button type="button" class="btn btn-primary">Retour</button>
  </div>















  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>