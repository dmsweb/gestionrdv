<?php
$postTable = App::getInstance()->getTable('Post');
if(!empty($_POST)){
    $result = $postTable->create([
        'titre' => $_POST['titre'],
        'contenu' => $_POST['contenu'],
        'category_id' => $_POST['category_id']
    ]);

    if($result){
       header('Location: admin.php?p=posts.edit&id='.App::getInstance()->getDb()->lastInsertId());
   }
}
$categories = App::getInstance()->getTable('Category')->extract('id','titre');
$form = new \Core\HTML\BootstrapForm($_POST);
?>

<form action="" method="post">
    <?= $form->input('titre','Titre de l\'article'); ?>
    <?= $form->input('contenu','Le contenu', ['type' => 'textarea']); ?>
    <?= $form->select('category_id','Categorie', $categories); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>