<?php

function getPosts() {
    try {
        $database = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    $statement = $database->query(
        "SELECT id, title, content, DATE_FORMAT(creation_date, '%d/%m/%Y à %Hh%imin%ss') AS french_creation_date FROM posts ORDER BY creation_date DESC LIMIT 0, 5"
    );
    $posts = [];
    while (($row = $statement->fetch())) {
        $post = [
            'title' => $row['title'],
            'french_creation_date' => $row['french_creation_date'],
            'content' => $row['content'],
        ];

        $posts[] = $post;
    }

    return $posts;
}




function getPost($identifier) {

    try {
    
    $database = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'blog', 'password');
    
    } catch(Exception $e) {
    
    die('Erreur : '.$e->getMessage());
    
    }
    
     
    
    $statement = $database->prepare(
    
    "SELECT id, title, content, DATE_FORMAT(creation_date, '%d/%m/%Y à %Hh%imin%ss') AS french_creation_date FROM posts WHERE id = ?"
    
    );
    
    $statement->execute([$identifier]);
    
     
    
    $row = $statement->fetch();
    
    $post = [
    
    'title' => $row['title'],
    
    'french_creation_date' => $row['french_creation_date'], 'content' => $row['content'],
    
    ];
    
     
    
    return $post;
    
    }

    function getComments($identifier) { 
        
        try {

        $database = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
        
        } catch(Exception $e) {
        
        die('Erreur : '.$e->getMessage());
        
        }
        
         
        
        $statement = $database->prepare(
        
        "SELECT id, author, comment, DATE_FORMAT(comment_date, '%d/%m/%Y à %Hh%imin%ss') AS french_creation_date FROM comments WHERE post_id = ? ORDER BY comment_date DESC"
        
        );
        
        $statement->execute([$identifier]);
        
         
        
        $comments = [];
        
        while (($row = $statement->fetch())) {
        
        $comment = [
        
        'author' => $row['author'],
        
        'french_creation_date' => $row['french_creation_date'], 'comment' => $row['comment'],
        
        ];
        
        $comments[] = $comment;
        
        }
        
         
        
        return $comments;
        
        }