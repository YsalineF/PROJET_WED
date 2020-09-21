<?php
/*
  ./app/vues/templates/partials/_nav.php
*/
 ?>
 <nav class="navbar navbar-inverse navbar-fixed-top">
   <div class="container">
     <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand" href="<?php echo BASE_URL; ?>">Bootstrap theme</a>
     </div>
     <div id="navbar" class="navbar-collapse collapse">
       <ul class="nav navbar-nav">
         <li class="active"><a href="<?php echo BASE_URL; ?>">Home</a></li>
         <li><a href="#about">About</a></li>
         <li><a href="#contact">Contact</a></li>
         <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestion des contenus<span class="caret"></span></a>
           <ul class="dropdown-menu">
             <li class="dropdown-header">Posts</li>
               <li><a href="posts">Liste des posts</a></li>
               <li><a href="posts/add/form">Ajouter un post</a></li>
             <li role="separator" class="divider"></li>
             <li class="dropdown-header">Catégories</li>
               <li><a href="categories">Liste des catégories</a></li>
               <li><a href="categories/add/form">Ajouter une catégorie</a></li>
             <li role="separator" class="divider"></li>
               <li class="dropdown-header">Tags</li>
               <li><a href="tags">Liste des tags</a></li>
               <li><a href="tags/add/form">Ajouter un tag</a></li>

           </ul>
         </li>
         <li><a href="users/logout">Logout</a></li>
       </ul>
     </div><!--/.nav-collapse -->
   </div>
 </nav>
