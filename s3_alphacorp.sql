-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 21 Novembre 2018 à 10:19
-- Version du serveur :  5.7.11
-- Version de PHP :  7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `s3.alphacorp`
--

-- --------------------------------------------------------

--
-- Structure de la table `bg_admin`
--

CREATE TABLE `bg_admin` (
  `id` int(2) NOT NULL,
  `name` varchar(15) NOT NULL,
  `password` varchar(8) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `bg_admin`
--

INSERT INTO `bg_admin` (`id`, `name`, `password`, `createdAt`) VALUES
(1, 'mpagnol', 'pagnol', '2018-11-13 23:00:00'),
(2, 'vhugo', 'hugo', '2018-11-13 23:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `bg_challenge`
--

CREATE TABLE `bg_challenge` (
  `id` int(5) NOT NULL,
  `description` varchar(80) NOT NULL,
  `code` varchar(10) NOT NULL,
  `collection_id` int(5) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `bg_challenge`
--

INSERT INTO `bg_challenge` (`id`, `description`, `code`, `collection_id`, `createdAt`, `updateAt`) VALUES
(1, 'Associer une photo avec sa lettre de l\'alphabet.', 'Défi 1', 1, '2018-11-21 09:23:50', '0000-00-00 00:00:00'),
(2, 'retrouver le message exprimé par une série d\'images', 'Défi 2', 1, '2018-11-21 09:23:50', '0000-00-00 00:00:00'),
(3, 'Composer soit même un message à partir d\'une série de photos', 'Défi 3', 2, '2018-11-21 09:24:26', '2018-11-21 09:25:01');

-- --------------------------------------------------------

--
-- Structure de la table `bg_challenge_classroom`
--

CREATE TABLE `bg_challenge_classroom` (
  `classroom_id` int(5) NOT NULL,
  `challenge_id` int(5) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `bg_children`
--

CREATE TABLE `bg_children` (
  `id` int(5) NOT NULL,
  `pseudo` varchar(15) NOT NULL,
  `avatar` varchar(50) DEFAULT NULL,
  `classroom_id` int(3) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `bg_children`
--

INSERT INTO `bg_children` (`id`, `pseudo`, `avatar`, `classroom_id`, `createdAt`) VALUES
(1, 'Croquignol', NULL, 1, '2018-11-21 09:26:30'),
(2, 'Filochard', NULL, 1, '2018-11-21 09:26:30'),
(3, 'Ribouldingue', NULL, 1, '2018-11-21 09:26:30');

-- --------------------------------------------------------

--
-- Structure de la table `bg_classroom`
--

CREATE TABLE `bg_classroom` (
  `id` int(3) NOT NULL,
  `description` text NOT NULL,
  `teachername` varchar(20) NOT NULL,
  `code` varchar(10) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `bg_classroom`
--

INSERT INTO `bg_classroom` (`id`, `description`, `teachername`, `code`, `createdAt`) VALUES
(1, 'Classe "Les petits Loups" de Saint Michel', 'Pierre FRESNEL', 'a145a', '2018-11-13 23:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `bg_collection`
--

CREATE TABLE `bg_collection` (
  `id` int(10) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `bg_collection`
--

INSERT INTO `bg_collection` (`id`, `name`) VALUES
(1, 'demo 1'),
(2, 'demo 2');

-- --------------------------------------------------------

--
-- Structure de la table `bg_collection_image`
--

CREATE TABLE `bg_collection_image` (
  `id` int(11) NOT NULL,
  `letter` char(1) NOT NULL,
  `image` varchar(80) NOT NULL,
  `collection_id` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `bg_admin`
--
ALTER TABLE `bg_admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bg_challenge`
--
ALTER TABLE `bg_challenge`
  ADD PRIMARY KEY (`id`),
  ADD KEY `collection_id` (`collection_id`);

--
-- Index pour la table `bg_challenge_classroom`
--
ALTER TABLE `bg_challenge_classroom`
  ADD PRIMARY KEY (`classroom_id`,`challenge_id`),
  ADD KEY `classroom_id` (`classroom_id`,`challenge_id`),
  ADD KEY `Foreign_key-4` (`challenge_id`);

--
-- Index pour la table `bg_children`
--
ALTER TABLE `bg_children`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classroom_id` (`classroom_id`);

--
-- Index pour la table `bg_classroom`
--
ALTER TABLE `bg_classroom`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bg_collection`
--
ALTER TABLE `bg_collection`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bg_collection_image`
--
ALTER TABLE `bg_collection_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `collection_id` (`collection_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `bg_admin`
--
ALTER TABLE `bg_admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `bg_challenge`
--
ALTER TABLE `bg_challenge`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `bg_children`
--
ALTER TABLE `bg_children`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `bg_classroom`
--
ALTER TABLE `bg_classroom`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `bg_collection`
--
ALTER TABLE `bg_collection`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `bg_collection_image`
--
ALTER TABLE `bg_collection_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `bg_challenge`
--
ALTER TABLE `bg_challenge`
  ADD CONSTRAINT `Foreign_key-5` FOREIGN KEY (`collection_id`) REFERENCES `bg_collection` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `bg_challenge_classroom`
--
ALTER TABLE `bg_challenge_classroom`
  ADD CONSTRAINT `Foreign_key-3` FOREIGN KEY (`classroom_id`) REFERENCES `bg_classroom` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Foreign_key-4` FOREIGN KEY (`challenge_id`) REFERENCES `bg_challenge` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `bg_children`
--
ALTER TABLE `bg_children`
  ADD CONSTRAINT `Foreign_key-1` FOREIGN KEY (`classroom_id`) REFERENCES `bg_classroom` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `bg_collection_image`
--
ALTER TABLE `bg_collection_image`
  ADD CONSTRAINT `Foreign_key-2` FOREIGN KEY (`collection_id`) REFERENCES `bg_collection` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
