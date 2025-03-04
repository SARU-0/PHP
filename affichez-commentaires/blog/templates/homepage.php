<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>CineCritique le blog de tous les films et séries</title>
        <link href="style.css" rel="stylesheet" />
    </head>

    <body>
        <h1>CineCritique le super blog de tous les films et séries !</h1>
        <?php $title = "CineCritique"; ?>

 

<?php ob_start(); ?>

<h1>CineCritique</h1>

<p>Dernières critiques :</p>

 

<?php

foreach ($posts as $post) {

?>

<div class="news">

<h3>

<?= htmlspecialchars($post['title']); ?>

<em>le <?= $post['french_creation_date']; ?></em>

</h3>

<p>

<?= nl2br(htmlspecialchars($post['content'])); ?>

<br />

<em><a href="C:\xampp\htdocs\affichez-commentaires\blog\affichepost.php?id=<?= urlencode($post['identifier']) ?>">Commentaires</a></em>

</p>

</div>

<?php

}

?>

<?php $content = ob_get_clean(); ?>

 

<?php require('layout.php') ?>
    </body>
</html>
