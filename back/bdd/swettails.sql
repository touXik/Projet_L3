-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 30 juin 2022 à 20:14
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

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

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `message_pub` text NOT NULL,
  `date_pub` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

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
  `date_env` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_animal` int(11) NOT NULL,
  `nom_animal` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`nom`, `prenom`, `email`, `adress`, `demande`, `date_env`, `id`, `id_animal`, `nom_animal`) VALUES
('r', 'r', 'r@r', 'dihiamerar556@gmail.com', 'fffgggfffff', '2022-06-30 14:21:07', 12, 70, 'abdenor');

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
) ENGINE=MyISAM AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `f_animaux`
--

INSERT INTO `f_animaux` (`id`, `sujet`, `contenu`, `date_heure_creation`, `date_edit`) VALUES
(72, '  Namnam', 'MÃ¢le.    2 ans   .Namnam semble avoir vÃ©cu une vie difficile dehors... Il est tout de mÃªme avenant et cÃ¢lin. Il n\'aime pas les autres chats.', '2022-06-30 17:22:01', '2022-06-30 17:59:58'),
(71, 'Macha', 'Femmele.\r\n12.02.2022: Macha est une minette affectueuse mais elle a aussi du caractÃ¨re. Elle est plutÃ´t calme, une vie en appartement ou en maison devrait pouvoir Ãªtre envisageable s \'il n\'est pas trop petit.', '2022-06-30 17:05:51', '2022-06-30 17:05:51'),
(73, 'Luna', 'Femelle\\5 mois\\\r\nest tout juste arrivÃ©e de fourriÃ¨re. Pour le moment elle est trÃ¨s craintive et sur la dÃ©fensive. Il faudra beaucoup de patience avec cette minette pour la mettre Ã  l\'aise.', '2022-06-30 17:25:36', '2022-06-30 17:25:36'),
(74, 'Lisa', ' Femelle\\est une mamie arrivÃ©e de fourriÃ¨re. Elle est un peu perdue pour le moment et Ã  l\'air douloureuse.', '2022-06-30 17:28:42', '2022-06-30 17:28:42'),
(75, ' Djak', ' MÃ¢le\\Djak est un chien qui a mal commencÃ© sa vie (Ã  l\'attache avec peu de stimulations agrÃ©ables). RÃ©sultat, il est trÃ¨s mÃ©fiant envers les inconnus et peut se montrer virulent dans son box. Pour autant, une fois qu\'il connait la personne, c\'est un chien adorable, joueur ++, affectueux et qui adore profiter de longues balades. Un vrai clown quand il s\'agit de se baigner. Djak est sociable avec certains congÃ©nÃ¨res. Il ne pourra pas vivre avec des enfants mais il aura une confiance entiÃ¨re auprÃ¨s de son humain. Un chien qui mÃ©rite de trouver SA famille mais il faudra venir le rencontrer plusieurs fois.', '2022-06-30 17:32:32', '2022-06-30 20:19:38'),
(88, 'Monir', 'MÃ¢le\\ Monir est revenu d\'une premiÃ¨re famille car s\'attaquait aux chats, il ne sera donc pas placÃ© en famille qui en a. Ses crises se sont calmÃ©es car il Ã©tait sorti au moins 2h par jour, mais elles revenaient lors de bouleversements de son quotidien, elles pourraient donc Ãªtre liÃ©es Ã  son anxiÃ©tÃ©. Un nouveau traitement est testÃ© sur lui actuellement. Il reste un gros loulou extrÃªmement cÃ¢lin et proche de l\'Homme.', '2022-06-30 20:22:48', '2022-06-30 20:22:48'),
(76, 'Simo', 'MÃ¢le\\Simo est un amour. Il a des soucis de santÃ© qui n\'ont jamais Ã©tÃ© soignÃ©s par son ancien propriÃ©taire qui a prÃ©fÃ©rÃ© se dÃ©barrasser de lui...\r\nC\'est un adorable petit loulou qui malgrÃ© ses soucis est une vÃ©ritable perle. Il a dÃ©jÃ  Ã©tÃ© traitÃ© mais des examens sont en cours pour savoir ce que nous devons lui administrer pour la suite.', '2022-06-30 17:35:31', '2022-06-30 17:35:31'),
(77, 'LÃ©a', 'LÃ©a est arrivÃ©e chez nous il y a un an. Câ€™est une petite lapine assez craintive quand elle ne connaÃ®t pas, mais affectueuse une fois en confiance.\\\r\nÃ€ lâ€™aise avec ses congÃ©nÃ¨res chiens, chats et lapins.\\\r\nStÃ©rilisÃ©e\\\r\nVaccinÃ©e.', '2022-06-30 17:43:43', '2022-06-30 17:43:43'),
(78, ' Nono', 'MÃ¢le\\ il apprÃ©cie parfois les ecureuilles et parfois non mais avec du temps il devrait s\'acclimater Ã  certains.', '2022-06-30 17:47:35', '2022-06-30 20:30:46'),
(79, '  Bily', 'Femelle\\ 4 mois\\ Un vrai boute-en-train qui a souvent envie de jouer et faire la fofolle.', '2022-06-30 17:49:11', '2022-06-30 20:26:38'),
(80, ' Mido', 'Mido a eu une allergie aux puces avant sa prise en charge qui a Ã©tÃ© traitÃ© au refuge.', '2022-06-30 17:51:40', '2022-06-30 20:42:18'),
(81, ' Sami', 'MÃ¢le\\ Skitty merveilleux compagnon de vie, sensible et affectueux. Comme tout Ã©quidÃ©, câ€™est un gÃ©ant au cÅ“ur tendre dont il ne faut pas sous-estimer les besoins qui sont proportionnels Ã  sa taille', '2022-06-30 17:53:59', '2022-06-30 20:45:15'),
(90, 'Mililia', 'Femelle\\Mililia calme, trÃ¨s gentille et cÃ¢line.', '2022-06-30 20:39:31', '2022-06-30 20:39:31'),
(83, 'Bell', 'Bell\r\n vient d\'arriver de fourriÃ¨re, nous ne connaissons pas son passÃ©. il Ã  l\'air bien dÃ©gourdi. Il aura besoin d\'un extÃ©rieur.', '2022-06-30 20:03:22', '2022-06-30 20:03:22'),
(84, 'Mimi', 'femelle\\\r\n Mimi aura besoin d\'une famille calme et sans enfants pour Ã©voluer. Une fois le stress passÃ©, elle devrait se rÃ©vÃ©ler mais pour l\'instant elle reste cachÃ©e.', '2022-06-30 20:08:34', '2022-06-30 20:08:34'),
(85, 'Roni', ' MÃ¢le\\\r\n Roni est cÃ¢lin avec l\'humain. Pour l\'instant il a du mal Ã  cohabiter avec certains .beliers', '2022-06-30 20:11:11', '2022-06-30 20:11:11'),
(86, 'Nino', ' MÃ¢le\\ Nino a Ã©tÃ© abandonnÃ© Ã  la fourriÃ¨re mais nous ne savons pas pourquoi. C\'est un gros mouton avec du caractÃ¨re. Il aura besoin d\'une famille qui s\'occupe.', '2022-06-30 20:16:30', '2022-06-30 20:16:30'),
(87, 'Rider', ' MÃ¢le\\ 1 an \\Rider est revenu au refuge suite Ã  un incident lors d\'une balade avec l\'enfant de la famille. Pour cette raison, nous ne le placerons pas avec de jeunes enfants.', '2022-06-30 20:19:03', '2022-06-30 20:19:03'),
(89, 'Adjas', 'MÃ¢le\\ 4 ans\\Adjas a surement vÃ©cu toute sa vie dehors et donc aura besoin de temps pour apprendre Ã  partager avec vous et chanter en canon en toute harmonie ', '2022-06-30 20:34:19', '2022-06-30 20:34:19'),
(91, 'Marty', 'Femelle\\ Marty est arrivÃ©e chez nous en provenance d\'un autre refuge de la rÃ©gion, afin de lui proposer une nouvelle chance d\'adoption par chez nous !', '2022-06-30 20:50:56', '2022-06-30 20:50:56'),
(92, 'Milou', 'MÃ¢le \\a Ã©tÃ© trouvÃ© en divagation, pas identifiÃ© et pas rÃ©clamÃ©, il passe Ã  l\'adoption aprÃ¨s avoir effectuÃ© la visite vÃ©tÃ©rinaire. Il est trÃ¨s rÃ©servÃ© pour le moment, il lui faudra une famille patiente pour lui laisser le temps de se dÃ©voiler.', '2022-06-30 20:53:45', '2022-06-30 20:53:45'),
(93, 'Malia', 'Femelle \\5 ans \\Malia nÃ©e dans la rue,elle a Ã©tÃ© socialisÃ© et nourrie par l\'humain mais reste encore sur la rÃ©serve.\r\nCurieuse et observatrice elle aime prendre de la hauteur afin d\'analyser ce qui l\'entoure .', '2022-06-30 20:56:47', '2022-06-30 20:56:47'),
(94, 'Franko', ' MÃ¢le \\ 6 ans\\ il aura besoin de calme, de patience et d\'investissement de la part de sa famille pour progresser et se sentir Ã  l\'aise.', '2022-06-30 20:59:52', '2022-06-30 20:59:52'),
(95, 'Mariya', 'Femelle\\ Elle se laisse nÃ©anmoins approcher, manipuler elle aura tout Ã  apprendre de la vie :jeu, propretÃ©,...', '2022-06-30 21:04:33', '2022-06-30 21:04:33');

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
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;

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
(59, 62, 2, 19),
(60, 63, 1, 18),
(61, 64, 2, 19),
(62, 65, 2, 19),
(63, 66, 2, 19),
(64, 67, 2, 19),
(65, 68, 2, 19),
(66, 69, 2, 19),
(67, 70, 2, 19),
(68, 71, 2, 19),
(69, 72, 2, 19),
(70, 73, 2, 19),
(71, 74, 1, 18),
(72, 75, 1, 18),
(73, 76, 1, 18),
(74, 77, 4, 11),
(75, 78, 4, 12),
(76, 79, 4, 13),
(77, 80, 3, 7),
(78, 81, 3, 8),
(79, 82, 3, 9),
(80, 83, 6, 17),
(81, 84, 6, 16),
(82, 85, 6, 17),
(83, 86, 6, 16),
(84, 87, 2, 19),
(85, 88, 1, 18),
(86, 89, 4, 10),
(87, 90, 3, 9),
(88, 91, 5, 15),
(89, 92, 5, 14),
(90, 93, 5, 15),
(91, 94, 5, 14),
(92, 95, 3, 8);

-- --------------------------------------------------------

--
-- Structure de la table `f_categories`
--

DROP TABLE IF EXISTS `f_categories`;
CREATE TABLE IF NOT EXISTS `f_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `con` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `f_categories`
--

