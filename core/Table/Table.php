<?php
namespace Core\Table;


class Table{

    protected $table;


    public function __construct(\Core\Database\Database $db){

        $this->db = $db;

        if(is_null($this->table)){
            $parts = explode('\\',get_class($this));
            $class_name = end($parts);
            $this->table = strtolower(str_replace('Table','',$class_name)).'s';
        }
    }

    public function all(){
        return $this->query('SELECT * FROM '.$this->table);
    }

    public function query($statement, $attributes = null, $one = false){
        if($attributes){
           return $this->db->prepare($statement,$attributes,str_replace('Table','Entity',get_class($this)), $one);
        }else{
           return $this->db->query($statement,str_replace('Table','Entity',get_class($this)), $one);
        }
    }

}