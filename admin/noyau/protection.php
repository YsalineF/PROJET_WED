<?php
/*
  ./noyau/protection.php
  Redirection en cas d'accès direct au backoffice
*/
if(!isset($_SESSION['user'])):
  header('location:' . ROOT_PUBLIC . 'users/login/form');
endif;
