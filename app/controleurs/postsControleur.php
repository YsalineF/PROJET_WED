<?php
/*
  ./app/controleurs/postsControleur.php
  Contrôleur des posts
*/

namespace App\Controleurs\Posts;
use App\Modeles\Posts;
use App\Modeles\Tags;

function indexAction(\PDO $connexion) {
    // Je demande au modèle les 10 derniers posts que je mets dans $posts
    include_once '../app/modeles/postsModele.php';
    $posts = Posts\findAll($connexion);
    // Je demande au modèle les tags des posts que je mets dans $tags
    include_once '../app/modeles/tagsModele.php';
    $tags = Tags\findTagsOfPost($connexion);
    // Je charge la vue posts dans $content
    GLOBAL $title, $content;
    $title = "Blog";
    ob_start();
      include '../app/vues/posts/index.php';
    $content = ob_get_clean();
}
