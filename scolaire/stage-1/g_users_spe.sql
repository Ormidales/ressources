-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u9
-- http://www.phpmyadmin.net
--
-- Client :  mysql2.prosoluce.fr
-- Généré le :  Mer 23 Juin 2021 à 12:03
-- Version du serveur :  10.1.48-MariaDB-0+deb9u2
-- Version de PHP :  5.6.40-0+deb8u12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `asterisk`
--

-- --------------------------------------------------------

--
-- Structure de la table `g_users_spe`
--

CREATE TABLE IF NOT EXISTS `g_users_spe` (
`id` int(11) NOT NULL,
  `id_bien` int(11) DEFAULT NULL,
  `user` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `default_caller_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permit_change_caller_id` tinyint(1) NOT NULL DEFAULT '0',
  `permit_change_messages` tinyint(1) NOT NULL DEFAULT '0',
  `conf_gen` datetime NOT NULL,
  `bill_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ntp` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `prov_phonebook` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=214 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `g_users_spe`
--
ALTER TABLE `g_users_spe`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `user` (`user`), ADD KEY `id_bien` (`id_bien`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `g_users_spe`
--
ALTER TABLE `g_users_spe`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=214;
--
-- Contraintes pour les tables exportées
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
