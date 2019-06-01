-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  sam. 01 juin 2019 à 21:56
-- Version du serveur :  10.4.5-MariaDB-1:10.4.5+maria~bionic-log
-- Version de PHP :  7.3.6-1+ubuntu18.04.1+deb.sury.org+1

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

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- RELATIONS POUR LA TABLE `admin`:
--

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

DROP TABLE IF EXISTS `competences`;
CREATE TABLE `competences` (
  `id` int(11) NOT NULL,
  `Nom` text NOT NULL,
  `Niveau` int(11) NOT NULL,
  `Pourcentage` int(11) NOT NULL,
  `Categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS POUR LA TABLE `competences`:
--

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
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
-- RELATIONS POUR LA TABLE `experiences`:
--

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

DROP TABLE IF EXISTS `projets`;
CREATE TABLE `projets` (
  `id` int(11) NOT NULL,
  `Nom` text NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Categorie` text NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS POUR LA TABLE `projets`:
--

-- --------------------------------------------------------

--
-- Structure de la table `social`
--

DROP TABLE IF EXISTS `social`;
CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- RELATIONS POUR LA TABLE `social`:
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `profile_pic` varchar(255) NOT NULL DEFAULT '''./img/member/antoine.png''',
  `email` varchar(255) NOT NULL DEFAULT 'nom@domain.com',
  `Address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `birth_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- RELATIONS POUR LA TABLE `user`:
--

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `work`, `description`, `profile_pic`, `email`, `Address`, `phone`, `nationality`, `birth_date`) VALUES
(1, 'Antoine THYS', 'Étudiant Ynov Informatique', 'Je m\'appelle Antoine THYS. Je suis actuellement étudiant Ynov Infomatique sur le campus de Bordeaux. Lorem ipsum dolor sit amet, consectetur ascing elits, sed do eiusmod tempor incidunt ut labore et dolore mafgna aliqua. Ut enim ad mini vniam quis nerci, tation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autes irure dolor in reprehenderit in etrs voluptate velit esse cillum dolore eu fugiat nulla pariatur. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.', './img/member/antoine.png', 'contact@antoinethys.com', '17 rue Pascal Triat, 33520 Bruges, FR', '+33 6 40 23 55 96', 'Français / Belge', '1999-07-16');

-- --------------------------------------------------------

--
-- Structure de la table `vars`
--

DROP TABLE IF EXISTS `vars`;
CREATE TABLE `vars` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL DEFAULT './img/logo.png',
  `footer_logo` varchar(255) NOT NULL DEFAULT './img/footer-logo.png',
  `website_name` varchar(255) NOT NULL DEFAULT 'CV',
  `url` varchar(255) NOT NULL DEFAULT 'monsite.com',
  `cat_comp1` varchar(255) NOT NULL,
  `cat_comp2` varchar(255) NOT NULL,
  `description_comp1` varchar(255) NOT NULL,
  `description_comp2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS POUR LA TABLE `vars`:
--

--
-- Déchargement des données de la table `vars`
--

INSERT INTO `vars` (`id`, `logo`, `footer_logo`, `website_name`, `url`, `cat_comp1`, `cat_comp2`, `description_comp1`, `description_comp2`) VALUES
(1, './img/logo.png', './img/footer-logo.png', 'Antoine THYS', 'antoinethys.com', 'Développement', 'Infrastructure & SI', 'Mes compétences en developpement logiciel et web.', 'Mes compétences en administration systèmes et réseaux.');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
