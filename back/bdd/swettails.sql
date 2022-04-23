-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 23 avr. 2022 à 01:40
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `swettails`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `message_pub` text NOT NULL,
  `date_pub` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

DROP TABLE IF EXISTS `demande`;
CREATE TABLE IF NOT EXISTS `demande` (
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adress` text NOT NULL,
  `demande` text NOT NULL,
  `date_env` timestamp NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_animal` int(11) NOT NULL,
  `nom_animal` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `f_animaux`
--

DROP TABLE IF EXISTS `f_animaux`;
CREATE TABLE IF NOT EXISTS `f_animaux` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sujet` text NOT NULL,
  `contenu` text NOT NULL,
  `date_heure_creation` datetime NOT NULL,
  `date_edit` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `f_animaux_categorie`
--

DROP TABLE IF EXISTS `f_animaux_categorie`;
CREATE TABLE IF NOT EXISTS `f_animaux_categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_animal` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_souscategorie` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `f_animaux_categorie`
--

INSERT INTO `f_animaux_categorie` (`id`, `id_animal`, `id_categorie`, `id_souscategorie`) VALUES
(1, 5, 2, 19),
(2, 6, 2, 19),
(3, 7, 2, 19),
(4, 8, 2, 19),
(5, 9, 2, 19),
(6, 10, 2, 19),
(7, 11, 2, 19),
(8, 12, 2, 19),
(9, 13, 2, 19),
(10, 14, 2, 19),
(11, 15, 2, 19),
(12, 16, 2, 19),
(13, 17, 2, 19),
(14, 18, 2, 19),
(15, 19, 2, 19),
(16, 20, 2, 19),
(17, 21, 2, 19),
(18, 22, 2, 19),
(19, 23, 5, 14),
(20, 24, 5, 14),
(21, 25, 5, 14),
(22, 26, 5, 14),
(23, 27, 1, 18),
(24, 28, 5, 14),
(25, 29, 5, 15),
(26, 29, 5, 15),
(27, 29, 5, 15),
(28, 30, 5, 15),
(29, 31, 5, 15),
(30, 32, 5, 15),
(31, 33, 5, 15),
(32, 34, 5, 15),
(33, 35, 5, 15),
(34, 36, 5, 15),
(35, 37, 5, 15),
(36, 38, 5, 14),
(37, 39, 5, 14),
(38, 40, 5, 14),
(39, 41, 3, 7),
(40, 42, 3, 9),
(41, 43, 3, 8),
(42, 44, 3, 8),
(43, 45, 3, 8),
(44, 46, 3, 8),
(45, 47, 3, 7),
(46, 48, 3, 7),
(47, 49, 3, 7),
(48, 50, 3, 7),
(49, 51, 3, 9),
(50, 52, 3, 8),
(51, 53, 3, 8),
(52, 54, 5, 15),
(53, 55, 5, 15),
(54, 56, 5, 14);

-- --------------------------------------------------------

--
-- Structure de la table `f_categories`
--

DROP TABLE IF EXISTS `f_categories`;
CREATE TABLE IF NOT EXISTS `f_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `f_categories`
--

INSERT INTO `f_categories` (`id`, `nom`) VALUES
(1, 'Chiens'),
(2, 'Chats'),
(3, 'Equides'),
(4, 'NAC'),
(5, 'Caprin'),
(6, 'Ovin');

-- --------------------------------------------------------

--
-- Structure de la table `f_souscategories`
--

DROP TABLE IF EXISTS `f_souscategories`;
CREATE TABLE IF NOT EXISTS `f_souscategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categorie` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `f_souscategories`
--

INSERT INTO `f_souscategories` (`id`, `id_categorie`, `nom`) VALUES
(7, 3, 'Ane'),
(8, 3, 'Chevale'),
(9, 3, 'Poney'),
(10, 4, 'Oiseaux'),
(11, 4, 'Lapin'),
(12, 4, 'Ecureille'),
(13, 4, 'Hamster'),
(14, 5, 'Bouc'),
(15, 5, 'Chevre'),
(16, 6, 'Mouton'),
(17, 6, 'Belier'),
(18, 1, 'chien'),
(19, 2, 'chat');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `id_animal` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
