-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 07 juin 2023 à 14:20
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
-- Base de données : `cinema`
--

-- --------------------------------------------------------

--
-- Structure de la table `actor`
--

CREATE TABLE `actor` (
  `id_actor` int(11) NOT NULL,
  `id_human` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `actor`
--

INSERT INTO `actor` (`id_actor`, `id_human`) VALUES
(1, 4),
(2, 6),
(4, 7),
(3, 8);

-- --------------------------------------------------------

--
-- Structure de la table `casting`
--

CREATE TABLE `casting` (
  `id_film` int(11) NOT NULL,
  `id_actor` int(11) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `casting`
--

INSERT INTO `casting` (`id_film`, `id_actor`, `id_role`) VALUES
(1, 1, 1),
(1, 2, 2),
(3, 1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `clasification`
--

CREATE TABLE `clasification` (
  `id_film` int(11) NOT NULL,
  `id_genre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `clasification`
--

INSERT INTO `clasification` (`id_film`, `id_genre`) VALUES
(1, 1),
(1, 3),
(1, 4),
(3, 1),
(3, 4),
(4, 4),
(4, 7),
(4, 8),
(5, 4),
(5, 7),
(5, 8);

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `france_release_date` date DEFAULT NULL,
  `length_in_minute` int(11) NOT NULL,
  `synopsis` text DEFAULT NULL,
  `poster_link` varchar(255) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `id_director` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`id_film`, `title`, `france_release_date`, `length_in_minute`, `synopsis`, `poster_link`, `rating`, `id_director`) VALUES
(1, 'Fantomas', '1964-11-04', 104, 'Un personnage mystérieux commet des vols et des crimes dans la capitale sous le nom de Fantômas. Le commissaire Juve et le journaliste Fandor enquêtent chacun à leur manière sur cette affaire. Ils ne croient pas à l\'existence d\'un tel malfaiteur. Ils se retrouvent confrontés à Fantômas, dont la méthode consiste à utiliser des masques pour commettre ses méfaits. Il prend ainsi diverses identités, dont celles de nos deux héros.', 'http://nimotozor99.free.fr/photos/fantomas22.jpg', 100, 2),
(3, 'Le Gendarme de Saint-Tropez', '1964-06-09', 90, 'Suite à une promotion, le gendarme Cruchot doit quitter son petit village provençal pour aller s\'installer à Saint-Tropez. Une fois sur place, le gendarme fait preuve de beaucoup d\'ambition et de dynamisme. Folle de joie, sa fille le suit et ne tarde pas à se faire de nouvelles relations parmi les estivants. Au grand désarroi de son père, elle se fait passer pour la fille d\'un milliardaire, ce qui va lui valoir de sacrés ennuis', 'https://posterissim.com/71-large_default/le-gendarme-de-saint-tropez.jpg', 100, 2),
(4, 'Star Wars, épisode IV : Un nouvel espoir', '1977-09-11', 125, 'La guerre civile fait rage entre l\'Empire galactique et l\'Alliance rebelle. Capturée par les troupes de choc de l\'Empereur menées par le sombre et impitoyable Dark Vador, la princesse Leia Organa dissimule les plans de l\'Etoile Noir', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSNuRrj3FuInQiqDsBivi43wuEdCOLy-3PJUeUoZ-TMSZo6NmVb', 70, 6),
(5, 'Star Wars, épisode V:l\'empire contre-attaque', '1980-08-20', 124, 'Malgré la destruction de l\'Étoile noire, l\'Empire maintient son emprise sur la galaxie, et poursuit sans relâche sa lutte contre l\'Alliance rebelle. Basés sur la planète glacée de Hoth, les rebelles essuient un assaut des troupes impériales. Parvenus à s\'échapper, la princesse Leia, Han Solo, Chewbacca et C-3P0 se dirigent vers Bespin, la cité des nuages gouvernée par Lando Calrissian, ancien compagnon de Han', 'https://static.posters.cz/image/1300/affiches-et-posters/star-wars-episode-v-l-empire-contre-attaque-i90219.jpg', 85, 5),
(6, 'seigneur des anneaux le retour du roi (version lon', '2003-06-01', 263, 'Les armées de Sauron ont attaqué Minas Tirith, la capitale du Gondor. Jamais ce royaume autrefois puissant n\'a eu autant besoin de son roi. Cependant, Aragorn trouvera-t-il en lui la volonté d\'accomplir sa destinée ? Tandis que Gandalf s\'efforce de soutenir les forces brisées de Gondor, Théoden exhorte les guerriers de Rohan à se joindre au combat. Cependant, malgré leur courage et leur loyauté, les forces des Hommes ne sont pas de taille à lutter contre les innombrables légions d\'ennemis.', NULL, 90, 1);

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `wording` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id_genre`, `wording`) VALUES
(1, 'comedie'),
(2, 'drame'),
(3, 'mystère'),
(4, 'action'),
(5, 'horreur'),
(6, 'romance'),
(7, 'science fiction'),
(8, 'space opera');

-- --------------------------------------------------------

--
-- Structure de la table `human`
--

CREATE TABLE `human` (
  `id_human` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `human`
--

INSERT INTO `human` (`id_human`, `first_name`, `last_name`, `birthdate`, `sex`, `photo`) VALUES
(1, 'john', 'smith', '1950-06-08', 'male', NULL),
(2, 'pierre', 'lamine', '1955-01-08', 'male', NULL),
(3, 'Steven', 'Spielberg', '1946-12-18', 'male', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f1/Ready_Player_One_Japan_Premiere_Red_Carpet_Steven_Spielberg_%2826737406887%29_%28cropped%29.jpg/800px-Ready_Player_One_Japan_Premiere_Red_Carpet_Steven_Spielberg_%2826737406887%29_%28cropped%29.jpg'),
(4, 'louis', 'de Funès ', '1914-07-31', 'male', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/23/Louis_de_Fun%C3%A8s_%E2%80%94_L%27Homme_orchestre_%281970%29_%28recadr%C3%A9%29.jpg/1024px-Louis_de_Fun%C3%A8s_%E2%80%94_L%27Homme_orchestre_%281970%29_%28recadr%C3%A9%29.jpg'),
(5, 'André', 'Hunebelle', '1987-11-27', 'male', NULL),
(6, 'Mylène ', 'Demongeot', '1935-09-29', 'female', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/Mylene_Demongeot_au_festival_du_film_de_Waterloo_en_octobre_2014.jpg/800px-Mylene_Demongeot_au_festival_du_film_de_Waterloo_en_octobre_2014.jpg'),
(7, 'Jean', 'Girault', '1924-05-09', 'male', NULL),
(8, 'Geneviève', 'Grad', '1944-07-05', 'female', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Genevi%C3%A8ve_Grad_Sandokan_1963.jpg/800px-Genevi%C3%A8ve_Grad_Sandokan_1963.jpg'),
(9, 'George', 'Lucas', '1944-05-14', 'male', 'https://upload.wikimedia.org/wikipedia/commons/a/a0/George_Lucas_cropped_2009.jpg'),
(10, 'Irvin', 'Kershner', '1923-04-29', 'male', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Star_Wars_Celebration_V_-_Empire_Strikes_Back_director_Irvin_Kershner_sends_a_message_to_the_Celebration_V_crowd_%284940405009%29.jpg/1280px-Star_Wars_Celebration_V_-_Empire_Strikes_Back_director_I');

-- --------------------------------------------------------

--
-- Structure de la table `realisateur`
--

CREATE TABLE `realisateur` (
  `id_director` int(11) NOT NULL,
  `id_human` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `realisateur`
--

INSERT INTO `realisateur` (`id_director`, `id_human`) VALUES
(1, 3),
(2, 5),
(6, 9),
(5, 10);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id_role`, `role_name`) VALUES
(1, 'le commissaire Paul Juve'),
(2, 'Hélène Gurn'),
(3, ' Nicole Cruchot, la fille de Ludovic'),
(4, 'luke skywalker'),
(5, 'le maréchal des logis-chef Ludovic Cruchot');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`id_actor`),
  ADD UNIQUE KEY `id_human` (`id_human`);

--
-- Index pour la table `casting`
--
ALTER TABLE `casting`
  ADD PRIMARY KEY (`id_film`,`id_actor`,`id_role`),
  ADD KEY `id_actor` (`id_actor`),
  ADD KEY `id_role` (`id_role`);

--
-- Index pour la table `clasification`
--
ALTER TABLE `clasification`
  ADD PRIMARY KEY (`id_film`,`id_genre`),
  ADD KEY `id_genre` (`id_genre`);

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`),
  ADD UNIQUE KEY `france_release_date` (`france_release_date`),
  ADD KEY `id_director` (`id_director`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Index pour la table `human`
--
ALTER TABLE `human`
  ADD PRIMARY KEY (`id_human`);

--
-- Index pour la table `realisateur`
--
ALTER TABLE `realisateur`
  ADD PRIMARY KEY (`id_director`),
  ADD UNIQUE KEY `id_human` (`id_human`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actor`
--
ALTER TABLE `actor`
  MODIFY `id_actor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `human`
--
ALTER TABLE `human`
  MODIFY `id_human` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `realisateur`
--
ALTER TABLE `realisateur`
  MODIFY `id_director` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `actor`
--
ALTER TABLE `actor`
  ADD CONSTRAINT `actor_ibfk_1` FOREIGN KEY (`id_human`) REFERENCES `human` (`id_human`);

--
-- Contraintes pour la table `casting`
--
ALTER TABLE `casting`
  ADD CONSTRAINT `casting_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `casting_ibfk_2` FOREIGN KEY (`id_actor`) REFERENCES `actor` (`id_actor`),
  ADD CONSTRAINT `casting_ibfk_3` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);

--
-- Contraintes pour la table `clasification`
--
ALTER TABLE `clasification`
  ADD CONSTRAINT `clasification_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `clasification_ibfk_2` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`);

--
-- Contraintes pour la table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`id_director`) REFERENCES `realisateur` (`id_director`);

--
-- Contraintes pour la table `realisateur`
--
ALTER TABLE `realisateur`
  ADD CONSTRAINT `realisateur_ibfk_1` FOREIGN KEY (`id_human`) REFERENCES `human` (`id_human`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
