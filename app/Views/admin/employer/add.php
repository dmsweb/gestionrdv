<?php

?>

<form action="" method="post">
    <?= $form->input('nomComplet','Nom complet'); ?>
    <?= $form->input('telephone','Telepehone'); ?>
    <?= $form->input('email','Email');['type' => 'email'] ?>
    <?= $form->input('password','Mot de passe');['type' => 'password'] ?>
    <?= $form->input('adresse','Adresse')?>
    <?= $form->select('id_type_employer','Type employer', $type); ?>
    <?= $form->select('id_domaine','Domaine', $domaine); ?>
    <button class="btn btn-primary">Enregistre</button>
</form>
<!--  'nomComplet' => $_POST['nomComplet'],
                'telephone' => $_POST['telephone'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'adresse' => $_POST['adresse'],
                'id_type_employer' => $_POST['id_type_employer'],
                'id_domaine' => $_POST['id_domaine']-->