<?php
/*
  ./app/controleurs/categoriesControleur.php
  Contrôleur des categories
*/

namespace App\Controleurs\Categories;
use App\Modeles\Categories;
use App\Modeles\Posts;
use App\Modeles\Tags;

function indexAction(\PDO $connexion) {
    // Je demande au modèle les catégories que je mets dans $categories
    include_once '../app/modeles/categoriesModele.php';
    $categories = Categories\findAll($connexion);
    // Je demande au modèle le nombre de posts par catégorie que je mets dans $nbrePost
    include_once '../app/modeles/postsModele.php';
    $nbrePosts = Posts\findNumberPostsPerCategorie($connexion);
    // var_dump($nbrePosts); die();
    // Je charge la vue directement
    include '../app/vues/categories/categoriesList.php';
}

function showAction(\PDO $connexion, int $id) {
  // Je demande au modèle la catégorie correspondant à l'$id que je mets dans $categorie
  include_once '../app/modeles/categoriesModele.php';
  $categorie = Categories\findOneById($connexion, $id);
  // Je demande au modèle les posts ayant comme categorie $id que je mets dans $posts
  include_once '../app/modeles/postsModele.php';
  $posts = Posts\findAllByIdCategorie($connexion, $id);
  // Je demande au modèle les tags des posts que je mets dans $tags
  include_once '../app/modeles/tagsModele.php';
  $tags = Tags\findTagsOfPost($connexion);
  // Je charge la vue show dans $content
  GLOBAL $title, $content;
  $title = $categorie['name'];
  ob_start();
    include '../app/vues/categories/show.php';
  $content = ob_get_clean();
}
