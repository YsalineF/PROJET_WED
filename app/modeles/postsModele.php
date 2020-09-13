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

function findOneById(\PDO $connexion, int $id) {
  $sql = "SELECT *
          FROM posts
          WHERE id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}

function findAllByIdCategorie(\PDO $connexion, int $id) {
  $sql = "SELECT *
          FROM posts
          WHERE categorie_id = :id
          ORDER BY created_at DESC;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

function findAllByIdTag(\PDO $connexion, int $id) {
  $sql = "SELECT *
          FROM posts p
          JOIN posts_has_tags pht ON pht.post_id = p.id
          WHERE pht.tag_id = :id
          ORDER BY created_at DESC;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
