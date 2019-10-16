<?php


namespace App\Table;


class RendezVousTable extends \Core\Table\Table {

    protected $table = 'rendezVous';


    public function allRendezVous(){
        return $this->query("
                            SELECT rendezVous.id,
                                    dateRendezVous as dateR,
                                    heureRendezVous as heureR,
                                    patient.nomComplet as nomComplet,
                                    patient.telephone as telephone,
                                    domaine.libelle as domaine,
                                    etatRendezVous.libelle as etat
                            FROM rendezVous, patient,etatRendezVous,domaine
                            WHERE rendezVous.id_patient = patient.id 
                            AND rendezVous.id_domaine = domaine.id AND 
                            rendezVous.id_etat_rendez_vous = etatRendezVous.id
                            ");
    }

    public function findRendezVous($id){
        return $this->query("
                            SELECT rendezVous.id,
                                    dateRendezVous,
                                    heureRendezVous,
                                    rendezVous.id_domaine as id_domaine,
                                    rendezVous.id_etat_rendez_vous as id_etat_rendez_vous,
                                    patient.nomComplet as nomComplet,
                                    patient.adresse as adresse,
                                    patient.telephone as telephone,
                                    patient.motif as motif
                            FROM rendezVous, patient,etatRendezVous,domaine
                            WHERE rendezVous.id_patient = patient.id 
                            AND rendezVous.id_domaine = domaine.id AND 
                            rendezVous.id_etat_rendez_vous = etatRendezVous.id AND rendezVous.id = ?
                            ",[$id],true);
    }
/*  'dateRendezVous' => $_POST['dateRendezVous'],
                'heureRendezVous' => $_POST['heureRendezVous'],
                'id_domaine' => $_POST['id_domaine'],
                'id_etat_rendez_vous' => $_POST['id_etat_rendez_vous']

 'nomComplet' => $_POST['nomComplet'],
                'adresse' => $_POST['adresse'],
                'telephone' => $_POST['telephone'],
                'motif' => $_POST['motif']*/

}