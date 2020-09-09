<?php
/*
  ./app/controleurs/tagsControleur.php
  Contrôleur des tags
*/

namespace App\Controleurs\Tags;
use App\Modeles\Tags;

function indexAction(\PDO $connexion) {
    // Je demande au modèle les catégories que je mets dans $categories
    include_once '../app/modeles/tagsModele.php';
    $tags = Tags\findAll($connexion);
    // Je charge la vue directement
    include '../app/vues/tags/tagsList.php';
}
