<?php
/*
  ./app/controleurs/usersControleur.php
  Controleur des users
*/

namespace App\Controleurs\Users;
use App\Modeles\Users;

function dashboardAction(\PDO $connexion) {
  // Je charge la vue loginForm dans $content
  GLOBAL $content, $title;
  $title = "Dashboard";
  ob_start();
    include '../app/vues/users/dashboard.php';
  $content = ob_get_clean();
}

function logoutAction() {
  // Je tue la variable de session 'user'
  unset($_SESSION['user']);
  // Je redirige vers le site public
  header('location: ' . ROOT_PUBLIC);
}
