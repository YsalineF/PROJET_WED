<?php
/*
  ./noyau/constantes.php
  Constantes personnalisées
*/

 $url = explode('index.php', $_SERVER['SCRIPT_NAME']);
 define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . $url['0']);
