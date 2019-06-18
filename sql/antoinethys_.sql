-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 18 juin 2019 à 23:59
-- Version du serveur :  10.3.12-MariaDB
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `antoinethys_`
--

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

DROP TABLE IF EXISTS `competences`;
CREATE TABLE IF NOT EXISTS `competences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  `Niveau` varchar(255) NOT NULL,
  `Pourcentage` int(11) NOT NULL,
  `Droite` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `competences`
--

INSERT INTO `competences` (`id`, `Nom`, `Niveau`, `Pourcentage`, `Droite`) VALUES
(1, 'Python', 'Intermédiaire', 50, 0),
(2, 'C', 'Débutant', 30, 0),
(3, 'HTML/CSS/SASS', 'Avancé', 70, 0),
(4, 'JavaScript', 'Débutant', 30, 0),
(5, 'Administration Windows / AD', 'Avancé', 80, 1),
(6, 'Administration Linux', 'Avancé', 75, 1),
(7, 'Administration Réseau', 'Intermédiaire', 70, 1),
(8, 'Cisco', 'Intermédiaire', 65, 1);

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

DROP TABLE IF EXISTS `experiences`;
CREATE TABLE IF NOT EXISTS `experiences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lettre` char(1) NOT NULL,
  `date` text NOT NULL,
  `nom` text NOT NULL,
  `Lieu` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `experiences`
--

INSERT INTO `experiences` (`id`, `lettre`, `date`, `nom`, `Lieu`, `description`) VALUES
(1, 'Y', '2018', 'Ynov Informatique', 'Bordeaux Ynov Campus', 'Etudiant à Ynov Informatique anciennement Ingesup visant à l\'obtention d\'un <a href=\"https://www.ynov.com/formation/ynov-masteres/expert-cloud-securite-reseaux/\"> Mastère Expert Cloud Sécurité & Infrastructure</a>.'),
(2, 'S', '08 Janvier - 02 Février 2018 & 23 Avril - 19 Mai 2018', 'Stage - SNCF Télécom', 'Bordeaux Gare St Jean', 'Stage effectué au service télécoms de la SNCF de Bordeaux. Mise en service d\'un service de VOIP. '),
(3, 'S', '23 Janvier - 17 Février 2017 & 06 Mars - 31 Mars 2017', 'Stage - SNEF Connect', 'Agence SNEF de Mérignac', 'Stage effectué à l\'agence SNEF de Mérignac dans le service SNEF Connect. Missions de préconfigurations de systèmes de vidéo protection pour le domaine public et privé. '),
(4, 'P', '2016 - 2018', 'Bac Pro SEN', 'Lycée Professionnel Charles Péguy', 'Première et Terminale Professionnelle SEN (Systèmes Electroniques Numériques) Obtention du Baccalauréat professionnel Systèmes électroniques numériques mention \"Bien\" en 2018. '),
(5, 'G', '2014 - 2016', 'Filière Générale', 'Lycée Assomption Ste Clotilde Bordeaux', 'Seconde Générale et Première Scientifique au Lycée Assomption Sainte Clotilde.');

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

DROP TABLE IF EXISTS `projets`;
CREATE TABLE IF NOT EXISTS `projets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Categorie` varchar(255) NOT NULL,
  `Lcat` char(3) NOT NULL,
  `Image` text NOT NULL,
  `Lien_projet` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id`, `Nom`, `Description`, `Categorie`, `Lcat`, `Image`, `Lien_projet`) VALUES
