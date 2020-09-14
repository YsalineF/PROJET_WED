<?php
/*
  ./app/vues/posts/liste.php
*/
 ?>

 <?php foreach($posts as $post): ?>
 <div class="blog_item_img">
   <img class="card-img rounded-0" src="assets/img/blog/<?php echo $post['postImg']; ?>" alt="">
   <a href="#" class="blog_item_date">
     <h3><?php echo date('j', strtotime($post['postCreatedAt'])); ?></h3>
     <p><?php echo date('M', strtotime($post['postCreatedAt'])); ?></p>
   </a>
 </div>

 <div class="blog_details">
   <a class="d-inline-block" href="posts/<?php echo $post['postId']; ?>/<?php echo Noyau\Fonctions\slugify($post['postTitle']); ?>">
     <h2><?php echo $post['postTitle']; ?></h2>
   </a>
   <p><?php echo substr($post['postContent'],0,100); ?></p>
     <ul class="blog-info-link">
       <?php foreach ($tags as $tag): ?>
         <?php if($tag['postId'] == $post['postId']): ?>
           <li><a href="tags/<?php echo $tag['tagId']; ?>/<?php echo Noyau\Fonctions\slugify($tag['name']); ?>"><i class="fa fa-user"></i> <?php echo $tag['name']; ?></a></li>
         <?php endif; ?>
       <?php endforeach; ?>
     </ul>
   </div>
 <?php endforeach; ?>
