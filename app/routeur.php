<?php
/*
  ./app/routeur.php
  ROUTEUR PRINCIPAL
*/

// DETAIL D'UN POST
// PATTERN: ?postId=x
// CTRL: postsControleur
// ACTION: show
if(isset($_GET['postId'])):
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
