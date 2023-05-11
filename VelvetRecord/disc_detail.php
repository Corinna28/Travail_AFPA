<?php

// on importe le contenu du fichier "db.php"
include ('db.php');
// on exécute la méthode de connexion à notre BDD
$db = connexionBase();

// on lance une requête pour chercher toutes les fiches d'artistes
$requete = $db->prepare("SELECT * FROM disc JOIN artist on disc.artist_id = artist.artist_id ");

// on ajoute l'ID du disque passé dans l'URL en paramètre et on exécute :
$requete->execute();

// on récupère tous les résultats trouvés dans une variable
$myDiscs = $requete->fetchAll(PDO::FETCH_OBJ);
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
    <title>Disc_detail</title>

</head>

<body>

    <div class="container">

        <form action="" id="formulaire" method="post">
            <fieldset>

                <legend>
                    <p class="h3">Détails</p>

                </legend>

                <div class="row">
                    <div class="col-md-3 col-xs-12">
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Title*: </label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Title">
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Year*:</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Year">
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Label*:</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Label">
                        </div>
               
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Artist*:</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Artist">
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Year*:</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Year">
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Price</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Price">
                        </div>
                    </div>

                </div>
                <aside>

                </aside>
                <br>
                <!-- Bouton modifier supprimer  retour -->
                <button type="button" class="btn btn-primary">Modifier</button>
                <button type="button" class="btn btn-primary">Supprimer</button>
                <button type="button" class="btn btn-primary">Retour</button>
            </fieldset>
        </form>
    </div>
</body>