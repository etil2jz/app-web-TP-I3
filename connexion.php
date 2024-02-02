<?php
    $serveur = "127.0.0.1:3307";
    $utilisateur = "site_backend";
    $mot_de_passe = "MonSuperMdp";
    $base_de_donnees = "thunderdome24";

    $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

    if ($connexion->connect_error) {
        die("Erreur de connexion à la base de données : " . $connexion->connect_error);
    }
?>
