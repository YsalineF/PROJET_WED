<?php
  /*
    ./app/vues/posts/index.php
  */
 ?>

<table class="table">
  <tr>
    <td>Id</td>
    <td>Titre</td>
    <td>Slug</td>
    <td>Date de publication</td>
    <td>Contenu</td>
    <td>Media</td>
  </tr>
  <?php foreach ($posts as $post): ?>
    <tr>
      <td><?php echo $post['id']; ?></td>
      <td><?php echo $post['title']; ?></td>
      <td><?php echo \Noyau\Fonctions\slugify($post['title']); ?></td>
      <td><?php echo date('d', strtotime($post['postCreatedAt'])); ?>/
          <?php echo date('m', strtotime($post['postCreatedAt'])); ?>/
          <?php echo date('Y', strtotime($post['postCreatedAt'])); ?>
      </td>
      <td><?php echo substr($post['postContent'],0,100); ?></td>
      <td><img src="assets/img/blog/<?php echo $post['image']; ?>" alt="<?php echo $post['title']; ?>" width="100"></td>
      <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
    </tr>
  <?php endforeach; ?>
</table>
