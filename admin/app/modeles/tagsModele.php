<?php
  /*
    ./app/modeles/tagsModele.php
    Modèle des tags
  */

namespace App\Modeles\Tags;

function findAll(\PDO $connexion) {
  $sql = "SELECT *
          FROM tags
          ORDER BY name DESC;";
  $rs = $connexion -> query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

function findTagsOfPost(\PDO $connexion) {
  $sql = "SELECT *,
                t.id AS tagId,
                p.id AS postId
          FROM tags t
          JOIN posts_has_tags pht ON pht.tag_id = t.id
          JOIN posts p ON p.id = pht.post_id;";
  $rs = $connexion -> query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

function findByPostId(\PDO $connexion, int $id) {
  $sql = "SELECT *
          FROM tags t
          JOIN posts_has_tags pht ON pht.tag_id = t.id
          WHERE pht.post_id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

function findOneById(\PDO $connexion, int $id) {
  $sql = "SELECT *
          FROM tags
          WHERE id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}
