<?php
/*
  ./app/vues/authors/show.php
*/
 ?>

 <div class="blog-author">
    <div class="media align-items-center">
       <img src="assets/img/blog/<?php echo $author['avatar']; ?>" alt="">
       <div class="media-body">
          <a href="#">
             <h4><?php echo $author['firstname']; ?> <?php echo $author['lastname']; ?></h4>
          </a>
          <p><?php echo $author['biography']; ?></p>
       </div>
    </div>
 </div>
