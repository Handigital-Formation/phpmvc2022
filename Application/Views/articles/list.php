<div class="row medium-8 large-7 columns">

  <h2><?=($title!='')?'Catégorie : '.ucfirst($title):'Tous les articles'?></h2>
  <?php

  foreach ($articles as $article) {
    include 'list-article.php';
  }
  ?>

</div>