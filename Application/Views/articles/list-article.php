<hr>
<div class="blog-post">
    <h3><?= $article->title()?><small> <?= $article->date()?></small></h3>
    <!-- <img class="thumbnail" src="<?php echo BASE_URL."/public/images/07_route_glace.png"; ?>"style="width: 100%;"> -->
    <p><?= $article->content()?></p>
    <!-- <div class="callout">
    <ul class="menu simple">
    <li><a href="<?php echo BASE_URL."?action=author&name=mike" ?>">Auteur: <?= $article->author()?> Mike Mikers</a></li>
    </ul>
    </div> -->
</div>