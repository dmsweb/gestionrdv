<?php
$categorie = \App\Table\Categorie::find($_GET['id']);
if($categorie === false){
 \App\App::notFound();
}
$articles = \App\Table\Article::lastByCategory($_GET['id']);

$categories = \App\Table\Categorie::all();
?>
<p style="padding-top: 50px;"></p>
<h1><?= $categorie->titre ?></h1>
<div class="row">
    <div class="col-sm-6">
        <?php foreach ( $articles as $post){ ?>
            <h1 class="mt-5">
                <a href="<?= $post->url ?>"><?= $post->titre ?></a>
            </h1>
            <p><em><?= $post->categorie ?></em></p>
            <p class="lead"><?= $post->extrait ?></p>

        <?php }  ?>
    </div>
    <div class="col-sm-4" style="padding-top: 50px;" >
        <ul>
            <?php foreach (\App\Table\Categorie::all() as $categorie):?>
                <li><a href="<?= $categorie->url; ?>"><?= $categorie->titre; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

