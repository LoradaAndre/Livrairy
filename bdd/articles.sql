-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 22 fév. 2020 à 17:47
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `articles`
--

-- --------------------------------------------------------

--
-- Structure de la table `AUDIO`
--

DROP TABLE IF EXISTS `AUDIO`;
CREATE TABLE IF NOT EXISTS `AUDIO` (
  `ID_DVD` int(11) NOT NULL,
  `ID_LANGUE` int(11) NOT NULL,
  PRIMARY KEY (`ID_DVD`,`ID_LANGUE`),
  KEY `FK_AUDIO_LANGUE` (`ID_LANGUE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `AUTEUR_CD`
--

DROP TABLE IF EXISTS `AUTEUR_CD`;
CREATE TABLE IF NOT EXISTS `AUTEUR_CD` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(255) NOT NULL,
  `PRENOM` varchar(255) NOT NULL,
  KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `AUTEUR_LIVRE`
--

DROP TABLE IF EXISTS `AUTEUR_LIVRE`;
CREATE TABLE IF NOT EXISTS `AUTEUR_LIVRE` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(255) NOT NULL,
  `PRENOM` varchar(255) NOT NULL,
  KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `CD`
--

DROP TABLE IF EXISTS `CD`;
CREATE TABLE IF NOT EXISTS `CD` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TITRE` varchar(255) NOT NULL,
  `ID_AUTEUR` int(11) NOT NULL,
  `ID_GENRE_MUS` int(11) NOT NULL,
  `NB_CD` int(11) NOT NULL,
  `DATE_PARUTION` date NOT NULL,
  `NB_TITRE` int(11) NOT NULL,
  `QUANTITE` int(11) NOT NULL,
  `PRIX` float NOT NULL,
  KEY `ID` (`ID`),
  KEY `FK_CD_TITRE` (`TITRE`),
  KEY `FK_CD_AUTEUR` (`ID_AUTEUR`),
  KEY `FK_CD_GENRE_MUSIC` (`ID_GENRE_MUS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `CD_TEST`
--

DROP TABLE IF EXISTS `CD_TEST`;
CREATE TABLE IF NOT EXISTS `CD_TEST` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TITRE_CD` varchar(255) NOT NULL,
  `AUTEUR_CD` varchar(255) NOT NULL,
  `NB_CHANSONS` int(11) NOT NULL,
  `PRIX` float NOT NULL,
  `QUANTITE` int(11) NOT NULL,
  KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `CD_TEST`
--

INSERT INTO `CD_TEST` (`ID`, `TITRE_CD`, `AUTEUR_CD`, `NB_CHANSONS`, `PRIX`, `QUANTITE`) VALUES
(1, 'sigma', 'Reol', 13, 25.99, 1),
(2, 'Un rayon de soleil', 'william baldé', 2, 10.99, 50);

-- --------------------------------------------------------

--
-- Structure de la table `DVD`
--

DROP TABLE IF EXISTS `DVD`;
CREATE TABLE IF NOT EXISTS `DVD` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TITRE` varchar(255) NOT NULL,
  `ID_REALISATEUR` int(11) NOT NULL,
  `ID_AUDIO` int(11) NOT NULL,
  `ID_SOUS_TITRE` int(11) NOT NULL,
  `ID_FORMAT` int(11) NOT NULL,
  `NB_DISQUE` int(11) NOT NULL,
  `DATE_PARUTION` date NOT NULL,
  `DUREE` int(11) NOT NULL,
  `QUANTITE` int(11) NOT NULL,
  `PRIX` float NOT NULL,
  KEY `ID` (`ID`),
  KEY `FK_DVD_TITRE` (`TITRE`),
  KEY `FK_DVD_REALISATEUR` (`ID_REALISATEUR`),
  KEY `FK_DVD_FORMAT` (`ID_FORMAT`),
  KEY `FK_DVD_AUDIO` (`ID_AUDIO`),
  KEY `FK_DVD_SOUS_TITRE` (`ID_SOUS_TITRE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `DVD_TEST`
--

DROP TABLE IF EXISTS `DVD_TEST`;
CREATE TABLE IF NOT EXISTS `DVD_TEST` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TITRE_DVD` varchar(255) NOT NULL,
  `REALISATEUR` varchar(255) NOT NULL,
  `PRIX` float NOT NULL,
  `QUANTITE` int(11) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  KEY `ID` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `DVD_TEST`
--

INSERT INTO `DVD_TEST` (`ID`, `TITRE_DVD`, `REALISATEUR`, `PRIX`, `QUANTITE`, `DESCRIPTION`) VALUES
(1, 'Buffy vs les vampires', 'Matt Groening', 12.99, 80, 'Une fille qui aimes les vampire et puis bah il se passedsjkfbvn,kcql;dd, fvdhjkcl;d ,;fnqgvbdnjkcl;d f,ngbvdnkcls;d f,ngbvnjk,lf; ,'),
(2, 'Your name', 'yajjzhfzf', 1.99, 5, 'une truc ou y\'a des gens qui chialent dessus va savoir pourquoi');

-- --------------------------------------------------------

--
-- Structure de la table `EDITEUR`
--

DROP TABLE IF EXISTS `EDITEUR`;
CREATE TABLE IF NOT EXISTS `EDITEUR` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `LIBELLE` varchar(255) NOT NULL,
  KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `FORMAT`
--

DROP TABLE IF EXISTS `FORMAT`;
CREATE TABLE IF NOT EXISTS `FORMAT` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `LIBELLE` varchar(255) NOT NULL,
  KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `FORMAT`
--

INSERT INTO `FORMAT` (`ID`, `LIBELLE`) VALUES
(1, 'Manga'),
(2, 'BD'),
(3, 'roman');

-- --------------------------------------------------------

--
-- Structure de la table `GENRE_LIVRE`
--

DROP TABLE IF EXISTS `GENRE_LIVRE`;
CREATE TABLE IF NOT EXISTS `GENRE_LIVRE` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `LIBELLE` varchar(255) NOT NULL,
  KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `GENRE_MUSICAL`
--

DROP TABLE IF EXISTS `GENRE_MUSICAL`;
CREATE TABLE IF NOT EXISTS `GENRE_MUSICAL` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `LIBELLE` varchar(255) NOT NULL,
  KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `GENRE_MUSICAL`
--

INSERT INTO `GENRE_MUSICAL` (`ID`, `LIBELLE`) VALUES
(1, 'pop'),
(2, 'rnb'),
(3, 'electro'),
(4, 'rap');

-- --------------------------------------------------------

--
-- Structure de la table `LANGUE`
--

DROP TABLE IF EXISTS `LANGUE`;
CREATE TABLE IF NOT EXISTS `LANGUE` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `LIBELLE` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `LANGUE`
--

INSERT INTO `LANGUE` (`ID`, `LIBELLE`) VALUES
(1, 'Français'),
(3, 'Japonais'),
(4, 'Anglais'),
(5, 'Espagnol');

-- --------------------------------------------------------

--
-- Structure de la table `LIVRE`
--

DROP TABLE IF EXISTS `LIVRE`;
CREATE TABLE IF NOT EXISTS `LIVRE` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TITRE` varchar(255) NOT NULL,
  `ID_AUTEUR` int(11) NOT NULL,
  `ID_EDITEUR` int(11) NOT NULL,
  `TOME` int(11) NOT NULL,
  `ID_LANGUE` int(11) NOT NULL,
  `ID_SUPPORT` int(11) NOT NULL,
  `ID_GENRE` int(11) NOT NULL,
  `NB_PAGES` int(11) NOT NULL,
  `ISBN` varchar(255) NOT NULL,
  `DATE_PARUTION` date NOT NULL,
  `POIDS` int(11) NOT NULL,
  `DIMENSIONS` varchar(255) NOT NULL,
  `QUANTITE` int(11) NOT NULL,
  `PRIX` float NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`),
  KEY `FK_LIVRE_TITRE` (`TITRE`),
  KEY `FK_LIVRE_AUTEUR` (`ID_AUTEUR`),
  KEY `FK_LIVRE_GENRE` (`ID_GENRE`),
  KEY `FK_LIVRE_SUPPORT` (`ID_SUPPORT`),
  KEY `FK_LIVRE_LANGUE` (`ID_LANGUE`),
  KEY `FK_LIVRE_EDITEUR` (`ID_EDITEUR`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `LIVRE_TEST`
--

DROP TABLE IF EXISTS `LIVRE_TEST`;
CREATE TABLE IF NOT EXISTS `LIVRE_TEST` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TITRE_LIVRE` varchar(255) NOT NULL,
  `AUTEUR_LIVRE` varchar(255) NOT NULL,
  `PRIX` float NOT NULL,
  `QUANTITE` int(11) NOT NULL,
  KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `LIVRE_TEST`
--

INSERT INTO `LIVRE_TEST` (`ID`, `TITRE_LIVRE`, `AUTEUR_LIVRE`, `PRIX`, `QUANTITE`) VALUES
(1, 'sailor moon', 'auteur sailormoon', 6.95, 6),
(2, 'relife', 'yayoisho', 9.17, 12),
(3, 'notre dame', 'victor hugo', 15.95, 60);

-- --------------------------------------------------------

--
-- Structure de la table `REALISATEUR_DVD`
--

DROP TABLE IF EXISTS `REALISATEUR_DVD`;
CREATE TABLE IF NOT EXISTS `REALISATEUR_DVD` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(255) NOT NULL,
  `PRENOM` varchar(255) NOT NULL,
  KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `SOUS_TITRE`
--

DROP TABLE IF EXISTS `SOUS_TITRE`;
CREATE TABLE IF NOT EXISTS `SOUS_TITRE` (
  `ID_DVD` int(11) NOT NULL,
  `ID_LANGUE` int(11) NOT NULL,
  PRIMARY KEY (`ID_DVD`,`ID_LANGUE`),
  KEY `FK_SOUS_TITRE_LANGUE` (`ID_LANGUE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `SUPPORT`
--

DROP TABLE IF EXISTS `SUPPORT`;
CREATE TABLE IF NOT EXISTS `SUPPORT` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `LIBELLE` varchar(255) NOT NULL,
  KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `AUDIO`
--
ALTER TABLE `AUDIO`
  ADD CONSTRAINT `FK_AUDIO_LANGUE` FOREIGN KEY (`ID_LANGUE`) REFERENCES `LANGUE` (`ID`);

--
-- Contraintes pour la table `CD`
--
ALTER TABLE `CD`
  ADD CONSTRAINT `FK_CD_AUTEUR` FOREIGN KEY (`ID_AUTEUR`) REFERENCES `AUTEUR_CD` (`ID`),
  ADD CONSTRAINT `FK_CD_GENRE_MUSIC` FOREIGN KEY (`ID_GENRE_MUS`) REFERENCES `GENRE_MUSICAL` (`ID`);

--
-- Contraintes pour la table `DVD`
--
ALTER TABLE `DVD`
  ADD CONSTRAINT `FK_DVD_AUDIO` FOREIGN KEY (`ID_AUDIO`) REFERENCES `AUDIO` (`ID_DVD`),
  ADD CONSTRAINT `FK_DVD_FORMAT` FOREIGN KEY (`ID_FORMAT`) REFERENCES `FORMAT` (`ID`),
  ADD CONSTRAINT `FK_DVD_REALISATEUR` FOREIGN KEY (`ID_REALISATEUR`) REFERENCES `REALISATEUR_DVD` (`ID`),
  ADD CONSTRAINT `FK_DVD_SOUS_TITRE` FOREIGN KEY (`ID_SOUS_TITRE`) REFERENCES `SOUS_TITRE` (`ID_DVD`);

--
-- Contraintes pour la table `LIVRE`
--
ALTER TABLE `LIVRE`
  ADD CONSTRAINT `FK_LIVRE_AUTEUR` FOREIGN KEY (`ID_AUTEUR`) REFERENCES `AUTEUR_LIVRE` (`ID`),
  ADD CONSTRAINT `FK_LIVRE_EDITEUR` FOREIGN KEY (`ID_EDITEUR`) REFERENCES `EDITEUR` (`ID`),
  ADD CONSTRAINT `FK_LIVRE_LANGUE` FOREIGN KEY (`ID_LANGUE`) REFERENCES `LANGUE` (`ID`),
  ADD CONSTRAINT `FK_LIVRE_SUPPORT` FOREIGN KEY (`ID_SUPPORT`) REFERENCES `SUPPORT` (`ID`);

--
-- Contraintes pour la table `SOUS_TITRE`
--
ALTER TABLE `SOUS_TITRE`
  ADD CONSTRAINT `FK_SOUS_TITRE_LANGUE` FOREIGN KEY (`ID_LANGUE`) REFERENCES `LANGUE` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
