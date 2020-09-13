<?php
/*
  ./app/controleurs/postsControleur.php
  Contrôleur des posts
*/

namespace App\Controleurs\Posts;
use App\Modeles\Posts;
use App\Modeles\Tags;
use App\Modeles\Authors;

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

function showAction(\PDO $connexion, int $id) {
  // Je demande au modèle le détail d'un post que je mets dans $post
  include_once '../app/modeles/postsModele.php';
  $post = Posts\findOneById($connexion, $id);
  // Je demande au modèle les tags du post que je mets dans $tags
  include_once '../app/modeles/tagsModele.php';
  $tags = Tags\findByPostId($connexion, $id);
  // Je demande au modèle les infos de l'author du post que je mets dans $author
  include_once '../app/modeles/authorsModele.php';
  $author = Authors\findOneById($connexion, $post['author_id']);
  // Je charge la vue show dans $content
  GLOBAL $title, $content;
  $title = $post['title'];
  ob_start();
    include '../app/vues/posts/show.php';
  $content = ob_get_clean();
}
