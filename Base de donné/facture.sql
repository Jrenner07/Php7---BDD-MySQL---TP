-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 17 Mars 2017 à 11:31
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `facture`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `NumClient` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `CodePostal` varchar(255) NOT NULL,
  `Pays` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`NumClient`, `Nom`, `Prenom`, `Adresse`, `Ville`, `CodePostal`, `Pays`) VALUES
(1, 'Renner', 'Julien', '8 route du rhin', 'Illkirch-Graff', '67400', 'France'),
(3, 'jean', 'Eude', '16 route du chemin', 'Strasbourg', '67000', 'France'),
(4, 'Michel', 'Jacquie', '8 rue de la ville', 'Paris', '92000', 'France'),
(5, 'Myster', 'Maxime', '18 route du vin', 'Mulhouse', '68100', 'France'),
(7, 'Debabech', 'Benjy', 'Quelque part a Strasbourg', 'Strasbourg', '67100', 'France'),
(8, 'Jean', 'Marie', '16 rue de la vigne', 'Pfastatt', '68120', 'France');

-- --------------------------------------------------------

--
-- Structure de la table `d_facture`
--

CREATE TABLE `d_facture` (
  `Qte` int(11) NOT NULL,
  `NumFacture` int(11) NOT NULL,
  `NumProduit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `d_facture`
--

INSERT INTO `d_facture` (`Qte`, `NumFacture`, `NumProduit`) VALUES
(8, 4, 1),
(20, 5, 3),
(25, 6, 2);

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `NumFacture` int(11) NOT NULL,
  `DateFacture` date NOT NULL,
  `NumClient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `facture`
--

INSERT INTO `facture` (`NumFacture`, `DateFacture`, `NumClient`) VALUES
(4, '2017-01-05', 1),
(5, '2017-01-05', 3),
(6, '2017-01-05', 4),
(7, '2017-03-16', 1),
(8, '2017-03-16', 1),
(9, '2017-03-16', 3);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id`, `pseudo`, `password`) VALUES
(10, 'admin', '$2y$10$hFboQsc0htKF9.v/XUJapOnZdiLMBk7NvzBmA7HyMOPKeW6OpMVGW');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `NumProduit` int(11) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `PrixUnitaire` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`NumProduit`, `Designation`, `PrixUnitaire`) VALUES
(1, 'Baguette de Fromage', 0.95),
(2, 'Tv 4K', 499),
(3, 'Sachet explosif C4', 2500),
(5, 'Criniere de feu', 50),
(6, 'Poisson', 5);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`NumClient`);

--
-- Index pour la table `d_facture`
--
ALTER TABLE `d_facture`
  ADD PRIMARY KEY (`NumFacture`,`NumProduit`),
  ADD KEY `NumFacture` (`NumFacture`),
  ADD KEY `NumProduit` (`NumProduit`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`NumFacture`),
  ADD KEY `NumClient` (`NumClient`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`NumProduit`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `NumClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `NumFacture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `NumProduit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `d_facture`
--
ALTER TABLE `d_facture`
  ADD CONSTRAINT `d_facture_ibfk_1` FOREIGN KEY (`NumFacture`) REFERENCES `facture` (`NumFacture`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `d_facture_ibfk_2` FOREIGN KEY (`NumProduit`) REFERENCES `produit` (`NumProduit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `facture_ibfk_1` FOREIGN KEY (`NumClient`) REFERENCES `client` (`NumClient`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
