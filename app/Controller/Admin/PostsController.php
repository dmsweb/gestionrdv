<?php

namespace App\Controller\Admin;


class PostsController extends AppController {

    /*
    public function __construct(){
        parent::__construct();
        $this->loadModel('Post');
    }

    public function index(){
        $posts = $this->Post->all();
        $this->render('admin.posts.index', compact('posts'));
    }

    public function add(){
        if(!empty($_POST)){
            $result = $this->Post->create([
                'titre' => $_POST['titre'],
                'contenu' => $_POST['contenu'],
                'category_id' => $_POST['category_id']
            ]);

            if($result){
                //header('Location: admin.php?p=admin.posts.edit&id='.App::getInstance()->getDb()->lastInsertId());
                return $this->index();
            }
        }
        $this->loadModel('Category');
        $categories = $this->Category->extract('id','titre');
        $form = new \Core\HTML\BootstrapForm($_POST);
        $this->render('admin.posts.edit', compact('categories','form'));

    }

    public function edit(){
        if(!empty($_POST)){
            $result = $this->Post->update($_GET['id'],[
                'titre' => $_POST['titre'],
                'contenu' => $_POST['contenu'],
                'category_id' => $_POST['category_id']
            ]);

            if($result){
                return $this->index();
            }
        }
        $post = $this->Post->findWithCategory($_GET['id']);
        $this->loadModel('Category');
        $categories = $this->Category->extract('id','titre');
        $form = new \Core\HTML\BootstrapForm($post);
        $this->render('admin.posts.edit', compact('categories','form'));

    }

    public function delete(){
        if(!empty($_POST)){
            $result = $this->Post->delete($_POST['id']);
            //header('location: admin.php');
            return $this->index();
        }
    }*/
}