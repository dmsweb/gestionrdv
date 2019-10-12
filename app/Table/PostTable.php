<?php


namespace App\Table;
use Core\Table\Table;

class PostTable extends Table{


    public function last(){
        return $this->query("
                            SELECT article.id,article.titre,contenu, categories.titre as categorie 
                            FROM article 
                            LEFT JOIN categories 
                                 ON category_id = categories.id
                            ORDER BY article.date DESC");
    }
}