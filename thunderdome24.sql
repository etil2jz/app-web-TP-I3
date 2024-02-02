-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : ven. 02 fév. 2024 à 16:20
-- Version du serveur : 11.2.2-MariaDB
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `thunderdome24`
--

-- --------------------------------------------------------

--
-- Structure de la table `planning`
--

DROP TABLE IF EXISTS `planning`;
CREATE TABLE IF NOT EXISTS `planning` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jour` varchar(8) NOT NULL,
  `capacite` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `planning`
--

INSERT INTO `planning` (`id`, `jour`, `capacite`) VALUES
(1, 'vendredi', 9999),
(2, 'samedi', 18000),
(3, 'dimanche', 25000);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id_reservation` int(11) NOT NULL AUTO_INCREMENT,
  `nom_reservation` varchar(64) NOT NULL,
  `type_passe` varchar(6) NOT NULL,
  `jour_reservation` varchar(8) NOT NULL,
  `nombre_places` int(11) NOT NULL,
  `commentaire` text DEFAULT NULL,
  PRIMARY KEY (`id_reservation`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `nom_reservation`, `type_passe`, `jour_reservation`, `nombre_places`, `commentaire`) VALUES
(7, 'Blanchot', 'vip', 'vendredi', 1, '');

-- --------------------------------------------------------

--
-- Structure de la table `reservation_utilisateur`
--

DROP TABLE IF EXISTS `reservation_utilisateur`;
CREATE TABLE IF NOT EXISTS `reservation_utilisateur` (
  `id_reservation` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_reservation`,`id_user`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(48) NOT NULL,
  `nom` varchar(64) NOT NULL,
  `prenom` varchar(64) NOT NULL,
  `mot_de_passe` char(32) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation_utilisateur`
--
ALTER TABLE `reservation_utilisateur`
  ADD CONSTRAINT `reservation_utilisateur_ibfk_1` FOREIGN KEY (`id_reservation`) REFERENCES `reservation` (`id_reservation`) ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_utilisateur_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id_user`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
