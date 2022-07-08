-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u9
-- http://www.phpmyadmin.net
--
-- Client :  mysql2.prosoluce.fr
-- Généré le :  Mer 23 Juin 2021 à 12:06
-- Version du serveur :  10.1.48-MariaDB-0+deb9u2
-- Version de PHP :  5.6.40-0+deb8u12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `provisioning`
--

-- --------------------------------------------------------

--
-- Structure de la table `phone_book`
--

CREATE TABLE IF NOT EXISTS `phone_book` (
`id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `home_phone` varchar(20) NOT NULL,
  `mobile_phone` varchar(20) NOT NULL,
  `work_phone` varchar(20) NOT NULL,
  `ring_tone` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3238 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user_phonebook`
--

CREATE TABLE IF NOT EXISTS `user_phonebook` (
  `id_cli` int(11) NOT NULL,
  `id_phonebook` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `phone_book`
--
ALTER TABLE `phone_book`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_phonebook`
--
ALTER TABLE `user_phonebook`
 ADD UNIQUE KEY `id_user_phonebook` (`id_cli`,`id_phonebook`), ADD KEY `fk_user_phonebook_phone_book` (`id_phonebook`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `phone_book`
--
ALTER TABLE `phone_book`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3238;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `user_phonebook`
--
ALTER TABLE `user_phonebook`
ADD CONSTRAINT `fk_user_phonebook_asterisk_g_users_spe` FOREIGN KEY (`id_cli`) REFERENCES `asterisk`.`g_users_spe` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `fk_user_phonebook_phone_book` FOREIGN KEY (`id_phonebook`) REFERENCES `phone_book` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
