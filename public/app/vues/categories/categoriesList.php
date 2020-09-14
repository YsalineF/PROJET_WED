<h4 class="widget_title">Category</h4>
<ul class="list cat-list">
  <?php foreach($categories as $categorie): ?>
    <li>
      <a href="categories/<?php echo $categorie['id']; ?>/<?php echo Noyau\Fonctions\slugify($categorie['name']); ?>" class="d-flex">
        <p><?php echo $categorie['name']; ?></p>
        <?php foreach ($nbrePosts as $nbrePost): ?>
          <?php if($nbrePost['categorie_id'] === $categorie['id']): ?>
            <p>(<?php echo($nbrePost['nbrePostsPerCategory']); ?>)</p>
          <?php endif; ?>
        <?php endforeach; ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>
