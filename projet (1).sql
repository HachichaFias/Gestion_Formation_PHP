-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 18 juin 2021 à 00:08
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id` varchar(20) NOT NULL,
  `intitule` varchar(20) NOT NULL,
  `formateur` varchar(20) NOT NULL,
  `description` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `nbPlace` int(11) NOT NULL,
  `nbReservation` int(11) NOT NULL,
  `prix` float NOT NULL,
  `score` float NOT NULL,
  `nbScore` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id`, `intitule`, `formateur`, `description`, `date`, `nbPlace`, `nbReservation`, `prix`, `score`, `nbScore`) VALUES
('1', 'JAVA', 'FIRASHACHICHA', 'java for Beginner', '2021-06-06', 4, 4, 200, 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` varchar(20) NOT NULL,
  `etat` varchar(20) NOT NULL,
  `login` varchar(20) NOT NULL,
  `id_formation` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `etat`, `login`, `id_formation`) VALUES
('1', '1', 'firas', '1'),
('2', '1', 'AnisHachicha', '1'),
('3', '1', 'SemiaDalhoum', '1'),
('4', '1', 'HanaHachicha', '1'),
('5', '0', 'AidaMaalej', '1'),
('6', '0', 'SemiaDalhoum', '2');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `cin` varchar(10) NOT NULL,
  `date_naiss` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `role` bit(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`login`, `password`, `nom`, `cin`, `date_naiss`, `email`, `role`) VALUES
('admin', 'admin', 'firas', '11324322', '2000-05-02', 'mail', b'1'),
('firas', 'a', 'firas', '12313', '2000-04-27', 'firas.hachicha2@gmail.com', b'0'),
('AnisHachicha', 'aaaaaaaa', 'Anis', '12313', '2021-04-28', 'anis@gmail.com', b'0'),
('dz', 'aaaaaaaa', 'hui hui', 'ac', '2021-05-05', 'firas.hachicha2@gmail.com', b'0');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
