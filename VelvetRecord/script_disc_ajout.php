<?php
include('db.php');
var_dump($_POST);

$title = $_POST['title1'];
$artist = $_POST['artist1'];
$year = $_POST['year1'];
$genre = $_POST['genre1'];
$label = $_POST['label1'];
$price = $_POST['price1'];
$picture = $_FILES['picture'];

// https://yard.onl/sitelycee/cours/php/Lenvoidefichiers.html information 

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur

if (isset($_FILES['monfichier']) and $_FILES['monfichier']['error'] == 0) {

    // Testons si le fichier n'est pas trop gros

    if ($_FILES['monfichier']['size'] <= 1000000) {

        // Testons si l'extension est autorisée

        $infosfichier = pathinfo($_FILES['monfichier']['name']);

        $extension_upload = $infosfichier['extension'];

        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');

        if (in_array($extension_upload, $extensions_autorisees)) {

            // On peut valider le fichier et le stocker définitivement

            move_uploaded_file($_FILES['monfichier']['tmp_name'], 'Assets/images' . basename($_FILES['monfichier']['name']));

            echo "L'envoi a bien été effectué !";
        }
    }
}





// Pour rappel, une redirection s'effectue à l'aide de la commande suivante :

header("Location: discs.php");
exit();
