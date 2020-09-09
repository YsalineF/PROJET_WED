<?php
  /*
    ./app/modeles/categoriesModele.php
    Modèle des categories
  */

namespace App\Modeles\Categories;

function findAll(\PDO $connexion) {
  $sql = "SELECT *
          FROM categories c
          ORDER BY id ASC;";
  $rs = $connexion -> query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
