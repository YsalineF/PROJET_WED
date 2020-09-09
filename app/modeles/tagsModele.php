<?php
  /*
    ./app/modeles/tagsModele.php
    Modèle des tags
  */

namespace App\Modeles\Tags;

function findAll(\PDO $connexion) {
  $sql = "SELECT *
          FROM categories
          ORDER BY name DESC;";
  $rs = $connexion -> query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

function findTagsOfPost(\PDO $connexion) {
  $sql = "SELECT t.name,
                  p.id AS postId
          FROM tags t
          JOIN posts_has_tags pht ON pht.tag_id = t.id
          JOIN posts p ON p.id = pht.post_id;";
  $rs = $connexion -> query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