(1, 'Infrastructure OSPF', 'Mise en place d\'une infrastructure OSPF virtuelle.', 'Infra / SI', 'SI', 'img/portfolio/tp_infra.png', 'https://github.com/antoine33520/CCNA/blob/master/TP_6.md'),
(2, 'Pong Game', 'Réalisation d\'un jeu d\'arcade type Pong en Python3', 'Logiciel', 'LOG', 'img/portfolio/pong.svg', 'https://github.com/antoine33520/pong'),
(3, 'Site Web CV', 'Création d\'un CV sous forme de site internet avec une page d\'administration.', 'Web', 'WEB', 'img/portfolio/test.png', 'https://github.com/antoine33520/projet_cv'),
(4, 'Projet Plante Connectée', 'Projet Plante Connectée avec Raspberry Pi et Arduino', 'Logiciel', 'LOG', 'img/portfolio/raspberry-pi.svg', 'https://github.com/antoine33520/projet_plante'),
(5, 'Projet Réseau', 'Mise en place d\'une solution de routage et de VPN opensource avec Pfsense', 'Infra / SI', 'SI', 'img/portfolio/pfsense.jpg', 'https://github.com/antoine33520/projet_infra'),
(6, 'Ansible / Proxmox', 'Déploiement et provisionnement de VMs sur proxmox avec Ansible', 'Infra / SI', 'SI', 'img/portfolio/Ansible_logo.svg', '');

-- --------------------------------------------------------

--
-- Structure de la table `social`
--

DROP TABLE IF EXISTS `social`;
CREATE TABLE IF NOT EXISTS `social` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `social`
--

INSERT INTO `social` (`id`, `name`, `lien`) VALUES
(1, 'linkedin', 'www.linkedin.com/in/antoine-t-717403a9'),
(4, 'github', 'https://github.com/antoine33520');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `profile_pic` varchar(255) NOT NULL DEFAULT '''./img/antoine.png''',
  `email` varchar(255) NOT NULL DEFAULT 'nom@domain.com',
  `Address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `lien_cv` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `work`, `description`, `profile_pic`, `email`, `Address`, `phone`, `nationality`, `birth_date`, `lien_cv`) VALUES
(1, 'Antoine THYS', 'Étudiant Ynov Informatique (INGESUP)', 'Je m\'appelle Antoine THYS. Je suis actuellement étudiant Ynov Infomatique sur le campus de Bordeaux. Je prépare un Mastère Expert Cloud, Sécurité & Infrastructure en 5 ans.\r\nEn plus d\'être informaticien à plein temps je suis équipier secouriste de la protection civile sur mon temps libre.\r\nCe CV Web résulte d\'un projet obligatoire de première année de bachelor demandant la réalisation d\'un CV sous forme de site web dynamique avec une interface d\'administration.', './img/pdp.png', 'contact@antoinethys.com', '17 rue Pascal Triat, 33520 Bruges, FR', '+33 6 40 23 55 96', 'Français / Belge', '1999-07-16', './documents/cv_antoine_thys.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `vars`
--

DROP TABLE IF EXISTS `vars`;
CREATE TABLE IF NOT EXISTS `vars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) NOT NULL DEFAULT '/img/logo.png',
  `footer_logo` varchar(255) NOT NULL DEFAULT '/img/footer-logo.png',
  `fav-icon` varchar(255) NOT NULL DEFAULT '/img/fav-icon.png',
  `website_name` varchar(255) NOT NULL DEFAULT 'CV',
  `url` varchar(255) NOT NULL DEFAULT 'monsite.com',
  `cat_comp1` varchar(255) NOT NULL,
  `cat_comp2` varchar(255) NOT NULL,
  `description_comp1` varchar(255) NOT NULL,
  `description_comp2` varchar(255) NOT NULL,
  `info_contact` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vars`
--

INSERT INTO `vars` (`id`, `logo`, `footer_logo`, `fav-icon`, `website_name`, `url`, `cat_comp1`, `cat_comp2`, `description_comp1`, `description_comp2`, `info_contact`) VALUES
(1, '/img/logo.png', '/img/footer-logo.png', '/img/fav-icon.png', 'Antoine THYS', 'antoinethys.com', 'Développement', 'Infrastructure & SI', 'Mes compétences en developpement logiciel et web.', 'Mes compétences en administration systèmes et réseaux.', 'Pour tout renseignement je suis joignable à l\'adresse email : contact@antoinethys.com indiqué ce dessous. <br /> \r\nVous pouvez aussi me contacter sur mon adresse étudiant : antoine.thys@ynov.com en cas de nécessité.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
