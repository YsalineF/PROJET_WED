<?php
/*
  ./app/vues/categories/show.php
*/
 ?>

 <h2>Posts du tag :
   <?php echo $tag['name']; ?>
 </h2>
 <?php include '../app/vues/posts/liste.php'; ?>
