-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Mar 22 Mai 2012 à 13:57
-- Version du serveur: 5.5.16
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `poidatz`
--

-- --------------------------------------------------------

--
-- Structure de la table `zones`
--

CREATE TABLE IF NOT EXISTS `zones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=34 ;

--
-- Contenu de la table `zones`
--

INSERT INTO `zones` (`id`, `nom`) VALUES
(2, 'actualites'),
(3, 'etablissements'),
(4, 'visite_virtuelle'),
(5, 'centre_reeducation_fonctionnelle'),
(6, 'institut_education_motrice'),
(7, 'institut_medico_educatif'),
(8, 'service_education_specials_soins_domicile'),
(9, 'bouleaux'),
(10, 'unite_analyse_mouvement'),
(11, 'tobogan'),
(12, 'lutins'),
(13, 'espace_medical'),
(14, 'patologies_traitees'),
(15, 'equipements'),
(16, 'intervenants'),
(17, 'pole_medical'),
(18, 'pole_reeducation'),
(19, 'pole_soignant'),
(20, 'pole_scolaire'),
(21, 'inscrire_enfant'),
(22, 'deroulement_sejour'),
(23, 'documents_administratifs'),
(24, 'formalites_admission'),
(25, 'formulaire_admission'),
(26, 'informations_pratiques'),
(27, 'acces'),
(28, 'contacts'),
(29, 'recrutement'),
(30, 'charte'),
(31, 'loi_informatique_libertes'),
(32, 'soutenez_nous'),
(33, 'videos');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
