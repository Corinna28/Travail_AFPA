<?php
// Récupération des valeurs :
$id = (isset($_POST['id']) && $_POST['id'] != "") ? $_POST['id'] : Null;
$title = (isset($_POST['title']) && $_POST['title'] != "") ? $_POST['title'] : Null;
$artist = (isset($_POST['artist']) && $_POST['artist'] != "") ? $_POST['artist'] : Null;
$year = (isset($_POST['year']) && $_POST['year'] != "") ? $_POST['year'] : Null;
$genre = (isset($_POST['genre']) && $_POST['genre'] != "") ? $_POST['genre'] : Null;
$label = (isset($_POST['label']) && $_POST['label'] != "") ? $_POST['label'] : Null;
$price = (isset($_POST['price']) && $_POST['price'] != "") ? $_POST['price'] : Null;


// En cas d'erreur, on renvoie vers le formulaire
if ($title == Null || $artist == Null || $year == Null  || $genre == Null  || $label == Null  || $price == Null ) {
    header("Location: disc_form.php?id=" . $id);
}

// Si la vérification des données est ok :
require "db.php";
$db = connexionBase();

try {
    // Construction de la requête UPDATE sans injection SQL :
    $requete = $db->prepare("UPDATE disc SET disc_title=:title,artist_id=:artist,disc_year=:year,disc_genre=:genre,disc_label=:label,disc_price=:price WHERE disc.disc_id=:id");
    $requete->bindValue(":id", $id);
    $requete->bindValue(":title", $title);
    $requete->bindValue(":artist", $artist);
    $requete->bindValue(":year", $year);
    $requete->bindValue(":genre", $genre);
    $requete->bindValue(":label", $label);
    $requete->bindValue(":price", $price);

    $requete->execute();
    $requete->closeCursor();
} catch (Exception $e) {
    echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
    die("Fin du script (script_disc_modif.php)");
}

// Si OK: redirection vers la page disc_detail.php
header("Location: disc_detail.php?id=" . $id);
exit;
