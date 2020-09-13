<?php
/*
  ./app/modeles/authorsModele.php
  Modèle des authors
*/

namespace App\Modeles\Authors;

function findOneById(\PDO $connexion, int $id) {
  $sql = "SELECT *
          FROM authors
          WHERE id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}
