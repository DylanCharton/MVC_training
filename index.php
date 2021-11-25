<!-- Le contrôleur fait le lien entre les deux -->
<?php
// On charge le fichier du modèle. Il ne se passe rien pour l'instant, parce qu'il ne contient qu'une fonction.
require('model.php');

// On appelle la fonction, ce qui exécute le code à l'intérieur de modele.php . On y récupère la liste des billets dans la variable $req.
$req = getPosts();
// On charge le fichier de la vue (l'affichage), qui va présenter les informations dans une page HTML.
require('indexView.php');



