<?php
/*
  ./app/routeur.php
  ROUTEUR PRINCIPAL
*/

if(isset($_GET['users']) && $_GET['users'] == 'logout'):
  include_once '../app/controleurs/usersControleur.php';
  \App\Controleurs\Users\logoutAction();
else:
  include_once '../app/controleurs/usersControleur.php';
  \App\Controleurs\Users\dashboardAction($connexion);
endif;
