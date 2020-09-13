<?php
/*
  ./app/routeur.php
  ROUTEUR PRINCIPAL
*/

// DETAIL D'UN TAG
// PATTERN: ?tagId=x
// CTRL: tagsControleur
// ACTION: show
if(isset($_GET['tagId'])):
  include_once '../app/controleurs/tagsControleur.php';
  \App\Controleurs\Tags\showAction($connexion, $_GET['tagId']);

// DETAIL D'UNE CATEGORIE
// PATTERN: ?categorieId=x
// CTRL: categoriesControleur
// ACTION: show
elseif(isset($_GET['categorieId'])):
  include_once '../app/controleurs/categoriesControleur.php';
  \App\Controleurs\Categories\showAction($connexion, $_GET['categorieId']);

// DETAIL D'UN POST
// PATTERN: ?postId=x
// CTRL: postsControleur
// ACTION: show
elseif(isset($_GET['postId'])):
  include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\Posts\showAction($connexion, $_GET['postId']);

// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: postsControleur
// ACTION: index
else:
  include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\Posts\indexAction($connexion);
endif;
