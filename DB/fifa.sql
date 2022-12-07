-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 07 déc. 2022 à 11:59
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fifa`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'asmae', 'admin', 'asmae@gmail.com', 'azertyuiop');

-- --------------------------------------------------------

--
-- Structure de la table `matches`
--

CREATE TABLE `matches` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `match_team1` int(11) DEFAULT NULL,
  `match_team2` int(11) DEFAULT NULL,
  `stad` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `spectator`
--

CREATE TABLE `spectator` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `stad`
--

CREATE TABLE `stad` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `stad`
--

INSERT INTO `stad` (`id`, `name`, `capacity`, `location`, `city`, `image`) VALUES
(1, 'Al Bayt Stadium', 68895, 'Al Khor 35km north of central Doha', 'Al Khor', 'albayt.jpg'),
(2, 'Ahmad Bin Ali Stadium', 45032, 'Umm Al Afaei 20km west of central Doha', 'Umm Al Afaei', 'ahmad.jpg'),
(3, 'Al Janoub Stadium', 44325, 'Al Wakrah 22km east of central Doha', 'Al Wakrah', 'aljanoub.jpg'),
(4, 'Khalifa International Stadium', 45857, 'Aspire 5km west of central Doha', 'Aspire', 'khalifa.jpg'),
(5, 'Education City Stadium', 44667, 'Education City in Al Rayyan 7km north-west of central Doha', 'Al Rayyan', 'education.jpg'),
(6, 'Lusail Stadium', 88966, 'Lusail 20km north of central Doha', 'Lusail', 'lusail.jpg'),
(7, '974 Stadium', 44089, 'Ras Abu Aboud 10km east of central Doha', 'Ras Abu Aboud', '974.jpg'),
(8, 'Al Thumama Stadium', 44400, 'Al Thumama 12km south of central Doha', 'Al Thumama', 'althumama.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `coach` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `team`
--

INSERT INTO `team` (`id`, `country`, `coach`, `image`, `logo`) VALUES
(1, 'Morocco', 'Walid Regragui', 'moroccot.jpg', 'moroccol.jpg'),
(2, 'Argentina', 'Lionel Scaloni', 'argentinat.jpg', 'argentinal.jpg'),
(3, 'Australia', 'Graham Arnold', 'australiat.jpg', 'australial.jpg'),
(4, 'Belgium', 'Ives Serneels', 'belgiumt.jpg', 'belgiuml.jpg'),
(5, 'Brazil', 'Tite', 'brazilt.jpg', 'brazill.jpg'),
(6, 'Cameroon', 'Rigobert Song', 'cameroont.jpg', 'cameroonl.jpg'),
(7, 'Canada', 'John Herdman', 'canadat.jpg', 'canadal.jpg'),
(8, 'Costarica', 'Luis Fernando Suárez', 'costaricat.jpg', 'costarical.jpg'),
(9, 'Croitia', 'Zlatko Dalić', 'croitiat.jpg', 'croitial.jpg'),
(10, 'Denmark', 'Kasper Hjulmand', 'denmarkt.jpg', 'denmarkl.jpg'),
(11, 'Ecuador', 'Gustavo Alfaro', 'ecuadort.jpg', 'ecuadorl.jpg'),
(12, 'England', 'Gareth Southgate', 'englandt.jpg', 'englandl.jpg'),
(13, 'France', 'Didier Claude Deschamps', 'francet.jpg', 'francel.jpg'),
(14, 'Germany', 'Hansi Flick', 'germanyt.jpg', 'germanyl.jpg'),
(15, 'Ghana', 'Otto Addo', 'ghanat.jpg', 'ghanal.jpg'),
(16, 'Iran', 'Carlos Queiroz', 'irant.jpg', 'iranl.jpg'),
(17, 'Saudi Arabia', 'Hervé Renard', 'ksat.jpg', 'ksal.jpg'),
(18, 'Mexico', 'Miguel Herrera', 'mexicot.jpg', 'mexicol.jpg'),
(19, 'Poland', 'Czesław Michniewicz', 'polandt.jpg', 'polandl.jpg'),
(20, 'Portugal', 'Fernando Santos', 'portugalt.jpg', 'portugall.jpg'),
(21, 'Qatar', 'Félix Sánchez', 'qatart.jpg', 'qatarl.jpg'),
(22, 'Serbia', 'Dragan Stojković', 'serbiat.jpg', 'serbial.jpg'),
(23, 'Spain', 'Luis Enrique', 'spaint.jpg', 'spainl.jpg'),
(24, 'Switzerland', 'Murat Yakin', 'switzerlandt.jpg', 'switzerlandl.jpg'),
(25, 'Uruguay', 'Diego Alonso', 'uruguayt.jpg', 'uruguayl.jpg'),
(26, 'USA', 'Gregg Berhalter', 'usat.jpg', 'usa.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `match_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `match_team1` (`match_team1`),
  ADD KEY `match_team2` (`match_team2`),
  ADD KEY `stad` (`stad`);

--
-- Index pour la table `spectator`
--
ALTER TABLE `spectator`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `stad`
--
ALTER TABLE `stad`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `match_id` (`match_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `spectator`
--
ALTER TABLE `spectator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `stad`
--
ALTER TABLE `stad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `matches_ibfk_2` FOREIGN KEY (`match_team1`) REFERENCES `team` (`id`),
  ADD CONSTRAINT `matches_ibfk_3` FOREIGN KEY (`match_team2`) REFERENCES `team` (`id`),
  ADD CONSTRAINT `matches_ibfk_4` FOREIGN KEY (`stad`) REFERENCES `stad` (`id`);

--
-- Contraintes pour la table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `spectator` (`id`),
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`match_id`) REFERENCES `matches` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
