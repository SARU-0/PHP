<?php

 

// Simulation d'un article

$post = [

'title' => 'Titre de test',

'french_creation_date' => '03/03/2022 à 12h14min42s',

'content' => "Contenu de test de l'article.\nCeci est un paragraphe de test.",

];

 

// Simulation de commentaires

$comments = [

[

'author' => 'Auteur test 1',

'french_creation_date' => '03/03/2022 à 12h15min42s', 'comment' => 'Premier commentaire de test.',

], [

'author' => 'Auteur test 2',

'french_creation_date' => '03/03/2022 à 12h16min42s', 'comment' => 'Second commentaire de test.',

],

];

//Inclusion de la vue 
require('templates/post.php');