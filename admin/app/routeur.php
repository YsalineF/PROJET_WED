<?php
/*
  ./app/routeur.php
  ROUTEUR PRINCIPAL
*/

/* Route de la liste des posts */
if(isset($_GET['posts']) && $_GET['posts'] = 'index'):
  include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\Posts\indexAction($connexion);
/* Route de déconnexion du user */
elseif(isset($_GET['users']) && $_GET['users'] == 'logout'):
  include_once '../app/controleurs/usersControleur.php';
  \App\Controleurs\Users\logoutAction();
/* Route par défaut */
else:
  include_once '../app/controleurs/usersControleur.php';
  \App\Controleurs\Users\dashboardAction($connexion);
endif;