INSERT INTO `f_categories` (`id`, `nom`, `con`, `image`) VALUES
(1, 'Chiens', 'dog.PNG', 'c5.jpg'),
(2, 'Chats', 'cat.PNG', 'c6.jpg'),
(3, 'Equides', 'horse.PNG', 'c1.jpg'),
(4, 'NAC', 'rabbit.PNG', 'c3.jpg'),
(5, 'Caprin', 'goat.PNG', 'c2.jpg'),
(6, 'Ovin', 'sheep.PNG', 'c4.jpg');

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
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `img`, `id_animal`) VALUES
(13, '67.jpg', 67),
(14, '68.jpg', 68),
(15, '69.jpg', 69),
(16, '70.jpg', 70),
(17, '71.jpg', 71),
(18, '72.jpg', 72),
(19, '73.jpg', 73),
(20, '74.jpg', 74),
(21, '75.jpg', 75),
(22, '76.jpg', 76),
(23, '77.jpg', 77),
(24, '78.jpg', 78),
(25, '79.jpg', 79),
(26, '80.jpg', 80),
(27, '81.jpg', 81),
(28, '83.jpg', 83),
(29, '84.jpg', 84),
(30, '85.jpg', 85),
(31, '86.jpg', 86),
(32, '87.jpg', 87),
(33, '88.jpg', 88),
(34, '89.jpg', 89),
(35, '90.jpg', 90),
(36, '91.jpg', 91),
(37, '92.jpg', 92),
(38, '93.jpg', 93),
(39, '94.jpg', 94),
(40, '95.jpg', 95);

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
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `lastname`, `firstname`, `email`, `password`, `date`) VALUES
(4, 't', 't', 't@t', '$2y$12$vQcAeLaI4s36mls0jXj89O1kvAntCYyBJ.NhR2Cj8MzCRacaib2VO', '2022-06-29 12:06:56'),
(3, 'r', 'r', 'r@', '$2y$12$iuYeYNOjCLnLfKw6F/aLveqhpXl.xRtRTjx7csTLf3vOiilaa3TRe', '2022-06-26 16:25:25'),
(5, 'r', 'r', 'r@r', '$2y$12$kLOtm/oox8eUJyXonCTAs.0Un478tN.Q1OeNAw8.x6OThzsLg76yG', '2022-06-30 11:53:52'),
(6, 'merar', 'dihia', 'dihiamerar@gmail.com', '$2y$12$aQx9giwLH8okwehtzEN7fOyDpYDS9MeuKte1brpeh5b15R7V5xQ26', '2022-06-30 14:29:04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
