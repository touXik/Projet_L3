-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 08 mai 2022 à 02:28
-- Version du serveur : 8.0.29-0ubuntu0.20.04.2
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `swettails`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `message_pub` text NOT NULL,
  `date_pub` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `Nom`, `email`, `sujet`, `message_pub`, `date_pub`) VALUES
(73, 'tt', 'tt@t', 'ttt', 'tttt', '2022-04-28 19:09:03'),
(74, 'tt', 'tt@t', 'ttt', 'tttt', '2022-04-28 19:09:25');

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adress` text NOT NULL,
  `demande` text NOT NULL,
  `date_env` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int NOT NULL,
  `id_animal` int NOT NULL,
  `nom_animal` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `f_animaux`
--

CREATE TABLE `f_animaux` (
  `id` int NOT NULL,
  `sujet` text NOT NULL,
  `contenu` text NOT NULL,
  `date_heure_creation` datetime NOT NULL,
  `date_edit` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



-- --------------------------------------------------------

--
-- Structure de la table `f_animaux_categorie`
--

CREATE TABLE `f_animaux_categorie` (
  `id` int NOT NULL,
  `id_animal` int NOT NULL,
  `id_categorie` int NOT NULL,
  `id_souscategorie` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(54, 56, 5, 14),
(55, 58, 2, 19),
(56, 59, 2, 19),
(57, 60, 2, 19),
(58, 61, 2, 19),
(59, 62, 2, 19);

-- --------------------------------------------------------

--
-- Structure de la table `f_categories`
--

CREATE TABLE `f_categories` (
  `id` int NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `f_souscategories` (
  `id` int NOT NULL,
  `id_categorie` int NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `images` (
  `id` int NOT NULL,
  `img` varchar(255) NOT NULL,
  `id_animal` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `inf`
--

CREATE TABLE `inf` (
  `n_id` int NOT NULL,
  `notifications_name` text NOT NULL,
  `message` text NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `lastname`, `firstname`, `email`, `password`, `date`) VALUES
(1, 't', 't', 'a@a', '$2y$12$vEG1BCI48rPrkqBMK7AK4uToPCSq/APDBgQ/5vHnov7NuweAsxOh2', '2022-05-06 17:02:59');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `f_animaux`
--
ALTER TABLE `f_animaux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `f_animaux_categorie`
--
ALTER TABLE `f_animaux_categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `f_categories`
--
ALTER TABLE `f_categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `f_souscategories`
--
ALTER TABLE `f_souscategories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inf`
--
ALTER TABLE `inf`
  ADD PRIMARY KEY (`n_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `f_animaux`
--
ALTER TABLE `f_animaux`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT pour la table `f_animaux_categorie`
--
ALTER TABLE `f_animaux_categorie`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT pour la table `f_categories`
--
ALTER TABLE `f_categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `f_souscategories`
--
ALTER TABLE `f_souscategories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `inf`
--
ALTER TABLE `inf`
  MODIFY `n_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
