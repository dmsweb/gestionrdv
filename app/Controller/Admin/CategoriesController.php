<?php

namespace App\Controller\Admin;


class CategoriesController extends AppController {

    public function __construct(){
        parent::__construct();
        $this->loadModel('Category');
    }

    public function index(){
        $items = $this->Category->all();
        $this->render('admin.categories.index', compact('items'));
    }

    public function add(){
        if(!empty($_POST)){
            $result = $this->Category->create([
                'titre' => $_POST['titre'],
            ]);
                //header('Location: admin.php?p=admin.categories.edit&id='.App::getInstance()->getDb()->lastInsertId());
                return $this->index();
        }
        $form = new \Core\HTML\BootstrapForm($_POST);
        $this->render('admin.categories.edit', compact('form'));

    }

    public function edit(){
        if(!empty($_POST)){
            $result = $this->Category->update($_GET['id'],[
                'titre' => $_POST['titre'],
            ]);
                return $this->index();
        }
        $category = $this->Category->find($_GET['id']);
        $form = new \Core\HTML\BootstrapForm($category);
        $this->render('admin.categories.edit', compact('form'));

    }

    public function delete(){
        if(!empty($_POST)){
            $result = $this->Category->delete($_POST['id']);
            //header('location: admin.php');
            return $this->index();
        }
    }
}