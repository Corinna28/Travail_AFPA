<?php

// on importe le contenu du fichier "db.php"
include('db.php');
// on exécute la méthode de connexion à notre BDD
$db = ConnexionBase();

// On récupère l'ID passé en paramètre :
$id = $_GET["disc_id"];

// on lance une requête pour chercher toutes les fiches d'artistes
$requete = $db->prepare("SELECT * FROM disc JOIN artist on disc.artist_id = artist.artist_id where disc.disc_id=?");

// on ajoute l'ID du disque passé dans l'URL en paramètre et on exécute :
$requete->execute(array($id));
// on récupère tous les résultats trouvés dans une variable
$modif = $requete->fetch(PDO::FETCH_OBJ);
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
  <title>Disc_form</title>

</head>

<body>

  <div class="container">
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
      <a class="navbar-brand">Modifier un Vynile</a>
    </nav>
    <br>
    <br>
    <br>
    <form action="script_disc_modif.php" id="formulaire" method="post" enctype="multipart/form-data">
      <fieldset>

        <div class="row">

          <div class="col-md-6 mb-5">
            <div class="col-mb-12">
              <div class="col-mb-3">
                <label for="exampleFormControlInput1">Title*</label>
                <input type="text" class="form-control" id="title" placeholder="<?= $modif->disc_title ?>">
              </div><br>
              <div class="col-mb-3">
                <label for="exampleFormControlInput1">Artist*</label>
                <input type="text" class="form-control" id="artist" placeholder="<?= $modif->artist_name ?>">
              </div><br>
              <div class="col-mb-3">
                <label for="exampleFormControlInput1">Year*</label>
                <input type="text" class="form-control" id="year" placeholder="<?= $modif->disc_year ?>">
              </div><br>
              <div class="col-mb-3">
                <label for="exampleFormControlInput1">Genre*</label>
                <input type="text" class="form-control" id="Genre" placeholder="<?= $modif->disc_genre ?>">
              </div><br>
              <div class="col-mb-3">
                <label for="exampleFormControlInput1">Label*</label>
                <input type="text" class="form-control" id="label" placeholder="<?= $modif->disc_label ?>">
              </div><br>
              <div class="col-mb-3">
                <label for="exampleFormControlInput1">Price*</label>
                <input type="text" class="form-control" id="price" placeholder="<?= $modif->disc_price ?>">
              </div><br>

              <!-- L'upload de fichier -->
              <label for="picture">Picture : </label>
              <br>

              <input type="file" id="picture" name="picture" accept="image/png, image/jpeg"></input>
              <br>
              <br>
              <br>
              <!-- Bouton modifier retour -->
              <a href="button" class="btn btn-primary">Modifier</a>

              <a href="discs.php" class="btn btn-primary">Retour</a>
            </div>
          </div>
          <!-- image -->
          <div class="col-md-6 mb-5">
            <div class="row col-mb-12">
              <div class="col-md-6">
                <img src="./Assets/images/<?= $modif->disc_picture ?>" class="w-150"><br>
              </div>
            </div>
          </div>

        </div>
      </fieldset>
    </form>
  </div>
















  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>