<?php
/*
  ./app/vues/templates/index.php
  TEMPLATE PRINCIPAL
*/
 ?>
 <!DOCTYPE html>
 <html lang="en">
   <head>
     <?php include '../app/vues/templates/partials/_head.php'; ?>
   </head>

   <body>

     <!-- Fixed navbar -->
     <?php include '../app/vues/templates/partials/_nav.php'; ?>

     <div class="container theme-showcase" role="main">
       <?php echo $content; ?>
     </div> <!-- /container -->

     <?php include '../app/vues/templates/partials/_scripts.php'; ?>
   </body>
 </html>
