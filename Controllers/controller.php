<!-- Le contrôleur fait le lien entre les deux -->
<?php

require('model.php');

function listPosts()
{
    // On appelle la fonction, ce qui exécute le code à l'intérieur de modele.php . On y récupère la liste des billets dans la variable $posts.
    $posts = getPosts();
// On charge le fichier de la vue (l'affichage), qui va présenter les informations dans une page HTML.
    require('../Views/listPostsView.php');
}

function post()
{
    $post = getPost($_GET['id']);
    $comments = getComments($_GET['id']);

    require('postView.php');
}