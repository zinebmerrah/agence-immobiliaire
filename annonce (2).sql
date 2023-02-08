-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 08 fév. 2023 à 09:20
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `agence`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(20213) NOT NULL,
  `superficie` int(11) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `montant` decimal(10,2) DEFAULT NULL,
  `date_annonce` datetime DEFAULT current_timestamp(),
  `type_annonce` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id`, `titre`, `image`, `description`, `superficie`, `adresse`, `montant`, `date_annonce`, `type_annonce`) VALUES
(1, 'villa', 'img/images.jpg', 'composée de trois niveaux : rez de chaussée : une grande réception avec cheminée, une cuisine , wc de service, une chambre avec salle de bain.', 500, 'Tanger', '260000.00', '2023-02-02 00:00:00', 'location'),
(7, 'SPACIEUX APPARTEMENT', 'img/images.jpg', 'un spacieux penthouse : retrait , de 163m² dont 33m² de terrasse. se compose de: 2 chambres, salon et salle à manger, cuisine, salle de bain et wc..', 163, 'Florida, USA', '160000.00', '2023-02-03 00:00:00', 'Vente'),
(8, 'SPACIEUX APPARTEMENT', 'img/images.jpg', 'Un joli appartement meublé, doté dune posé de : 2 chambres, un salon, salle à manger, cuisine et 2 salles de bain', 120, 'city center, Tanger', '210000.00', '2023-02-03 00:00:00', 'Vente'),
(21, 'home', 'img/.russia-visa-application-requirements.jpg', 'Demeure de prestige dans un cadre privilégié, Demeure de prestige dans un cadre privilégié, ', 600, 'Tanger,city', '1546.00', '2023-02-03 22:07:04', 'location'),
(22, 'SPACIEUX VILLA', 'img/téléchargement (3).jpg', 'trois chambres dont une avec salle de bain, une deuxième salle de bain, un salon. terrasse, petite cuisine, pergola. garage pour deux v.\r\n\r\n', 150, 'Florida, USA', '2300000.00', '2023-02-03 22:32:20', 'Vente'),
(23, 'SPACIEUX APPARTEMENT', 'img/images.jpg', 'un spacieux appartement non meublé, sis dans un immeuble de standing, avec un système de sécurité très distingué.', 390, 'Tanger', '170000.00', '2023-02-03 22:32:57', 'Vente'),
(24, 'villa Tanger', 'img/images.jpg', 'plexe résidentiel avec jardins et piscine, des spacieuses villas , dotées dune vue panoramique. les villas de 360m², se composent de 5 chambres avec placards encastrées, 3 salons, une cuisine, deux salles de bains et une terrasse.', 473, 'Tanger', '78000.25', '2023-02-03 22:33:38', 'Vente'),
(26, 'SPACIEUX APPARTEMENT', 'img/images.jpg', 'Located in the center of Budapest, a 11-minute walk from House of Terror and 0.6 miles from Keleti Pályaudvar Metro Station, Nova City Aparthotel has accommodations with free WiFi, air conditioning.', 90, 'france, paris', '46000.00', '2023-02-03 23:02:57', 'Vente');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
