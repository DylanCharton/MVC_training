<!-- Le modèle traite les données -->
<?php
require_once('Database.php');


function getPosts(){
    $db = new Database();

    $req = $db->getConnexion()->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');
    $req->execute();
    
     return $req;
}

function getPost($postId){
    $db = new Database();

    $req = $db->getConnexion()->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
    $req->execute(array($postId));
    $post = $req->fetch(PDO::FETCH_ASSOC);

    return $post;
}

function getComments($postId){
    $db = new Database();

    $comments = $db->getConnexion()->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
    $comments->execute(array($postId));
    $result = $comments->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}