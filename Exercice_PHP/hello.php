<?php
    // Fichier 'hello.php'

    function writeMessage($text) {
    $html = "<h1>".$text."</h1>";
    echo $html;
    } ;

    if (file_exists("chemin/entete.php") ) 
    {
        include("chemin/entete.php");
    } 
    else 
    {
        // Erreur (à gérer)
    };

?>