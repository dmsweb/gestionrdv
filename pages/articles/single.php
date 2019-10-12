<?php
$post = \App\Table\Article::find($_GET['id']);
if($post === false){
    \App\App::notFound();
}

\App\App::setTitle($post->titre);
$categorie = \App\Table\Categorie::find($post->category_id);
?>
<h1 class="mt-5"><?= $post->titre; ?></h1>
<p><em><?= $categorie->titre ?></em></p>
<p class="lead"><?= $post->contenu; ?></p>
<a href="index.php"><p>Aller à la home page</p></a>