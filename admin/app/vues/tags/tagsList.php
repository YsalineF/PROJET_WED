<h4 class="widget_title">Tag Clouds</h4>
<ul class="list">
  <?php foreach($tags as $tag): ?>
    <li>
        <a href="tags/<?php echo $tag['id']; ?>/<?php echo Noyau\Fonctions\slugify($tag['name']); ?>"><?php echo $tag['name']; ?></a>
    </li>
  <?php endforeach; ?>
</ul>
