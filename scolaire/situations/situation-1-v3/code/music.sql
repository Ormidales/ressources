-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 23 mai 2022 à 22:47
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `music-app`
--

-- --------------------------------------------------------

--
-- Structure de la table `music`
--

DROP TABLE IF EXISTS `music`;
CREATE TABLE IF NOT EXISTS `music` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `playlist` text NOT NULL,
  `link` text NOT NULL,
  `date_time_publication` text NOT NULL,
  `createur` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `music`
--

INSERT INTO `music` (`id`, `titre`, `playlist`, `link`, `date_time_publication`, `createur`) VALUES
(98, 'Metal Gear Rising: Revengeance - The Only Thing I Know For Real (Samuel Boss Battle) Extended', 'videogames', 'https://www.youtube.com/watch?v=FhHeGZoWl0g&quot;', '2022-05-23 23:36:15', ''),
(100, 'Lady Sounds Better With You - Stardust, Modjo (Mashup)', 'electro', 'https://www.youtube.com/watch?v=LghKgWbVcIw&quot;&quot;', '2022-05-24 00:10:22', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
