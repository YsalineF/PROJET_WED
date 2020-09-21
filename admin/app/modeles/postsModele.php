<?php
  /*
    ./app/modeles/postsModele.php
    Modèle des posts
  */

namespace App\Modeles\Posts;

function findAll(\PDO $connexion) {
  $sql = "SELECT *,
              posts.id AS postId,
              posts.title AS postTitle,
              posts.content AS postContent,
              posts.image AS postImg,
              posts.created_at AS postCreatedAt
          FROM posts
          ORDER BY created_at DESC;";
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

function findAllBySearch(\PDO $connexion, string $search) {
  $words = explode(' ', trim($search));
  $sql = "SELECT DISTINCT
                p.id AS postId,
                p.title AS postTitle,
                p.content AS postContent,
                p.image AS postImg,
                p.created_at AS postCreatedAt
          FROM posts p
          JOIN categories c ON c.id = p.categorie_id
          JOIN posts_has_tags pht ON pht.post_id = p.id
          JOIN tags t ON t.id = pht.tag_id
          JOIN authors a ON a.id = p.author_id
          WHERE 1=0 ";
  for($i=0; $i<count($words); $i++):
    $sql .="OR p.title      LIKE :word$i
            OR p.content    LIKE :word$i
            OR c.name       LIKE :word$i
            OR t.name       LIKE :word$i
            OR a.firstname  LIKE :word$i
            OR a.lastname   LIKE :word$i
            OR a.biography  LIKE :word$i ";
  endfor;
  $sql .= "GROUP BY p.id;";

  $rs = $connexion->prepare($sql);
  for($i=0; $i<count($words); $i++):
    $rs->bindValue(":word$i", '%'.$words[$i].'%', \PDO::PARAM_STR);
  endfor;
  $rs->execute();
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
