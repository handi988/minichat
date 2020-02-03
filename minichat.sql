-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  lun. 03 fév. 2020 à 15:58
-- Version du serveur :  8.0.18
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
-- Base de données :  `minichat`
--

-- --------------------------------------------------------

--
-- Structure de la table `tchat`
--

DROP TABLE IF EXISTS `tchat`;
CREATE TABLE IF NOT EXISTS `tchat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `messages` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `send_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tchat`
--

INSERT INTO `tchat` (`id`, `users_id`, `messages`, `send_at`) VALUES
(1, 1, 'ca va ? ', '2020-02-02 01:57:45'),
(2, 2, 'oui et toi?', '2020-02-02 01:57:45'),
(3, 1, 'hh', '2020-02-02 02:21:17'),
(4, 1, 'test', '2020-02-02 02:27:19'),
(5, 1, 'rrrr', '2020-02-02 02:40:15'),
(6, 1, 'rt', '2020-02-02 02:41:10'),
(7, 1, 'test', '2020-02-02 02:41:42'),
(8, 0, 'ggg', '2020-02-02 02:42:59'),
(9, 0, '', '2020-02-02 02:42:59'),
(10, 0, 'ggg', '2020-02-02 02:43:02'),
(11, 0, 'fff', '2020-02-02 02:44:07'),
(12, 0, 'fff', '2020-02-02 02:46:14'),
(13, 0, 'ee', '2020-02-02 02:46:53'),
(14, 0, 'ok ', '2020-02-02 02:47:00'),
(15, 0, '', '2020-02-02 02:49:09'),
(16, 0, 'zzz', '2020-02-02 02:49:13'),
(17, 0, 'eee', '2020-02-02 02:49:28'),
(18, 0, 'rrr', '2020-02-02 02:50:07'),
(19, 1, 'd', '2020-02-02 02:54:10'),
(20, 1, 'bonjour ', '2020-02-02 02:55:33'),
(21, 2, 'test', '2020-02-02 02:56:55'),
(22, 6, 'test', '2020-02-02 05:03:16'),
(23, 7, 'oo', '2020-02-02 17:46:11');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logins` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `passwords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `logins`, `passwords`) VALUES
(6, 'pricou', 'a6312121e15caec74845b7ba5af23330d52d4ac0'),
(3, 'test', '5ed25af7b1ed23fb00122e13d7f74c4d8262acd8'),
(7, 'test', 'a6312121e15caec74845b7ba5af23330d52d4ac0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
