-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 11 déc. 2024 à 11:37
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `readboooks`
--

-- --------------------------------------------------------

--
-- Structure de la table `listthemes`
--

CREATE TABLE `listthemes` (
  `idtheme` int(4) NOT NULL,
  `nomTheme1` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `listthemes`
--

INSERT INTO `listthemes` (`idtheme`, `nomTheme1`) VALUES
(1, 'Roman'),
(2, 'Aventure'),
(3, 'Policier'),
(4, 'Drame'),
(5, 'Fantastique'),
(6, 'Manga'),
(7, 'Humour'),
(8, 'Bibliographie'),
(9, 'Politique'),
(10, 'Philosophie'),
(11, 'Sciences'),
(12, 'Psychologie');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `listthemes`
--
ALTER TABLE `listthemes`
  ADD PRIMARY KEY (`idtheme`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `listthemes`
--
ALTER TABLE `listthemes`
  MODIFY `idtheme` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
