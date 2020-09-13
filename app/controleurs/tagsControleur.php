<?php
/*
  ./app/controleurs/tagsControleur.php
  Contrôleur des tags
*/

namespace App\Controleurs\Tags;
use App\Modeles\Tags;
use App\Modeles\Posts;

function indexAction(\PDO $connexion) {
  // Je demande au modèle les tags que je mets dans $categories
  include_once '../app/modeles/tagsModele.php';
  $tags = Tags\findAll($connexion);
  // Je charge la vue directement
  include '../app/vues/tags/tagsList.php';
}

function showAction(\PDO $connexion, $id) {
  // Je demande au modèle le tag correspondant à $id que je mets dans $tag
  include_once '../app/modeles/TagsModele.php';
  $tag = Tags\findOneById($connexion, $id);
  // Je demande au modèle les posts ayant comme tag $id que je mets dans $posts
  include_once '../app/modeles/postsModele.php';
  $posts = Posts\findAllByIdTag($connexion, $id);
  // Je demande au modèle les tags des posts que je mets dans $tags
  include_once '../app/modeles/tagsModele.php';
  $tags = Tags\findTagsOfPost($connexion);
  // Je charge la vue show dans $content
  GLOBAL $title, $content;
  $title = $tag['name'];
  ob_start();
    include '../app/vues/tags/show.php';
  $content = ob_get_clean();
}
