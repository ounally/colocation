-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 29 Novembre 2017 à 14:37
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `colocation`
--

-- --------------------------------------------------------

--
-- Structure de la table `colocataires`
--

CREATE TABLE `colocataires` (
  `id` int(10) UNSIGNED NOT NULL,
  `budget` int(11) DEFAULT NULL,
  `latitude` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rayon` int(2) NOT NULL DEFAULT '1',
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `userType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sitation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `colocataires`
--

INSERT INTO `colocataires` (`id`, `budget`, `latitude`, `longitude`, `rayon`, `country`, `adresse`, `description`, `userType`, `sitation`, `created_at`, `updated_at`, `user_id`) VALUES
(36, 441, '36.8132762', '10.1801308', 1, 'La Fayette, Tunisia', 'Lafayette, Tunis, Gouvernorat de Tunis, Tunisie', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Retraité', 'Groupe', '2017-10-25 13:58:53', '2017-10-25 13:58:53', 1),
(37, 326, '36.8132762', '10.1801308', 1, 'La Fayette, Tunis', 'Lafayette, Tunis, Gouvernorat de Tunis, Tunisie', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Retraité', 'Groupe', '2017-10-25 13:59:11', '2017-10-25 13:59:11', 3),
(39, 222, '36.8132516', '10.1339164', 3, 'Bardo, Tunis', 'Bardo, Tunis, Gouvernorat de Tunis, Tunisie', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Retraité', 'Femme', '2017-10-25 14:00:32', '2017-10-25 14:00:32', 4),
(40, 558, '36.8403905', '10.2516005', 1, 'Berges du Lac, Tunis', 'Les Berges du Lac, Tunis, Gouvernorat de Tunis, Tunisie', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Retraité', 'Femme', '2017-10-25 14:14:56', '2017-10-25 14:14:56', 2),
(41, 600, '33.3467562', '10.5011394', 1, 'cité ennassim, Médenine', 'cité ennassim, Médenine, Tunisie', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Salarié', 'Femme', '2017-10-25 14:36:56', '2017-10-25 14:36:56', 1),
(42, 258, '36.7435003', '10.2319757', 1, 'Ben Arous, Ben Arous', 'Ben Arous, Tunisie', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'autre', 'Famille', '2017-10-26 09:13:05', '2017-10-26 09:13:05', 4),
(43, 600, '36.8403905', '10.2516005', 4, 'Berges du Lac, Tunis', 'Les Berges du Lac, Tunis, Gouvernorat de Tunis, Tunisie', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Retraité', 'Famille', '2017-10-26 12:57:48', '2017-10-26 12:57:48', 2);

-- --------------------------------------------------------

--
-- Structure de la table `equipements`
--

CREATE TABLE `equipements` (
  `id` int(10) UNSIGNED NOT NULL,
  `climatiseur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gazDeVille` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chaufageCentral` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ascenseur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jardin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wifi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balcon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `local_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `equipements`
--

INSERT INTO `equipements` (`id`, `climatiseur`, `gazDeVille`, `chaufageCentral`, `ascenseur`, `jardin`, `wifi`, `parking`, `balcon`, `created_at`, `updated_at`, `local_id`) VALUES
(4, '1', NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-06 13:16:30', '2017-10-06 13:16:30', 23),
(5, '1', NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-06 13:17:55', '2017-10-06 13:17:55', 24),
(6, '1', NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-06 13:39:13', '2017-10-06 13:39:13', 25),
(7, '1', '1', NULL, NULL, NULL, NULL, '1', '1', '2017-10-06 13:40:08', '2017-10-06 13:40:08', 26),
(9, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:43', '2017-10-16 08:05:43', 28),
(10, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:45', '2017-10-16 08:05:45', 29),
(11, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:45', '2017-10-16 08:05:45', 30),
(12, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:46', '2017-10-16 08:05:46', 31),
(13, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:47', '2017-10-16 08:05:47', 32),
(14, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:48', '2017-10-16 08:05:48', 33),
(15, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:48', '2017-10-16 08:05:48', 34),
(16, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:49', '2017-10-16 08:05:49', 35),
(17, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:49', '2017-10-16 08:05:49', 36),
(18, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:50', '2017-10-16 08:05:50', 37),
(19, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:51', '2017-10-16 08:05:51', 38),
(20, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:51', '2017-10-16 08:05:51', 39),
(21, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:52', '2017-10-16 08:05:52', 40),
(22, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:52', '2017-10-16 08:05:52', 41),
(23, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:53', '2017-10-16 08:05:53', 42),
(24, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:53', '2017-10-16 08:05:53', 43),
(25, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:54', '2017-10-16 08:05:54', 44),
(26, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:55', '2017-10-16 08:05:55', 45),
(27, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:55', '2017-10-16 08:05:55', 46),
(28, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:56', '2017-10-16 08:05:56', 47),
(29, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:56', '2017-10-16 08:05:56', 48),
(30, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:57', '2017-10-16 08:05:57', 49),
(31, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:57', '2017-10-16 08:05:57', 50),
(32, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:57', '2017-10-16 08:05:57', 51),
(33, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:57', '2017-10-16 08:05:57', 52),
(34, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:58', '2017-10-16 08:05:58', 53),
(35, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:58', '2017-10-16 08:05:58', 54),
(36, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:59', '2017-10-16 08:05:59', 55),
(37, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:05:59', '2017-10-16 08:05:59', 56),
(38, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:06:00', '2017-10-16 08:06:00', 57),
(39, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:06:00', '2017-10-16 08:06:00', 58),
(40, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:06:01', '2017-10-16 08:06:01', 59),
(41, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:06:01', '2017-10-16 08:06:01', 60),
(42, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:06:01', '2017-10-16 08:06:01', 61),
(43, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:06:09', '2017-10-16 08:06:09', 62),
(44, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:06:10', '2017-10-16 08:06:10', 63),
(45, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:06:10', '2017-10-16 08:06:10', 64),
(46, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:06:11', '2017-10-16 08:06:11', 65),
(47, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:06:11', '2017-10-16 08:06:11', 66),
(48, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:06:12', '2017-10-16 08:06:12', 67),
(49, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:06:12', '2017-10-16 08:06:12', 68),
(50, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:06:13', '2017-10-16 08:06:13', 69),
(51, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:06:13', '2017-10-16 08:06:13', 70),
(52, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:06:14', '2017-10-16 08:06:14', 71),
(53, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:06:14', '2017-10-16 08:06:14', 72),
(54, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:06:14', '2017-10-16 08:06:14', 73),
(55, NULL, NULL, '1', '1', '1', NULL, NULL, '1', '2017-10-16 08:06:15', '2017-10-16 08:06:15', 74),
(56, '1', '1', '1', '1', '1', '1', '1', '1', '2017-10-17 09:21:24', '2017-10-17 09:21:24', 75),
(57, '1', '1', '1', '1', '1', '1', '1', '1', NULL, '2017-11-02 09:01:33', 76),
(58, '1', '1', '1', '1', '1', '1', '1', '1', NULL, '2017-11-02 09:10:32', 77),
(59, '1', '1', '1', '1', NULL, '1', '1', NULL, NULL, '2017-11-02 09:24:46', 78),
(60, NULL, '1', '1', '1', NULL, '1', '1', '1', NULL, '2017-11-02 09:26:17', 79),
(61, '1', NULL, '1', NULL, NULL, '1', '1', NULL, NULL, '2017-11-08 13:56:27', 80);

-- --------------------------------------------------------

--
-- Structure de la table `locals`
--

CREATE TABLE `locals` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gouvernorat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_proporiete` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_chambre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nbr_chambre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1 Chambre',
  `prix` int(11) DEFAULT NULL,
  `surface` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default_home.jpg',
  `meublee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nbr_places` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0 chambres',
  `disponibilite` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `locals`
--

INSERT INTO `locals` (`id`, `titre`, `adresse`, `gouvernorat`, `type_proporiete`, `type_chambre`, `nbr_chambre`, `prix`, `surface`, `description`, `image`, `meublee`, `nbr_places`, `disponibilite`, `created_at`, `updated_at`, `user_id`) VALUES
(23, 'qsdqsdc', 'Tunis, Gouvernorat de Tunis, Tunisie', 'Béja', 'maison', 'Partagee', '+5 chambres', 250, 720, 'qscfqsdcsdvc sdv dsf dfrvdfvgdfgbfyghjtuyjn', 'local_1_1507299390.jpg', 'meuble', '+5 places', NULL, '2017-10-06 13:16:30', '2017-10-06 13:16:30', 4),
(24, 'qsdqsdc', 'Tunis, Gouvernorat de Tunis, Tunisie', 'Béja', 'maison', 'Partagee', '+5 chambres', 480, 720, 'qscfqsdcsdvc sdv dsf dfrvdfvgdfgbfyghjtuyjn', 'local_1_1507299475.jpg', 'meuble', '+5 places', NULL, '2017-10-06 13:17:55', '2017-10-06 13:17:55', 1),
(25, 'qsdqsdc', 'Tunis, Gouvernorat de Tunis, Tunisie', 'Béja', 'maison', 'Partagee', '+5 chambres', 394, 720, 'qscfqsdcsdvc sdv dsf dfrvdfvgdfgbfyghjtuyjn', 'local_1_1507300753.jpg', 'meuble', '+5 places', NULL, '2017-10-06 13:39:13', '2017-10-06 13:39:13', 1),
(26, 'qsdfsdv', 'Bardo, Gouvernorat de Tunis, Tunisie', 'Tunis', 'maison', 'Partagee', '5 Chambres', 500, 1000, 'sdwdvcsdv', 'local_1_1507300808.jpg', 'meuble', '5 places', NULL, '2017-10-06 13:40:08', '2017-10-06 13:40:08', 1),
(28, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144743.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:43', '2017-10-16 08:05:43', 1),
(29, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144744.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:45', '2017-10-16 08:05:45', 1),
(30, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144745.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:45', '2017-10-16 08:05:45', 1),
(31, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144746.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:46', '2017-10-16 08:05:46', 1),
(32, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144747.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:47', '2017-10-16 08:05:47', 1),
(33, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144747.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:48', '2017-10-16 08:05:48', 1),
(34, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144748.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:48', '2017-10-16 08:05:48', 1),
(35, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144749.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:49', '2017-10-16 08:05:49', 1),
(36, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144749.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:49', '2017-10-16 08:05:49', 1),
(37, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144750.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:50', '2017-10-16 08:05:50', 1),
(38, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144750.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:51', '2017-10-16 08:05:51', 1),
(39, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144751.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:51', '2017-10-16 08:05:51', 1),
(40, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144752.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:52', '2017-10-16 08:05:52', 1),
(41, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144752.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:52', '2017-10-16 08:05:52', 1),
(42, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144753.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:53', '2017-10-16 08:05:53', 1),
(43, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144753.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:53', '2017-10-16 08:05:53', 1),
(44, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144754.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:54', '2017-10-16 08:05:54', 1),
(45, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144755.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:55', '2017-10-16 08:05:55', 1),
(46, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144755.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:55', '2017-10-16 08:05:55', 1),
(47, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144756.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:56', '2017-10-16 08:05:56', 1),
(48, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144756.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:56', '2017-10-16 08:05:56', 1),
(49, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144756.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:57', '2017-10-16 08:05:57', 1),
(50, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144757.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:57', '2017-10-16 08:05:57', 1),
(51, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144757.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:57', '2017-10-16 08:05:57', 1),
(52, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144757.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:57', '2017-10-16 08:05:57', 1),
(53, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144758.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:58', '2017-10-16 08:05:58', 1),
(54, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144758.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:58', '2017-10-16 08:05:58', 1),
(55, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144758.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:59', '2017-10-16 08:05:59', 1),
(56, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144759.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:05:59', '2017-10-16 08:05:59', 1),
(57, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144759.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:06:00', '2017-10-16 08:06:00', 1),
(58, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144760.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:06:00', '2017-10-16 08:06:00', 1),
(59, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144760.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:06:01', '2017-10-16 08:06:01', 1),
(60, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 777, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144761.jpg', 'meuble', '4 places', '2017-11-30', '2017-10-16 08:06:01', '2017-10-16 08:06:01', 1),
(61, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144761.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:06:01', '2017-10-16 08:06:01', 1),
(62, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144769.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:06:09', '2017-10-16 08:06:09', 1),
(63, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144769.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:06:10', '2017-10-16 08:06:10', 1),
(64, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144770.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:06:10', '2017-10-16 08:06:10', 1),
(65, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144771.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:06:11', '2017-10-16 08:06:11', 1),
(66, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144771.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:06:11', '2017-10-16 08:06:11', 1),
(67, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144772.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:06:12', '2017-10-16 08:06:12', 1),
(68, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144772.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:06:12', '2017-10-16 08:06:12', 1),
(69, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144773.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:06:13', '2017-10-16 08:06:13', 1),
(70, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144773.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:06:13', '2017-10-16 08:06:13', 1),
(71, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 366, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144774.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:06:14', '2017-10-16 08:06:14', 1),
(72, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 250, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144774.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:06:14', '2017-10-16 08:06:14', 1),
(73, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 553, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144774.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:06:14', '2017-10-16 08:06:14', 3),
(74, 'Appartement S+3', 'Ariana, Gouvernorat de l\'Ariana, Tunisie', 'Ariana', 'appartement', 'Partagee', '4 Chambres', 316, 150, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508144775.jpg', 'meuble', '4 places', NULL, '2017-10-16 08:06:15', '2017-10-16 08:06:15', 4),
(75, 'Maison à La Manouba 320m²', 'La Manouba, Tunisie', 'La Manouba', 'maison', 'Partagee', '+5 chambres', 600, 230, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.\r\nSunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1508235684.jpg', 'meuble', '+5 places', NULL, '2017-10-17 09:21:24', '2017-10-17 09:21:24', 2),
(76, 'Maison à Mahdia', 'Mahdia, al-Mahdīyah, Tunisie', 'Médenine', 'maison', 'partagee', '5 Chambres', 530, 160, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1509616893.jpg', 'non meuble', '5 places', NULL, '2017-11-02 09:01:33', '2017-11-02 09:01:33', 1),
(77, 'dfghb', 'Floride, États-Unis', 'Sidi Bouzid', 'appartement', 'partagee', '5 Chambres', 558, 588, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1509617432.jpg', 'meuble', '3 places', NULL, '2017-11-02 09:10:32', '2017-11-02 09:10:32', 1),
(78, 'fgjhghjn', 'Ghana', 'Monastir', 'maison', 'individuelle', '4 Chambres', 510, 258, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1509618286.jpg', 'meuble', '3 places', NULL, '2017-11-02 09:24:46', '2017-11-02 09:24:46', 3),
(79, 'fgjhghjn', 'Yujiapu, Tianjin, Chine', 'Ben Arous', 'maison', 'partagee', '4 Chambres', 510, 258, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1509618376.jpg', 'meuble', '3 places', NULL, '2017-11-02 09:26:17', '2017-11-02 09:26:17', 2),
(80, 'App S+2 Sousse', '15 Rue de France, Sousse, Tunisie', 'Sousse', 'appartement', 'individuelle', '4 Chambres', 450, 120, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'local_1_1510152987.jpg', 'non meuble', '4 places', NULL, '2017-11-08 13:56:27', '2017-11-08 13:56:27', 1);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(33, '2014_10_12_100000_create_equipements_table', 1),
(34, '2014_10_12_100000_create_preferences_table', 1),
(35, '2017_10_06_082335_create_colocataires_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('test@test.fr', '$2y$10$.o1riyy61JdBLgvPeGiEvu0ytm0RDlXFHjAPqHkNfb6RSA3AooXl6', '2017-08-09 09:45:05');

-- --------------------------------------------------------

--
-- Structure de la table `preferences`
--

CREATE TABLE `preferences` (
  `id` int(10) UNSIGNED NOT NULL,
  `animaux` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tabac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genre_prefer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_min` int(11) DEFAULT NULL,
  `age_max` int(11) DEFAULT NULL,
  `profession_prefer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `local_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `preferences`
--

INSERT INTO `preferences` (`id`, `animaux`, `tabac`, `genre_prefer`, `age_min`, `age_max`, `profession_prefer`, `created_at`, `updated_at`, `local_id`) VALUES
(4, 'refuser', 'accepter', NULL, 22, 30, 'etudiant', '2017-10-06 13:16:30', '2017-10-06 13:16:30', 23),
(5, 'refuser', 'accepter', NULL, 22, 30, 'etudiant', '2017-10-06 13:17:55', '2017-10-06 13:17:55', 24),
(6, 'refuser', 'accepter', NULL, 22, 30, 'etudiant', '2017-10-06 13:39:13', '2017-10-06 13:39:13', 25),
(7, 'accepter', 'accepter', NULL, 20, 27, 'etudiant', '2017-10-06 13:40:08', '2017-10-06 13:40:08', 26),
(9, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:43', '2017-10-16 08:05:43', 28),
(10, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:45', '2017-10-16 08:05:45', 29),
(11, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:45', '2017-10-16 08:05:45', 30),
(12, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:46', '2017-10-16 08:05:46', 31),
(13, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:47', '2017-10-16 08:05:47', 32),
(14, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:48', '2017-10-16 08:05:48', 33),
(15, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:48', '2017-10-16 08:05:48', 34),
(16, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:49', '2017-10-16 08:05:49', 35),
(17, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:49', '2017-10-16 08:05:49', 36),
(18, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:50', '2017-10-16 08:05:50', 37),
(19, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:51', '2017-10-16 08:05:51', 38),
(20, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:51', '2017-10-16 08:05:51', 39),
(21, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:52', '2017-10-16 08:05:52', 40),
(22, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:52', '2017-10-16 08:05:52', 41),
(23, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:53', '2017-10-16 08:05:53', 42),
(24, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:53', '2017-10-16 08:05:53', 43),
(25, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:54', '2017-10-16 08:05:54', 44),
(26, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:55', '2017-10-16 08:05:55', 45),
(27, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:55', '2017-10-16 08:05:55', 46),
(28, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:56', '2017-10-16 08:05:56', 47),
(29, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:56', '2017-10-16 08:05:56', 48),
(30, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:57', '2017-10-16 08:05:57', 49),
(31, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:57', '2017-10-16 08:05:57', 50),
(32, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:57', '2017-10-16 08:05:57', 51),
(33, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:57', '2017-10-16 08:05:57', 52),
(34, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:58', '2017-10-16 08:05:58', 53),
(35, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:58', '2017-10-16 08:05:58', 54),
(36, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:59', '2017-10-16 08:05:59', 55),
(37, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:05:59', '2017-10-16 08:05:59', 56),
(38, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:06:00', '2017-10-16 08:06:00', 57),
(39, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:06:00', '2017-10-16 08:06:00', 58),
(40, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:06:01', '2017-10-16 08:06:01', 59),
(41, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:06:01', '2017-10-16 08:06:01', 60),
(42, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:06:01', '2017-10-16 08:06:01', 61),
(43, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:06:09', '2017-10-16 08:06:09', 62),
(44, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:06:10', '2017-10-16 08:06:10', 63),
(45, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:06:10', '2017-10-16 08:06:10', 64),
(46, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:06:11', '2017-10-16 08:06:11', 65),
(47, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:06:11', '2017-10-16 08:06:11', 66),
(48, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:06:12', '2017-10-16 08:06:12', 67),
(49, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:06:12', '2017-10-16 08:06:12', 68),
(50, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:06:13', '2017-10-16 08:06:13', 69),
(51, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:06:13', '2017-10-16 08:06:13', 70),
(52, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:06:14', '2017-10-16 08:06:14', 71),
(53, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:06:14', '2017-10-16 08:06:14', 72),
(54, 'refuser', 'refuser', NULL, 25, 29, 'etudiant', '2017-10-16 08:06:14', '2017-10-16 08:06:14', 73),
(55, 'refuser', 'refuser', 'male', 25, 29, 'etudiant', '2017-10-16 08:06:15', '2017-10-16 08:06:15', 74),
(56, 'refuser', 'accepter', 'male', 19, 30, 'etudiant', '2017-10-17 09:21:24', '2017-10-17 09:21:24', 75),
(57, 'refuser', 'refuser', 'x', 20, 28, 'etudiant', '2017-11-02 09:01:33', '2017-11-02 09:01:33', 76),
(58, 'refuser', 'refuser', 'femelle', 31, 36, 'professionnel', '2017-11-02 09:10:32', '2017-11-02 09:10:32', 77),
(59, 'accepter', 'accepter', 'male', 18, 35, 'etudiant', '2017-11-02 09:24:46', '2017-11-02 09:24:46', 78),
(60, 'refuser', 'accepter', 'male', 18, 35, 'etudiant', '2017-11-02 09:26:17', '2017-11-02 09:26:17', 79),
(61, 'accepter', 'accepter', 'x', 18, 18, 'x', '2017-11-08 13:56:27', '2017-11-08 13:56:27', 80);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `cin` text COLLATE utf8mb4_unicode_ci,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(2) DEFAULT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codepostal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `niveau` int(11) DEFAULT NULL,
  `fbid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mailverification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephoneverification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idverification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fbverification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charteverification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `cin`, `nom`, `prenom`, `email`, `password`, `photo`, `sexe`, `age`, `profession`, `telephone`, `adresse`, `codepostal`, `ville`, `pays`, `bio`, `niveau`, `fbid`, `mailverification`, `telephoneverification`, `idverification`, `fbverification`, `charteverification`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '13605075', 'med', 'Ounally', 'test@test.fr', '$2y$10$Er05c5jHsad29Dw6ZaUQiuZz8pMDakPAnogJAdeP0CB9icKkWjSSy', '1_1508254672.jpg', 'homme', 26, 'Étudiant', '97453812', 'adresse 15', '1360', 'Tunis', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', NULL, 'facebook', NULL, NULL, NULL, NULL, NULL, 1, 'IBhQFLx5qBWf0RT00XsVUZUZyPNcHmWqYh5W3n0nqKUvulMGQRFe5VliKFtn', '2017-08-10 09:21:57', '2017-10-17 15:00:22'),
(2, '95906427', 'Kerluke', 'Stan', 'ybins@example.org', '$2y$10$DJv8ARZvET6ehwGHz08CV.OpMOoB2bZckbDogAKm2AkttvlbLqCj.', '2_1508338850.jpg', NULL, 27, NULL, '97051015', '7396 Rolfson Prairie', '9516', 'Lake', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'DevqhRJYrN5Mq6nQrRuRrZm3De1ykobwmTKdfBVZcCE1ZNfgxygXA4aZWYpr', '2017-10-18 13:56:34', '2017-10-18 14:00:50'),
(3, '25342436', 'Stamm', 'Patrick', 'remington.rohan@example.net', '$2y$10$LiYXKYa6K5f8mKzwf5fhP.Sw3H5PrkRW.mQriibR11BKJh5Ox/Vbm', '3_1508338919.jpg', NULL, 29, NULL, '95680625', '44645 Madyson Mill', '1960', 'North', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'z8iojMUztl85T0RTDXOxpHGYPJ1V96aBgZGOmi0KTTFHhtEwzphoMv0bKbAn', '2017-10-18 13:56:34', '2017-10-18 14:01:59'),
(4, '13218514', 'Armstrong', 'Toy', 'farrell.kaylah@example.net', '$2y$10$M9fcmdrcteYUmYZZHDYOt.Hhx1CKdIruj.nfUIciJ.WwXv3lKICUG', '4_1508338965.jpg', NULL, 34, NULL, '95935225', '28815 Nitzsche Rapid', '4733', 'North', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'KJe4jFGJjAaEC2iLYshnJPN1V7FmdIbNWea00bVNnIDWZ5pVaaVj9WYZEZ46', '2017-10-18 13:56:34', '2017-10-18 14:02:45'),
(5, '39636868', 'Schowalter', 'Johnpaul', 'sabryna.rempel@example.com', '$2y$10$qfcVqVRjoMmscr7j5vaFMOPkSfs9lj52e5GQ1ifnR2cy6c9vTFkW2', '5_1508338997.jpg', NULL, 34, NULL, '98799789', '66864 Carmella Street', '2330', 'New', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'aRIN3R92JcT5G0k4H8ltHmNqxoQAgoZUc6zHwO0EHsmcXiGe0qQlq5YRU2wa', '2017-10-18 13:56:34', '2017-10-18 14:03:17'),
(6, '18918170', 'Volkman', 'Torrey', 'alfred.hettinger@example.com', '$2y$10$MjInnT/gDR4.gkiUVPIxc.rajFtqY2s3W/BBKacOUT2pgMYTo1ae6', 'default.jpg', NULL, 33, NULL, '95130514', '284 Verona Lights', '1703', 'West', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'TlQENRvc4R', '2017-10-18 13:56:34', '2017-10-18 13:56:34'),
(7, '44922020', 'Jacobson', 'Darrion', 'fanny37@example.org', '$2y$10$SQ3.ILfGEtBE9bwj.GUGV.7GihqoKNillYoVsTVaFt94a5eLZDzLi', 'default.jpg', NULL, 35, NULL, '95903605', '6556 Wiza Alley', '9141', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '23pR36nsKL', '2017-10-18 13:56:34', '2017-10-18 13:56:34'),
(8, '44808218', 'Bednar', 'Jared', 'deanna07@example.com', '$2y$10$vB3Z8b6KpNGY9ixXNkL1bOnovhEzwIJ1oe0aqwm/2LE4L3RV8eNQK', 'default.jpg', NULL, 20, NULL, '95625051', '505 Mraz Pike Apt. 967', '3832', 'South', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'JsgdwUAoCi', '2017-10-18 13:56:34', '2017-10-18 13:56:34'),
(9, '61727598', 'Mayert', 'Benny', 'dietrich.leon@example.org', '$2y$10$9lWgHs8JQsDXlIImgfHZWO/l1TlfLi2Si/NOdUk8eOTI00Ye4RBVe', 'default.jpg', NULL, 32, NULL, '98568219', '838 Brannon Avenue', '9044', 'South', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'tTtXvIoOdG', '2017-10-18 13:56:34', '2017-10-18 13:56:34'),
(10, '67877369', 'Toy', 'Jarred', 'ymarks@example.net', '$2y$10$03iMhFlwBceixyQA7zGRIuPofi7BvvPrpj/hZWnQ7KDD5niJ6mIW6', 'default.jpg', NULL, 31, NULL, '98703115', '51260 Dayna Path Suite 008', '1725', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'y4JSvQefyw', '2017-10-18 13:56:34', '2017-10-18 13:56:34'),
(11, '11610630', 'Bergstrom', 'Faustino', 'jakayla18@example.net', '$2y$10$AS9Vu0pgtJupJQmyVQGFq.TxX3y8YEn6VWHVSuiv28nameYpw0FYS', 'default.jpg', NULL, 26, NULL, '98865030', '858 Yundt Harbors', '3722', 'East', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'CUgB7MD1Zt', '2017-10-18 13:56:34', '2017-10-18 13:56:34'),
(12, '50982799', 'Romaguera', 'Carlo', 'dawn.gaylord@example.net', '$2y$10$fu/uHEXvPQjLUuIQAbbSS.5yLtGBLOJ8n94ltDF5MgHTUjlx/3aIe', 'default.jpg', NULL, 27, NULL, '95673338', '96241 Keeling Ramp Suite 009', '2992', 'Lake', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'QGwRQxvxEh', '2017-10-18 13:56:34', '2017-10-18 13:56:34'),
(13, '32581168', 'Schoen', 'Donato', 'annabell.rohan@example.com', '$2y$10$ZxNSs6QLVbnDrOJtwuZkC.NCkkMa0yp3GXS7m2hao.fy/09frTUBO', 'default.jpg', NULL, 31, NULL, '97905496', '7429 Gerard Center Suite 614', '9577', 'South', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'CEZtWE1UXc', '2017-10-18 13:56:34', '2017-10-18 13:56:34'),
(14, '23062096', 'Veum', 'Sherman', 'yvon@example.org', '$2y$10$r3l/f09ZKwHfsTqsr/xibO7f9JTwW.z.0HSvsUNpFJQ2fnesJzjwq', 'default.jpg', NULL, 31, NULL, '98953079', '261 April Mission Apt. 137', '5573', 'Port', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'BN2PvDMs22', '2017-10-18 13:56:34', '2017-10-18 13:56:34'),
(15, '36387533', 'Lubowitz', 'Markus', 'tspinka@example.net', '$2y$10$PCbzQbycoG.R4aVhXpelp.zCC69KtamX0ZNLBUiMmIPIYi9MjgQzC', 'default.jpg', NULL, 21, NULL, '98987144', '882 Rolando Field Suite 574', '8200', 'West', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'vJ7xKOMq06', '2017-10-18 13:56:34', '2017-10-18 13:56:34'),
(16, '35029124', 'Crona', 'Edmund', 'hilma94@example.com', '$2y$10$rGq9rRRm7rQMOSF/5xYyV.EaDunyVHlGfPxh/E0fTrBJdn81E.TAO', 'default.jpg', NULL, 31, NULL, '98042201', '3022 Leone Vista', '4390', 'New', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'o4PfyO0n3p', '2017-10-18 13:56:34', '2017-10-18 13:56:34'),
(17, '28096849', 'Kling', 'Junius', 'rreichert@example.org', '$2y$10$2jIGvcboTntD/I8Wo9yWBORWdaCdmcx0zxvm78RiH9IuscjOxeoEW', 'default.jpg', NULL, 22, NULL, '97918678', '70976 Lindgren Walks Apt. 866', '4902', 'South', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '442fwvJe8e', '2017-10-18 13:56:34', '2017-10-18 13:56:34'),
(18, '95609625', 'Blick', 'Quinn', 'cathryn35@example.org', '$2y$10$CxbFuDQ.b1is89ZzybOXWOe2voc7jQL1vEeJILPbyHZrbsD6CF.q6', 'default.jpg', NULL, 30, NULL, '98090600', '3645 Breitenberg Road', '7090', 'Lake', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'sGuamc0Xvn', '2017-10-18 13:56:34', '2017-10-18 13:56:34'),
(19, '76982618', 'Sporer', 'Lazaro', 'rbailey@example.net', '$2y$10$U0CwMhT719..MU.GLf6KjuH0dQp.CKz8jNoqePfzZvVOzwzZJLEZi', 'default.jpg', NULL, 25, NULL, '97331269', '89561 Leola Lake Apt. 418', '3798', 'New', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'OknWh8lscz', '2017-10-18 13:56:34', '2017-10-18 13:56:34'),
(20, '66405522', 'Deckow', 'Immanuel', 'cthompson@example.com', '$2y$10$OefNbQSPm2b/SL/w/JGYeuFivuECa45lnOVp088ovC7rNz173Ofje', 'default.jpg', NULL, 24, NULL, '98687302', '39745 Bo Corners Suite 532', '6602', 'South', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'z59CiWn7hg', '2017-10-18 13:56:34', '2017-10-18 13:56:34'),
(21, '49287591', 'Deckow', 'Garfield', 'ledner.abbie@example.net', '$2y$10$YLBY6tqlNhCi4Fg/X38fde2tjf9/F3LKQn6CkUGu.HvCwvBtY9Wwq', 'default.jpg', NULL, 22, NULL, '96643081', '6379 Marquardt Dale', '5272', 'West', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'QqvIakjbsT', '2017-10-18 13:56:34', '2017-10-18 13:56:34');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `colocataires`
--
ALTER TABLE `colocataires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `colocataires_user_id_foreign` (`user_id`);

--
-- Index pour la table `equipements`
--
ALTER TABLE `equipements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipements_local_id_foreign` (`local_id`);

--
-- Index pour la table `locals`
--
ALTER TABLE `locals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `locals_user_id_foreign` (`user_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `preferences`
--
ALTER TABLE `preferences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `preferences_local_id_foreign` (`local_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `colocataires`
--
ALTER TABLE `colocataires`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT pour la table `equipements`
--
ALTER TABLE `equipements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT pour la table `locals`
--
ALTER TABLE `locals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT pour la table `preferences`
--
ALTER TABLE `preferences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `colocataires`
--
ALTER TABLE `colocataires`
  ADD CONSTRAINT `colocataires_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `equipements`
--
ALTER TABLE `equipements`
  ADD CONSTRAINT `equipements_local_id_foreign` FOREIGN KEY (`local_id`) REFERENCES `locals` (`id`);

--
-- Contraintes pour la table `locals`
--
ALTER TABLE `locals`
  ADD CONSTRAINT `locals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `preferences`
--
ALTER TABLE `preferences`
  ADD CONSTRAINT `preferences_local_id_foreign` FOREIGN KEY (`local_id`) REFERENCES `locals` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
