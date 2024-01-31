<?php
    include "./connexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mdp = $_POST['mdp'];

    $md5_mdp = md5($mdp);

    $verif_doublon_login = "SELECT id_user FROM utilisateur WHERE login = '$login'";
    $resultat_verif = $connexion->query($verif_doublon_login);

    if ($resultat_verif->num_rows > 0) {
        echo "Identifiant déjà utilisé. Essayez-en un autre.";
        $connexion->close();
        exit();
    } else {
        $requete = "INSERT INTO utilisateur (login, nom, prenom, mot_de_passe) VALUES ('$login', '$nom', '$prenom', '$md5_mdp')";

        if ($connexion->query($requete) === true) {
            //plus tard(?)
        } else {
            echo "Erreur lors de l'inscription : " . $connexion->error;
        }
    }

    $connexion->close();

    header("Location: login.html");
}
?>
