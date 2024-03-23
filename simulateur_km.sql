-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 24 mars 2024 à 00:00
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `simulateur_km`
--

-- --------------------------------------------------------

--
-- Structure de la table `bareme`
--

CREATE TABLE `bareme` (
  `id` int(11) NOT NULL,
  `vehicule` varchar(255) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `km` int(11) DEFAULT NULL,
  `formule` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `bareme`
--

INSERT INTO `bareme` (`id`, `vehicule`, `cv`, `km`, `formule`) VALUES
(1, 'voiture', '3', 0, 'd * 0.529'),
(2, 'voiture', '3', 5000, '(d * 0.316) + 1065'),
(3, 'voiture', '3', 20000, 'd * 0.370'),
(4, 'voiture', '4', 0, 'd * 0.606'),
(5, 'voiture', '4', 5000, '(d * 0.340) + 1330'),
(6, 'voiture', '4', 20000, 'd * 0.407'),
(7, 'voiture', '5', 0, 'd * 0.636'),
(8, 'voiture', '5', 5000, '(d * 0.357) + 1395'),
(9, 'voiture', '5', 20000, 'd * 0.427'),
(10, 'voiture', '6', 0, 'd * 0.665'),
(11, 'voiture', '6', 5000, '(d * 0.316) + 1457'),
(12, 'voiture', '6', 20000, 'd * 0.447'),
(13, 'voiture', '7', 0, 'd * 0.697'),
(14, 'voiture', '7', 5000, '(d * 0.316) + 1515'),
(15, 'voiture', '7', 20000, 'd * 0.470'),
(16, 'motocyclettes', '1-2', 0, 'd * 0.395'),
(17, 'motocyclettes', '1-2', 3000, '(d * 0.099) + 891'),
(18, 'motocyclettes', '1-2', 6000, 'd * 0.248'),
(19, 'motocyclettes', '3-4-5', 0, 'd * 0.468'),
(20, 'motocyclettes', '3-4-5', 3000, '(d * 0.082) + 1158'),
(21, 'motocyclettes', '3-4-5', 6000, 'd * 0.275'),
(22, 'motocyclettes', '6', 0, 'd * 0.606'),
(23, 'motocyclettes', '6', 3000, '(d * 0.079) + 1583'),
(24, 'motocyclettes', '6', 6000, 'd * 0.343'),
(25, 'cyclomoteurs', '50', 0, 'd * 0.315'),
(26, 'cyclomoteurs', '50', 3000, '(d * 0.079) + 711'),
(27, 'cyclomoteurs', '50', 6000, 'd * 0.198');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bareme`
--
ALTER TABLE `bareme`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bareme`
--
ALTER TABLE `bareme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
