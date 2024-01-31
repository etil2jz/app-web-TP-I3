<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Thunderdome 2024 – Disponibilité</title>
        <link rel="shortcut icon" type="image/webp" href="./img/favicon.webp">
        <link rel="stylesheet" type="text/css" href="https://fonts.cdnfonts.com/css/gravity">
        <link rel="stylesheet" type="text/css" href="https://fonts.cdnfonts.com/css/captoon-es">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
    </head>
    <body>
        <img id="banner" src="./img/banner.webp" alt="Thunderdome 2024">
        <nav>
            <a href="./index.html">Accueil</a>
            <a href="./disponibilite.php">Disponibilite</a>
            <a href="./reservation.html">Reserve ta place</a>
            <a href="./auth.html">Login</a>
            <a href="#bas_de_page">Contact</a>
        </nav>
        <br><br>
        <div id="infobox">
            <a id="visitors">Nombre de visiteurs:  </a>
            <ul id="planning">
                <li>Vendredi: 22h - 07h</li>
                <li>Samedi: 14h - 20h</li>
                <li>Dimanche: 14h - 20h</li>
            </ul>
        </div>
        <div id="dispo">
            <table>
                <tr>
                    <th>Jour</th>
                    <th>Places totales</th>
                    <th>Places restantes</th>
                </tr>
                <tr>
                    <th>Vendredi</th>
                    <th>10000</th>
                    <th>
                        <?php
                        include "./connexion.php";
                        $requete = "SELECT capacite FROM planning WHERE jour = 'vendredi'";
                        $resultat = $connexion->query($requete);

                        if ($resultat) {
                            $row = $resultat->fetch_assoc();
                            echo $row['capacite'];
                        } else {
                            echo "Erreur lors de l'exécution de la requête : " . $connexion->error;
                        }

                        $connexion->close();
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>Samedi</th>
                    <th>18000</th>
                    <th>
                        <?php
                        include "./connexion.php";
                        
                        $requete = "SELECT capacite FROM planning WHERE jour = 'samedi'";
                        $resultat = $connexion->query($requete);

                        if ($resultat) {
                            $row = $resultat->fetch_assoc();
                            echo $row['capacite'];
                        } else {
                            echo "Erreur lors de l'exécution de la requête : " . $connexion->error;
                        }

                        $connexion->close();
                        ?>
                    </th>
                </tr>
                <tr>
                    <th>Dimanche</th>
                    <th>25000</th>
                    <th>
                        <?php
                        include "./connexion.php";
                        $requete = "SELECT capacite FROM planning WHERE jour = 'dimanche'";
                        $resultat = $connexion->query($requete);

                        if ($resultat) {
                            $row = $resultat->fetch_assoc();
                            echo $row['capacite'];
                        } else {
                            echo "Erreur lors de l'exécution de la requête : " . $connexion->error;
                        }

                        $connexion->close();
                        ?>
                    </th>
                </tr>
            </table>
        </div>
        <br>
        <footer>
            <hr>
            <h2 id="bas_de_page">Contact</h2>
            <div>
                <a id="mail" href="mailto:info@thunderdome.com">info@thunderdome.com</a><br>
                <a id="phone" href="tel:+31226032014">+31226032014</a><br>
                <a href="https://www.instagram.com/thunderdome/"><img id="instagram" src="./img/instagram.webp" alt="Instagram"></a>
                <a href="https://www.facebook.com/ThunderdomeIsYou/"><img id="facebook" src="./img/facebook.webp" alt="Facebook"></a>
            </div>
        </footer>
        <script type="text/javascript" src="./js/visitors.js"></script>
    </body>
</html>
