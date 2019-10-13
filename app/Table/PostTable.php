<?php


namespace App\Table;
use Core\Table\Table;

class PostTable extends Table{


    /*protected $table = 'article';

    public function last(){
        return $this->query("
                            SELECT article.id,article.titre,contenu, categories.titre as categorie 
                            FROM article 
                            LEFT JOIN categories 
                                 ON category_id = categories.id
                            ORDER BY article.date DESC");
    }

    public function lastByCategory($category_id){
        return $this->query("
                            SELECT article.id,article.titre,contenu, categories.titre as categorie 
                            FROM article 
                            LEFT JOIN categories 
                                 ON category_id = categories.id
                            WHERE article.category_id = ?
                            ORDER BY article.date DESC", [$category_id]);
    }

    public function findWithCategory($id){
        return $this->query("
                            SELECT article.id,article.titre,contenu,categories.titre as categorie, article.category_id
                            FROM article 
                            LEFT JOIN categories 
                                 ON category_id = categories.id
                            WHERE article.id = ?", [$id], true);
    }*/

}