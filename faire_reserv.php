<?php
    include "./connexion.php";

    $nom = $_POST['nom'];
    $type_passe = $_POST['type_passe'];
    $jours = $_POST['jours'];
    $quantite = $_POST['quantite'];
    $commentaire = $_POST['commentaire'];

    $requete = "INSERT INTO reservation (nom_reservation, type_passe, jour_reservation, nombre_places, commentaire) VALUES ";

    foreach ($jours as $jour) {
        $requete .= "('$nom', '$type_passe', '$jour', '$quantite', '$commentaire'), ";
    }

    $requete = rtrim($requete, ', ');

    if ($connexion->query($requete) === true) {
        foreach ($jours as $jour) {
            $update_quantite = "UPDATE planning SET capacite = capacite - $quantite WHERE jour = '$jour'";
            if ($connexion->query($update_quantite) !== true) {
                echo "Erreur lors de la mise à jour de la capacité dans le planning : " . $connexion->error;
            }
        }
    } else {
        echo "Erreur lors de l'enregistrement : " . $connexion->error;
    }

    $connexion->close();

    header("Location: merci.html");
?>
