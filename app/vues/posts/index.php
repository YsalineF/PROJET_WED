<?php
  /*
    ./app/vues/posts/index.php
  */
 ?>

 <div class="blog_left_sidebar">
   <article class="blog_item">
     <?php foreach($posts as $post): ?>
     <div class="blog_item_img">
       <img class="card-img rounded-0" src="assets/img/blog/<?php echo $post['image']; ?>" alt="">
       <a href="#" class="blog_item_date">
         <h3><?php echo date('j', strtotime($post['created_at'])); ?></h3>
         <p><?php echo date('M', strtotime($post['created_at'])); ?></p>
       </a>
     </div>

     <div class="blog_details">
       <a class="d-inline-block" href="posts/<?php echo $post['id']; ?>/<?php echo Noyau\Fonctions\slugify($post['title']); ?>">
         <h2><?php echo $post['title']; ?></h2>
       </a>
       <p><?php echo substr($post['content'],0,100); ?></p>
         <ul class="blog-info-link">
           <?php foreach ($tags as $tag): ?>
             <?php if($tag['postId'] == $post['id']): ?>
               <li><a href="#"><i class="fa fa-user"></i> <?php echo $tag['name']; ?></a></li>
             <?php endif; ?>
           <?php endforeach; ?>
         </ul>
       </div>
     <?php endforeach; ?>
     </article>



     <nav class="blog-pagination justify-content-center d-flex">
       <ul class="pagination">
         <li class="page-item">
           <a href="#" class="page-link" style="width: auto; padding: 0 1em;">More posts</a>
         </li>
       </ul>
     </nav>
   </div>
