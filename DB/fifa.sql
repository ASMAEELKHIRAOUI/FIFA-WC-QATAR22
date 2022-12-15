-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 15 déc. 2022 à 10:19
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
  `match_team1` int(11) DEFAULT NULL,
  `match_team2` int(11) DEFAULT NULL,
  `stad` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `Code` varchar(255) NOT NULL
  `datetime` datetime DEFAULT NULL,
  `Code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `matches`
--

INSERT INTO `matches` (`id`, `match_team1`, `match_team2`, `stad`, `price`, `description`, `datetime`, `Code`) VALUES
(1, 18, 12, 7, 23, 'FGDFG', '2022-12-17 00:20:00', 'H90AZ7R908A75908A798RD9A'),
(2, 24, 24, 3, 6, 'Quia ut odit est aut', '2022-12-24 00:45:00', '63978dd7a5ed13.24915622'),
(3, 14, 16, 5, 543, 'Quo harum omnis ab a', '2022-12-16 21:53:00', '639793c705f1d4.56025756'),
(4, 25, 30, 8, 53, 'Pariatur Placeat l', '2005-01-06 08:21:00', '63979845a2c5b6.27395938'),
(5, 24, 19, 3, 8, 'Aut obcaecati quia s', '1996-07-09 18:03:00', '6397998c7f9dd2.13154798'),
(6, 31, 21, 2, 78, 'Ex nobis illum aut ', '2022-12-16 19:42:00', '6398c7a8d35e75.00986520'),
(7, 4, 15, 1, 13, 'Cum sit fugiat sed ', '2022-12-23 19:42:00', '6398c7b57939e9.47214162'),
(8, 23, 5, 3, 50, 'Dignissimos enim ips', '2022-12-24 04:26:00', '6398c7be9c0e50.44545712'),
(9, 30, 29, 2, 84, 'Fuga Tenetur dicta ', '2022-12-23 03:53:00', '6398c83c493178.61664271'),
(10, 5, 10, 8, 92, 'Laboris maxime fugia', '2022-12-16 22:55:00', '6398f4df3b85e7.05174014'),
(11, 7, 30, 4, 93, 'Laudantium reiciend', '2022-12-30 01:36:00', '639a0da61364d6.29624067'),
(12, 17, 15, 6, 84, 'Ratione tempora reru', '2022-12-16 17:41:00', '639a189076b1e7.77544105');

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

--
-- Déchargement des données de la table `spectator`
--

INSERT INTO `spectator` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'jilali', 'jljl', 'hiro@zoro', 'agadir'),
(2, 'karmilo', 'balid', 'titili@44', 'kjJKHKJhkjqhs'),
(3, 'abdellah', 'elhilaly', 'abdellah@gmail.com', '123aze123aze'),
(4, 'yassin', 'bono', 'yassin@gmail.com', '11223344');

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
(8, 'Costa Rica', 'Luis Fernando Suárez', 'costaricat.jpg', 'costarical.jpg'),
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
(22, 'Serbia', 'Dragan Stojkovic', 'serbiat.jpg', 'serbial.jpg'),
(23, 'Spain', 'Luis Enrique', 'spaint.jpg', 'spainl.jpg'),
(24, 'Switzerland', 'Murat Yakin', 'switzerlandt.jpg', 'switzerlandl.jpg'),
(25, 'Uruguay', 'Diego Alonso', 'uruguayt.jpg', 'uruguayl.jpg'),
(26, 'United States', 'Gregg Berhalter', 'usat.jpg', 'usal.jpg'),
(27, 'Japan', 'Hajime Moriyasu', 'Japant.jpg', 'Japanl.jpg'),
(28, 'South Korea', 'Paulo Bento', 'SouthKoreat.jpg', 'SouthKoreal.jpg'),
(29, 'Tunisia', 'Jalel Kadri', 'Tunisiat.jpg', 'Tunisial.jpg'),
(30, 'Wales', 'Rob Page', 'Walest.jpg', 'Walesl.jpg'),
(31, 'Senegal', 'Aliou Cisse', 'Senegalt.jpg', 'Senegall.jpg'),
(32, 'Netherlands', 'Aliou Cisse', 'Senegalt.jpg', 'Netherlandsl.jpg');

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
-- Déchargement des données de la table `ticket`
--

INSERT INTO `ticket` (`id`, `match_id`, `user_id`) VALUES
(1, 3, 2),
(2, 3, 2),
(3, 10, 2),
(4, 3, 2),
(5, 2, 2),
(6, 2, 2),
(7, 2, 2),
(8, 2, 2),
(9, 3, 2),
(10, 3, 2),
(11, 2, 2),
(12, 2, 2),
(13, 2, 2),
(14, 2, 2),
(15, 2, 2),
(18, 12, 2),
(19, 1, 2),
(20, 12, 2),
(21, 12, 2),
(22, 12, 2),
(23, 12, 2),
(24, 1, 2),
(25, 1, 2),
(26, 1, 2),
(27, 3, 2),
(28, 3, 2),
(29, 7, 2),
(30, 7, 2),
(31, 2, 2),
(32, 2, 2),
(33, 1, 2),
(34, 2, NULL),
(35, 2, NULL),
(36, 2, NULL),
(37, 10, NULL);

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
-- AUTO_INCREMENT pour la table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `spectator`
--
ALTER TABLE `spectator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `stad`
--
ALTER TABLE `stad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
