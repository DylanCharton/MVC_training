<?php
require('model.php');

if (isset($_GET['id']) && $_GET['id'] > 0) {
    $post = getPost($_GET['id']);
    $comments = getComments($_GET['id']);
    var_dump($comments);
    require('postView.php');
}
else {
    echo 'Erreur : aucun identifiant de billet envoyé';
}

