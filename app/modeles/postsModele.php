<?php
  /*
    ./app/modeles/postsModele.php
    Modèle des posts
  */

namespace App\Modeles\Posts;

function findAll(\PDO $connexion) {
  $sql = "SELECT *
          FROM posts
          ORDER BY created_at DESC
          LIMIT 10;";
  $rs = $connexion -> query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

function findNumberPostsPerCategorie(\PDO $connexion) {
  $sql = "SELECT COUNT(id) AS nbrePostsPerCategory, categorie_id
          FROM posts
          GROUP BY categorie_id;";
  $rs = $connexion -> query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
