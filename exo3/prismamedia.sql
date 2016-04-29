-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 29 Avril 2016 à 12:27
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `prismamedia`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnes`
--

CREATE TABLE IF NOT EXISTS `abonnes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `date_de_naissance` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `abonnes`
--

INSERT INTO `abonnes` (`id`, `nom`, `sexe`, `date_de_naissance`) VALUES
(1, 'Alice', 'femme', '1981-08-27'),
(2, 'Bob', 'homme', '1979-01-19'),
(3, 'Claire', 'femme', '1971-03-20'),
(4, 'David', 'homme', '1972-07-22'),
(5, 'Eve', 'femme', '1959-12-11'),
(6, 'Felix', 'homme', '1999-07-16'),
(7, 'Géraldine', 'femme', '2000-07-09');

-- --------------------------------------------------------

--
-- Structure de la table `abonnes_magazines`
--

CREATE TABLE IF NOT EXISTS `abonnes_magazines` (
  `abonnes_id` int(11) NOT NULL,
  `magazines_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `abonnes_magazines`
--

INSERT INTO `abonnes_magazines` (`abonnes_id`, `magazines_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(3, 2),
(4, 2),
(1, 3),
(3, 3),
(5, 3),
(6, 3),
(6, 4),
(7, 4),
(3, 5),
(6, 5);

-- --------------------------------------------------------

--
-- Structure de la table `magazines`
--

CREATE TABLE IF NOT EXISTS `magazines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_magazine` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` year(4) NOT NULL,
  `parution` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `magazines`
--

INSERT INTO `magazines` (`id`, `nom_magazine`, `type`, `date`, `parution`) VALUES
(1, 'Géo', 'Découverte', 1979, 'Mensuel'),
(2, 'Ça m’interesse', 'Découverte', 1981, 'Mensuel'),
(3, 'Télé Loisir\r\n', 'Télévision\r\n', 1986, 'hebdomadaire'),
(4, 'Néon', 'Actualité', 2012, 'bimestriel'),
(5, 'Gala', 'Actualité\r\n', 1993, 'Hebdomadaire');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
