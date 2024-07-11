-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 06 avr. 2023 à 09:56
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `location_voiture`
--

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id_membre` int NOT NULL AUTO_INCREMENT,
  `nom` char(20) NOT NULL,
  `age` int DEFAULT (18),
  `prenom` char(50) NOT NULL,
  `tel` char(15) NOT NULL,
  `email` varchar(75) DEFAULT NULL,
  `pwrd` varchar(55) NOT NULL,
  `sexe` char(8) NOT NULL,
  `est_admin` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id_membre`),
  UNIQUE KEY `tel` (`tel`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `nom`, `age`, `prenom`, `tel`, `email`, `pwrd`, `sexe`, `est_admin`) VALUES
(1, 'amchich', 18, 'hasnae', '60606060', 'hasna@mishka.masha', '5c0b1b8258b790f7a12528937165ad7c', 'feminin', 1),
(2, 'toubani', 25, 'pedri', '2147483647', 'fadre6@gmail.com', 'a890fef7a7c62f6ea1aa814caf894e65', 'masculin', 0),
(3, 'toubani', 31, 'pedri', '650518439', 'pedri@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'masculin', 0),
(4, 'badr', 25, 'toubani', '06505518439', 'badr@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'masculin', 0);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id_reservation` int NOT NULL AUTO_INCREMENT,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `montant` decimal(10,2) NOT NULL,
  `id_membre` int NOT NULL,
  `matricule` char(30) DEFAULT NULL,
  `etat` char(15) NOT NULL DEFAULT 'en cour',
  PRIMARY KEY (`id_reservation`),
  KEY `id_membre` (`id_membre`),
  KEY `matricule` (`matricule`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `date_debut`, `date_fin`, `montant`, `id_membre`, `matricule`, `etat`) VALUES
(6, '2023-04-20', '2023-04-29', '1620.00', 4, '125477A12', 'annulerPC'),
(7, '2023-04-08', '2023-04-15', '1960.00', 4, '12548A12', 'annulerPC'),
(9, '2023-04-08', '2023-04-15', '1960.00', 4, '12548A12', 'annulerPC'),
(10, '2023-04-15', '2023-04-29', '2520.00', 4, '125477A12', 'annulerPC'),
(11, '2023-04-21', '2023-04-29', '2240.00', 4, '12548A12', 'en cour'),
(12, '2023-05-06', '2023-05-27', '5880.00', 4, '12548A12', 'en cour');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

DROP TABLE IF EXISTS `voiture`;
CREATE TABLE IF NOT EXISTS `voiture` (
  `matricule` char(30) NOT NULL,
  `marque` char(45) NOT NULL,
  `prix_jour` decimal(10,2) NOT NULL,
  `description` text,
  `kilometrage` int DEFAULT NULL,
  `modele` int DEFAULT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`matricule`, `marque`, `prix_jour`, `description`, `kilometrage`, `modele`) VALUES
('12548A12', 'FERRARI', '280.00', '2places8ch', 3446834, 1996),
('125477A12', 'TWINGO', '180.00', 'essences\r\n2places\r\n8ch', 20, 2023),
('12548A120', 'VOLKSWAGEN', '390.00', '4x4\r\nTWAREG', 29, 2023);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
