-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 29 juin 2020 à 17:54
-- Version du serveur :  8.0.20-0ubuntu0.20.04.1
-- Version de PHP : 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `discussion`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int NOT NULL,
  `message` varchar(140) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_utilisateur` int NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `message`, `id_utilisateur`, `date`) VALUES
(69, 'test', 6, '2020-06-25'),
(70, 'eddefe', 6, '2020-06-25'),
(71, 'fefzzefezf', 6, '2020-06-25'),
(72, 'regz', 6, '2020-06-25'),
(73, 'zgzg', 6, '2020-06-25'),
(74, 'zgzeg', 6, '2020-06-25'),
(75, 'zegzg', 6, '2020-06-25'),
(76, 'gzegzg', 6, '2020-06-25'),
(77, 'eeee\r\n', 6, '2020-06-25'),
(78, 'zgzege', 6, '2020-06-25'),
(79, 'zgzeg', 6, '2020-06-25'),
(80, 'zgezg', 6, '2020-06-25'),
(81, 'ddbdgbf', 6, '2020-06-25'),
(82, 'dfbdb', 6, '2020-06-25'),
(83, 'dfbfdb', 6, '2020-06-25'),
(84, 'fdbdfb', 6, '2020-06-25'),
(85, 'dfbdfb', 6, '2020-06-25'),
(86, 'dbfdbfd', 6, '2020-06-25'),
(110, 'efefzefezf', 6, '2020-06-25'),
(111, 'fdffddbffdb', 5, '2020-06-25'),
(112, 'efffffffffffffffffffffffffffffffffffffffffffffffefffffffffffffffffffffffffffffffffffffffffffffffeffffffffffffffffffffffffffffffffffffffffeee', 5, '2020-06-25'),
(113, 'efffffffffffffffffffffffffffffffffffffffffffffffefffffffffffffffffffffffffffffffffffffffffffffffefffffffffffffffffffffffffffffffffffffffffff', 5, '2020-06-25'),
(114, 'efffffffffffffffffffffffffffffffffffffffffffffffefffffffffffffffffffffffffffffffffffffffffffffffefffffffffffffffffffffffffffffffffffffffffff', 5, '2020-06-25'),
(115, 'test1', 6, '2020-06-26'),
(116, 'eerr\r\n', 6, '2020-06-26'),
(117, 'efefef', 5, '2020-06-26'),
(118, 'edzfzefezf', 5, '2020-06-26'),
(119, 'papapappa\r\n', 5, '2020-06-26'),
(120, 'test', 5, '2020-06-26'),
(121, 'ccdecec', 5, '2020-06-26'),
(122, 'testtest', 5, '2020-06-26'),
(124, 'hello', 7, '2020-06-29'),
(125, 'Ca va ? ', 7, '2020-06-29'),
(126, 'Test scrollbar', 7, '2020-06-29'),
(127, 'Scrollbar OK', 7, '2020-06-29');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(5, 'user1', '$2y$10$wT/.odmYrhb9CFF5sobDC.sFDY9FTS2z7V8Uc7q7JRzR26c8nPxta'),
(6, 'user2', '$2y$10$wT/.odmYrhb9CFF5sobDC.sFDY9FTS2z7V8Uc7q7JRzR26c8nPxta'),
(7, 'SabriLLe', '$2y$10$UPYAwOlV4Qs9j65Zd0vjiOHKluIDwlafW7449HKe/fouChIMJrF2C');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
