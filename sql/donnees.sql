-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 07 fév. 2019 à 15:10
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `potager`
--

-- --------------------------------------------------------

--
-- Structure de la table `donnees`
--

DROP TABLE IF EXISTS `donnees`;
CREATE TABLE IF NOT EXISTS `donnees` (
  `ID capteur` int(11) NOT NULL,
  `Temperature` int(11) DEFAULT NULL,
  `Humidite` int(11) DEFAULT NULL,
  `Humidite du sol` int(11) DEFAULT NULL,
  `Temps` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `donnees`
--

INSERT INTO `donnees` (`ID capteur`, `Temperature`, `Humidite`, `Humidite du sol`, `Temps`) VALUES
(2, 0, 20, 15, '2019-02-07 14:28:41'),
(1, 10, 10, 10, '2019-02-07 14:24:55'),
(1, 15, 10, 9, '2019-02-07 14:29:25'),
(3, 20, 50, 5, '2019-02-07 14:28:58'),
(1, 5, 5, 18, '2019-02-07 14:29:48'),
(1, 20, 20, 0, '2019-02-07 14:30:13'),
(1, 10, NULL, NULL, '2019-02-07 15:09:46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
