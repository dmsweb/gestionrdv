<?php

$app = App::getInstance();
$post = $app->getTable('Post')->findWithCategory($_GET['id']);
if($post === false){
    $app->notFound();
}

$app->title = $post->titre;
//$categorie = \App\Table\Categorie::find($post->category_id);
?>
<h1 class="mt-5"><?= $post->titre; ?></h1>
<p><em><?= $post->categorie ?></em></p>
<p class="lead"><?= $post->contenu; ?></p>
<a href="index.php"><p>Aller à la home page</p></a>