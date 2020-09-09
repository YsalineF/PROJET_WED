<?php
/*
  ./app/controleurs/categoriesControleur.php
  Contrôleur des categories
*/

namespace App\Controleurs\Categories;
use App\Modeles\Categories;
use App\Modeles\Posts;

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
