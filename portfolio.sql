-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 04 oct. 2020 à 21:51
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `animations`
--

CREATE TABLE `animations` (
  `id_animation` int(11) NOT NULL,
  `screen_animation` blob NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `animations`
--

INSERT INTO `animations` (`id_animation`, `screen_animation`, `id_user`) VALUES
(21, 0x636f726f6e612e706e67, 1),
(22, 0x6d6167616e612e706e67, 1);

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `article_content` text NOT NULL,
  `article_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`article_id`, `article_content`, `article_timestamp`, `id_user`) VALUES
(117, 'Hi, I’m ahmed I love people, art, music, developing, photography, billiards, chess, blogging & traveling. I’m a passionate software & web developer. Mostly, I enjoy challenging tasks and look forward to interesting and innovative projects.<br />\r\nand this is what i can do ...', '0000-00-00 00:00:00', 1),
(118, '-Prototype a web, tablet and mobile interface using<br />\r\n- Design of a web page using adobe XD or photoshop.<br />\r\n- Integration of a design into a web user interface using html css and JavaScript (dom).<br />\r\n- Workflow organization, using github<br />\r\n-backend using php and sql uml<br />\r\n-framework laravel<br />\r\n<br />\r\nlet\'s be friends !!', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `designs`
--

CREATE TABLE `designs` (
  `id_design` int(11) NOT NULL,
  `screen_design` blob NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `designs`
--

INSERT INTO `designs` (`id_design`, `screen_design`, `id_user`) VALUES
(42, 0x342e706e67, 1),
(43, 0x79656c6c6f772e706e67, 1),
(44, 0x736f72612e706e67, 1),
(45, 0x352e706e67, 1),
(46, 0x686f6c612e706e67, 1),
(47, 0x6d616b2e706e67, 1);

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id_project` int(11) NOT NULL,
  `screen_project` blob NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id_project`, `screen_project`, `id_user`) VALUES
(11, 0x636d732e706e67, 1),
(12, 0x7765622e706e67, 1),
(13, 0x696e61732e706e67, 1),
(14, 0x6c2e706e67, 1);

-- --------------------------------------------------------

--
-- Structure de la table `suggests`
--

CREATE TABLE `suggests` (
  `id_suggest` int(11) NOT NULL,
  `suggest_name` varchar(255) NOT NULL,
  `suggest_email` varchar(255) NOT NULL,
  `suggest_message` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `suggest_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `suggests`
--

INSERT INTO `suggests` (`id_suggest`, `suggest_name`, `suggest_email`, `suggest_message`, `id_user`, `suggest_timestamp`) VALUES
(15, 'reda', 'reda.mt16@gmail.com', 'L\'exemple ci-dessous montre comment centrer un paragraphe à l\'intérieur d\'un bloc qui possède une certaine hauteur donnée.<br />\r\n<br />\r\n Un autre exemple montre un paragraphe centré verticalement dans la fenêtre du navigateur,<br />\r\n parce qu\'il est à l\'intérieur d\'un bloc qui est positionné de manière absolue et d\'égale hauteur que la fenêtre.', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `user_name`, `user_password`) VALUES
(1, 'ahmed', '5f4dcc3b5aa765d61d8327deb882cf99');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animations`
--
ALTER TABLE `animations`
  ADD PRIMARY KEY (`id_animation`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `designs`
--
ALTER TABLE `designs`
  ADD PRIMARY KEY (`id_design`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id_project`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `suggests`
--
ALTER TABLE `suggests`
  ADD PRIMARY KEY (`id_suggest`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animations`
--
ALTER TABLE `animations`
  MODIFY `id_animation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT pour la table `designs`
--
ALTER TABLE `designs`
  MODIFY `id_design` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `suggests`
--
ALTER TABLE `suggests`
  MODIFY `id_suggest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animations`
--
ALTER TABLE `animations`
  ADD CONSTRAINT `animations_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `designs`
--
ALTER TABLE `designs`
  ADD CONSTRAINT `designs_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `suggests`
--
ALTER TABLE `suggests`
  ADD CONSTRAINT `suggests_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
