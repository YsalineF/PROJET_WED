<?php
/*
  ./app/controleurs/usersControleur.php
  Controleur des users
*/

namespace App\Controleurs\Users;

function loginFormAction(\PDO $connexion) {
  // Je charge la vue loginForm dans $content
  GLOBAL $content, $title;
  $title = "Connexion au backoffice";
  ob_start();
    include '../app/vues/users/loginForm.php';
  $content = ob_get_clean();
}
