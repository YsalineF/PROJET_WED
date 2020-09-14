<?php
/*
  ./app/vues/categories/show.php
*/
 ?>

 <h2>Posts de la catégorie :
   <?php echo $categorie['name']; ?>
 </h2>
 <?php include '../app/vues/posts/liste.php'; ?>
