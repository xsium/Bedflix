<?php
    try {
        // Exécution de la requête SQL SELECT
        //$reponse = $bdd->query('SELECT FROM films(id_film, titre_film, description_film, affiche_film, lien_film, duree_film)');
        echo "récupération de la liste des films";
    } catch(Exception $e) {
        // Affichage d’une exception en cas d’erreur
        die("Erreur: " . $e->getMessage());
    }
?>