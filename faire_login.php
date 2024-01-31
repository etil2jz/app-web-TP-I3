<?php
    //session_start();
    //ini_set('session.gc_maxlifetime', 3600);
    //session_set_cookie_params(3600);
    include "./connexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];

    $md5_mdp = md5($mdp);

    $requete = "SELECT id_user FROM utilisateur WHERE login = '$login' AND mot_de_passe = '$md5_mdp'";
    $resultat_requete = $connexion->query($requete);

    if ($resultat_requete->num_rows == 1) {
        //$user = $resultat_requete->fetch_assoc();
        //$_SESSION['id_user'] = $user['id_user'];
        //$_SESSION['login'] = $user['login']; // pas besoin(?)
    } else {
        echo "Erreur lors de l'authentification : " . $connexion->error;
        $connexion->close();
        exit();
    }

    $connexion->close();

    header("Location: reservation.html");
}
?>
