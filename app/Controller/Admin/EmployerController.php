<?php

namespace App\Controller\Admin;


class EmployerController extends AppController {

    public function __construct(){
        parent::__construct();
        $this->loadModel('Employer');
    }

    public function index(){
        $employers = $this->Employer->allEmployer();
       // var_dump($employers);

        $this->render('admin.employer.index', compact('employers'));

    }

    public function add(){
        if(!empty($_POST)){
            $result = $this->Employer->create([
                'nomComplet' => $_POST['nomComplet'],
                'telephone' => $_POST['telephone'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'adresse' => $_POST['adresse'],
                'id_type_employer' => $_POST['id_type_employer'],
                'id_domaine' => $_POST['id_domaine']
            ]);

            if($result){
                //header('Location: admin.php?p=admin.posts.edit&id='.App::getInstance()->getDb()->lastInsertId());
                return $this->index();
            }
        }
        $this->loadModel('TypeEmployer');
        $this->loadModel('Domaine');
        $type = $this->TypeEmployer->extract('id','libelle');
        $domaine = $this->Domaine->extract('id','libelle');
        //var_dump($type);
        //die();
        $form = new \Core\HTML\BootstrapForm($_POST);
        $this->render('admin.employer.add', compact('type','domaine','form'));

    }

    public function edit(){
        if(!empty($_POST)){
            $result = $this->Employer->update($_GET['id'],[
                'nomComplet' => $_POST['nomComplet'],
                'telephone' => $_POST['telephone'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'adresse' => $_POST['adresse'],
                'id_type_employer' => $_POST['id_type_employer'],
                'id_domaine' => $_POST['id_domaine']
            ]);

            if($result){
                return $this->index();
            }
        }
        $employer = $this->Employer->find($_GET['id']);
        //var_dump($employer);
        $this->loadModel('TypeEmployer');
        $this->loadModel('Domaine');

        $type = $this->TypeEmployer->extract('id','libelle');
        $domaine = $this->Domaine->extract('id','libelle');

        $form = new \Core\HTML\BootstrapForm($employer);
        $this->render('admin.employer.add', compact('type','domaine','form'));
    }

    public function logout(){
        session_destroy();
        session_reset();
        header('location: index.php');
    }
}