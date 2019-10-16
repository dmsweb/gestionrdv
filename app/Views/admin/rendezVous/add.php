<?php

?>

<form action="" method="post">
    <?= $form->input('nomComplet','Nom complet'); ?>
    <?= $form->input('adresse','Adresse'); ?>
    <?= $form->input('telephone','Telepehone'); ?>
    <?= $form->input('motif','Motif',['type' => 'textarea']); ?>
    <?= $form->input('dateRendezVous','Date du RDV'); ?>
    <?= $form->input('heureRendezVous','Heure du RDV'); ?>
    <?= $form->select('id_etat_rendez_vous','Etat RDV', $etat); ?>
    <?= $form->select('id_domaine','Domaine', $domaine); ?>
    <button class="btn btn-primary">Enregistre</button>
</form>
<!--    $patient = $this->Patient->create([
                'nomComplet' => $_POST['nomComplet'],
                'adresse' => $_POST['adresse'],
                'telephone' => $_POST['telephone'],
                'motif' => $_POST['motif']
            ]);

            $rdv = $this->RendezVous->create([
                'dateRendezVous' => $_POST['dateRendezVous'],
                'heureRendezVous' => $_POST['heureRendezVous'],
                'id_patient' => $_POST['id_patient'],
                'id_domaine' => $_POST['id_domaine'],
                'id_etat_rendez_vous' => $_POST['id_etat_rendez_vous']
                -->