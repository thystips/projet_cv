-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 09 juin 2019 à 14:40
-- Version du serveur :  10.4.5-MariaDB-1:10.4.5+maria~bionic-log
-- Version de PHP :  7.3.5-1+ubuntu18.04.1+deb.sury.org+1

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
CREATE DATABASE IF NOT EXISTS `antoinethys_` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `antoinethys_`;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--
-- Création :  sam. 08 juin 2019 à 22:51
-- Dernière modification :  Dim 09 juin 2019 à 10:06
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'contact@antoinethys.com', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--
-- Création :  Dim 09 juin 2019 à 14:33
-- Dernière modification :  Dim 09 juin 2019 à 14:39
--

DROP TABLE IF EXISTS `competences`;
CREATE TABLE `competences` (
  `id` int(11) NOT NULL,
  `Nom` text NOT NULL,
  `Niveau` varchar(255) NOT NULL,
  `Pourcentage` int(11) NOT NULL,
  `Droite` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Création :  sam. 08 juin 2019 à 22:51
-- Dernière modification :  Dim 09 juin 2019 à 14:28
--

DROP TABLE IF EXISTS `experiences`;
CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `lettre` char(1) NOT NULL,
  `date` text NOT NULL,
  `nom` text NOT NULL,
  `Lieu` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Création :  Dim 09 juin 2019 à 14:12
-- Dernière modification :  Dim 09 juin 2019 à 14:18
--

DROP TABLE IF EXISTS `projets`;
CREATE TABLE `projets` (
  `id` int(11) NOT NULL,
  `Nom` text NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Categorie` text NOT NULL,
  `Lcat` char(3) NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id`, `Nom`, `Description`, `Categorie`, `Lcat`, `Image`) VALUES
(1, 'Test 1', 'Test 1', 'Infra / SI', 'SI', 'img/portfolio/test.png'),
(2, 'Test 2', 'Test 2', 'Web', 'WEB', 'img/portfolio/test.png'),
(3, 'Test 3', 'Test 3', 'Logiciel', 'LOG', 'img/portfolio/test.png'),
(4, 'Test 4', 'Test 4', 'Infra / SI', 'SI', 'img/portfolio/test.png'),
(5, 'Test 5', 'Test 5', 'Web', 'WEB', 'img/portfolio/test.png'),
(6, 'Test 6', 'Test 6', 'Infra / SI', 'SI', 'img/portfolio/test.png');

-- --------------------------------------------------------

--
-- Structure de la table `social`
--
-- Création :  sam. 08 juin 2019 à 22:51
--

DROP TABLE IF EXISTS `social`;
CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL,
  `afficher` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `social`
--

INSERT INTO `social` (`id`, `name`, `lien`, `afficher`) VALUES
(1, 'linkedin', 'www.linkedin.com/in/antoine-t-717403a9', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--
-- Création :  Dim 09 juin 2019 à 14:04
-- Dernière modification :  Dim 09 juin 2019 à 14:04
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `profile_pic` varchar(255) NOT NULL DEFAULT '''./img/antoine.png''',
  `email` varchar(255) NOT NULL DEFAULT 'nom@domain.com',
  `Address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `birth_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `work`, `description`, `profile_pic`, `email`, `Address`, `phone`, `nationality`, `birth_date`) VALUES
(1, 'Antoine THYS', 'Étudiant Ynov Informatique', 'Je m\'appelle Antoine THYS. Je suis actuellement étudiant Ynov Infomatique sur le campus de Bordeaux. Lorem ipsum dolor sit amet, consectetur ascing elits, sed do eiusmod tempor incidunt ut labore et dolore mafgna aliqua. Ut enim ad mini vniam quis nerci, tation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autes irure dolor in reprehenderit in etrs voluptate velit esse cillum dolore eu fugiat nulla pariatur. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Ceci est un cv demandé dans le cadre d\'un projet obligatoire.', './img/pdp.png', 'contact@antoinethys.com', '17 rue Pascal Triat, 33520 Bruges, FR', '+33 6 40 23 55 96', 'Français / Belge', '1999-07-16');

-- --------------------------------------------------------

--
-- Structure de la table `vars`
--
-- Création :  Dim 09 juin 2019 à 10:21
-- Dernière modification :  Dim 09 juin 2019 à 10:22
--

DROP TABLE IF EXISTS `vars`;
CREATE TABLE `vars` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL DEFAULT '/img/logo.png',
  `footer_logo` varchar(255) NOT NULL DEFAULT '/img/footer-logo.png',
  `fav-icon` varchar(255) NOT NULL DEFAULT '/img/fav-icon.png',
  `website_name` varchar(255) NOT NULL DEFAULT 'CV',
  `url` varchar(255) NOT NULL DEFAULT 'monsite.com',
  `cat_comp1` varchar(255) NOT NULL,
  `cat_comp2` varchar(255) NOT NULL,
  `description_comp1` varchar(255) NOT NULL,
  `description_comp2` varchar(255) NOT NULL,
  `info_contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vars`
--

INSERT INTO `vars` (`id`, `logo`, `footer_logo`, `fav-icon`, `website_name`, `url`, `cat_comp1`, `cat_comp2`, `description_comp1`, `description_comp2`, `info_contact`) VALUES
(1, '/img/logo.png', '/img/footer-logo.png', '/img/fav-icon.png', 'Antoine THYS', 'antoinethys.com', 'Développement', 'Infrastructure & SI', 'Mes compétences en developpement logiciel et web.', 'Mes compétences en administration systèmes et réseaux.', 'There are many variations of passages of Lorem Ipsum available, but the et majori have suffered alteration in some form, by injected humour, Domised words which don\'t look even slightly believable. If you are going to use a pas of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vars`
--
ALTER TABLE `vars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `vars`
--
ALTER TABLE `vars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
