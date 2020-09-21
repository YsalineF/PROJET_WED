<?php
/*
  ./app/controleurs/usersControleur.php
  Controleur des users
*/

namespace App\Controleurs\Users;
use App\Modeles\Users;

function loginFormAction(\PDO $connexion) {
  // Je charge la vue loginForm dans $content
  GLOBAL $content, $title;
  $title = "Connexion au backoffice";
  ob_start();
    include '../app/vues/users/loginForm.php';
  $content = ob_get_clean();
}

function loginAction(\PDO $connexion, array $data = null) {
  // Je demande le user qui correspond au login/password que je mets dans $user
  include_once '../app/modeles/usersModele.php';
  $user = Users\findOneByLoginPassword($connexion, $data);
  // Je redirige vers le backoffice si les infos sont correctes
  // Ou vers le formulaire de connexion ou sinon
  if($user):
    $_SESSION['user'] = $user;
    header('location:' . ROOT_ADMIN);
  else:
    header('location:' . ROOT . 'users/login/form');
  endif;
}
