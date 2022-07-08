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
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `date_time_creation` datetime NOT NULL,
  `date_time_edit` datetime DEFAULT NULL,
  `mdp` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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

-- --------------------------------------------------------

--
-- Structure de la table `playlist`
--

DROP TABLE IF EXISTS `playlist`;
CREATE TABLE IF NOT EXISTS `playlist` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `libelle` text NOT NULL,
  `commentaire` text NOT NULL,
  `date_time_publication` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image_fond` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `playlist`
--

INSERT INTO `playlist` (`id`, `nom`, `libelle`, `commentaire`, `date_time_publication`, `image_fond`) VALUES
(1, 'Électronique', 'electro', 'La musique électronique est un type de musique conçu dans les années 1950 avec des générateurs de signaux et de sons synthétiques. Avant de pouvoir être utilisée en temps réel, elle a été enregistrée sur bande magnétique, ce qui permettait aux compositeurs de manier aisément les sons, par exemple dans l\'utilisation de boucles répétitives superposées.', '2022-04-20 19:26:28', 'https://img.huffingtonpost.com/asset/610aadaa260000899b524c17.jpeg?cache=gzPHxphoxV&ops=1200_630'),
(2, 'Jeux Vidéos', 'videogames', 'rt tttttfzeriojhiozr hiorjh erioghroefhr iofjhrio grjhirekfjri erigjri jregierjh righri rjiofvrjei oghgior .', '2022-04-20 19:32:14', 'https://images.ctfassets.net/rporu91m20dc/epGEe9WPkXh094uU9JS8p/95abba4923def0de93001b420815c4c4/DE_The_DOOM_Slayer_HERO_1920x870.jpg'),
(3, 'Nintendo', 'nintendo', 'rgerkopg jerpiogjr eijreij eriogjh reropej iorgj eriopjeriog jijeri oerhgio erjh er gikerig jeri erj irej geri gjrioe.', '2022-04-20 19:56:37', 'https://fs-prod-cdn.nintendo-europe.com/media/images/08_content_images/others_2/career_3/CI_Nintendo_Jobs_Overview.jpg'),
(5, 'Radios GTA 5', 'gta5radio', 'ezofjerigjigjer irtjgio rtjiortj tjh rtjrt gt lktrol^jrto tjoprtjko jrtojh t.', '2022-04-20 23:02:53', 'https://m.media-amazon.com/images/M/MV5BZTRlMWY2YmYtMzQzNC00NGJhLWEyMGQtZGE1ZGViOTE0MTk3XkEyXkFqcGdeQXVyNjc0NTIwNTU@._V1_.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
