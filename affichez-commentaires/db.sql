-- Ce fichier sert à initialiser la base de données
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `posts` (`id`, `title`, `content`, `creation_date`) VALUES
(1, 'Bienvenue sur CineCritique !', 'Bienvenue sur CineCritique, votre site dédié aux critiques de films et séries ! Ici, nous partageons nos avis, analyses et recommandations sur les dernières sorties et les classiques du cinéma.', '2025-02-20 10:00:00'),
(2, 'Le film du mois : Une pépite incontournable', 'Ce mois-ci, notre coup de cœur est "Inception". Un chef-d’œuvre de science-fiction réalisé par Christopher Nolan, mêlant rêve et réalité dans une intrigue captivante. Venez lire notre critique détaillée et partagez votre avis !', '2025-02-20 10:05:00');

ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


CREATE TABLE `comments` (
    `id` int (11) NOT NULL,
    `post_id` INT (11) NOT NULL,
    `author` varchar(255) NOT NULL,
    `comment` text NOT NULL,
    `comment_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `comments` (`id`, `post_id`, `author`, `comment`, `comment_date`) VALUES
(1, 1, 'Mathieu', 'Preum\'s', '2022-03-03 13:00:42'),
(2, 1, 'Sam', 'Quelqu\'un a un avis là-dessus ? Je ne sais pas quoi en penser.', '2022-03-03 13:01:42');

ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3
