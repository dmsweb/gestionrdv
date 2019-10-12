<?php
$categoryTable = App::getInstance()->getTable('Category');
if(!empty($_POST)){
    $result = $categoryTable->create([
        'titre' => $_POST['titre'],
    ]);

    if($result){
      // header('Location: admin.php?p=categories.edit&id='.App::getInstance()->getDb()->lastInsertId());
      header('Location: admin.php?p=categories.index');
   }
}
//$categories = App::getInstance()->getTable('Category')->extract('id','titre');
$form = new \Core\HTML\BootstrapForm($_POST);
?>

<form action="" method="post">
    <?= $form->input('titre','Nouvelle catégorie'); ?>
    <button class="btn btn-primary">Enregistrer</button>
</form>