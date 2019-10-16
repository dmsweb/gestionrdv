<?php


namespace App\Controller\Admin;


class RendezVousController extends AppController {


    public function __construct(){
        parent::__construct();
        $this->loadModel('RendezVous');
        $this->loadModel('Patient');
    }

    public function index(){
        $rendezvous = $this->RendezVous->allRendezVous();
        // var_dump($employers);

        $this->render('admin.rendezVous.index', compact('rendezvous'));

    }

    public function add(){
        if(!empty($_POST)){
            $patient = $this->Patient->create([
                'nomComplet' => $_POST['nomComplet'],
                'adresse' => $_POST['adresse'],
                'telephone' => $_POST['telephone'],
                'motif' => $_POST['motif']
            ]);

            $id_patient = $this->Patient->lastPatient();
            $id_patient = intval($id_patient->id);

            $rdv = $this->RendezVous->create([
                'dateRendezVous' => $_POST['dateRendezVous'],
                'heureRendezVous' => $_POST['heureRendezVous'],
                'id_patient' => $id_patient,
                'id_domaine' => $_POST['id_domaine'],
                'id_etat_rendez_vous' => $_POST['id_etat_rendez_vous']
            ]);

            if($rdv & $patient){
                //header('Location: admin.php?p=admin.posts.edit&id='.App::getInstance()->getDb()->lastInsertId());
                return $this->index();
            }
        }
        $this->loadModel('EtatRendezVous');
        $this->loadModel('Domaine');
        $etat = $this->EtatRendezVous->extract('id','libelle');
        $domaine = $this->Domaine->extract('id','libelle');
        //var_dump($type);
        //die();
        $form = new \Core\HTML\BootstrapForm($_POST);
        $this->render('admin.rendezVous.add', compact('etat','domaine','form'));

    }


    public function edit(){
        if(!empty($_POST)){
            $rd = $this->RendezVous->update($_GET['id'],[
                'dateRendezVous' => $_POST['dateRendezVous'],
                'heureRendezVous' => $_POST['heureRendezVous'],
                'id_domaine' => $_POST['id_domaine'],
                'id_etat_rendez_vous' => $_POST['id_etat_rendez_vous']
            ]);

            $id_patient = $this->RendezVous->findPatient($_GET['id']);
            $id_patient = intval($id_patient->id);

            $patient = $this->Patient->update($id_patient,[
                'nomComplet' => $_POST['nomComplet'],
                'adresse' => $_POST['adresse'],
                'telephone' => $_POST['telephone'],
                'motif' => $_POST['motif']
            ]);


            if($rd & $patient){
                return $this->index();
            }
        }

        $rdv = $this->RendezVous->findRendezVous($_GET['id']);

        $this->loadModel('EtatRendezVous');
        $this->loadModel('Domaine');
        $etat = $this->EtatRendezVous->extract('id','libelle');
        $domaine = $this->Domaine->extract('id','libelle');


        $form = new \Core\HTML\BootstrapForm($rdv);
        $this->render('admin.rendezVous.add', compact('etat','domaine','form'));
    }



}