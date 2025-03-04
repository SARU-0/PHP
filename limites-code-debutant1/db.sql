-- Ce fichier sert à initialiser la base de données
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `billets` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date_creation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `billets` (`id`, `titre`, `contenu`, `date_creation`) VALUES
(1, 'Bienvenue sur CineCritique !', 'Bienvenue sur CineCritique, votre site dédié aux critiques de films et séries ! Ici, nous partageons nos avis, analyses et recommandations sur les dernières sorties et les classiques du cinéma.', '2025-02-20 10:00:00'),
(2, 'Le film du mois : Une pépite incontournable', 'Ce mois-ci, notre coup de cœur est "Inception". Un chef-d’œuvre de science-fiction réalisé par Christopher Nolan, mêlant rêve et réalité dans une intrigue captivante. Venez lire notre critique détaillée et partagez votre avis !', '2025-02-20 10:05:00');

ALTER TABLE `billets`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `billets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
