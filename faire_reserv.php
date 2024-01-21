<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include "connexion.php";

        $nom = $_POST['nom'];
        $type_passe = $_POST['type_passe'];
        $jours = $_POST['jours'];
        $quantite = $_POST['quantite'];
        $commentaire = $_POST['commentaire'];

        foreach ($jours as $jour) {
            $requete = "INSERT INTO reservation(nom_reservation, type_passe, jour_reservation, nombre_places, commentaire) VALUES (?, ?, ?, ?, ?)";
            $stmt = $connexion->prepare($requete);

            if ($stmt == false) {
                die("Erreur de préparation de la requête : " . $connexion->error);
            }

            $stmt->bind_param("sssis", $nom, $type_passe, $jour, $quantite, $commentaire);
            $resultat = $stmt->execute();

            if ($resultat === false) {
                die("Erreur lors de l'exécution de la requête : " . $stmt->error);
            }

            $stmt->close();
        }

        $connexion->close();

        header("Location: index.html");
        exit();
    }
?>
