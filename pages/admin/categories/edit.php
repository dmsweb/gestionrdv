<?php
$categoryTable = App::getInstance()->getTable('Category');
if(!empty($_POST)){
    $result = $categoryTable->update($_GET['id'],[
            'titre' => $_POST['titre']
    ]);

    if($result){
        ?>
        <div class="alert alert-success">
            La catégory a bien été modifié
        </div>
<?php
    }
}
$category = $categoryTable->find($_GET['id']);
$form = new \Core\HTML\BootstrapForm($category);
?>

<form action="" method="post">
    <?= $form->input('titre','Titre de la catégorie'); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>