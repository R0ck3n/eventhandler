-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 28 fév. 2024 à 08:52
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `id` smallint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lieu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `places` mediumint UNSIGNED NOT NULL,
  `inscrits` mediumint UNSIGNED NOT NULL,
  `prix` mediumint UNSIGNED NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id`, `nom`, `lieu`, `places`, `inscrits`, `prix`, `date`) VALUES
(1, 'AFUP Day 2023 Lille', 'Université Catholique de Lille', 120, 10, 85, '2024-02-12'),
(2, 'AFUP Day 2023 Lyon', 'CPE Lyon', 160, 0, 80, '2024-01-10'),
(3, 'Forum PHP 2023', 'Disneyland Paris', 800, 300, 140, '2023-10-11'),
(7, 'Rocken Enterprise', 'Tours', 300, 0, 50, '2024-02-08'),
(9, 'test 3', 'Tours Sud', 5, 0, 1, '2024-02-11'),
(10, '&lt;script&gt; window.onload = function() {     alert(&quot;Hello, world!&quot;); }; &lt;/script&gt;', 'Tours', 70, 0, 2, '2023-12-02');

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

DROP TABLE IF EXISTS `participant`;
CREATE TABLE IF NOT EXISTS `participant` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `participant`
--

INSERT INTO `participant` (`id`, `firstname`, `lastname`, `email`) VALUES
(1, 'bob', 'dilan', 'bob33@gmail.com'),
(4, 'Capé', 'handi', 'hadi@gmail.com'),
(5, 'pere', 'noel', 'noel@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
