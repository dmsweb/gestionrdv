<?php

namespace App\Controller;

use Core\Auth\DBAuth;
use \App;

class UsersController extends AppController {

    public function login(){
        $errors = false;
        if(!empty($_POST)){
            $auth = new DBAuth(App::getInstance()->getDb());
                if($auth->login($_POST['username'], $_POST['password'])){
                    if($_SESSION["type"] === "admin"){
                        header('Location: index.php?p=admin.employer.index');
                    }elseif ($_SESSION["type"] === "secretaire"){
                        header('Location: index.php?p=admin.rendezVous.index');
                    }

        }else{
                    $errors = true;
                }
        }
        $form = new \Core\HTML\BootstrapForm($_POST);
        $this->render('templates.login',compact('form','errors'));
        }

        public function logout(){
            $auth = new DBAuth(App::getInstance()-getDb());
            if($auth->loggeOut()){
                $form = new \Core\HTML\BootstrapForm();
                $this->render('templates.login',compact('form'));
            }
        }
}