<?php
/*
  ./app/routeur.php
  ROUTEUR PRINCIPAL
*/

// CONNEXION
// PATTERN: ?users=login
// CTRL: usersControleur
// ACTION: login
if(isset($_GET['users']) && $_GET['users'] == 'login'):
  include_once '../app/controleurs/usersControleur.php';
  \App\Controleurs\Users\loginAction($connexion, [
    'login'    => $_POST['pseudo'],
    'password'  => $_POST['password']
  ]);

// FORMULAIRE DE LOGIN D'UN USER
// PATTERN: ?users=loginForm
// CTRL: usersControleur
// ACTION: loginForm
elseif(isset($_GET['users']) && $_GET['users'] == 'loginForm'):
  include_once '../app/controleurs/usersControleur.php';
  \App\Controleurs\Users\loginFormAction($connexion);

// RECHERCHE D'UN POST
// PATTERN: posts/search
// CTRL: postsControleur
// ACTION: search
elseif(isset($_POST['search'])):
  include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\Posts\searchAction($connexion, $_POST['search']);

// PAGE CONTACT
// PATTERN: ?contact
// CTRL: /
// ACTION: /
elseif(isset($_GET['contact'])):
  $title = "Contact";
  ob_start();
    include '../app/vues/templates/partials/_contact.php';
  $content = ob_get_clean();

// DETAIL D'UN TAG
// PATTERN: ?tagId=x
// CTRL: tagsControleur
// ACTION: show
elseif(isset($_GET['tagId'])):
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
