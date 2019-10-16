<?php


namespace App\Table;


class PatientTable extends \Core\Table\Table {

    protected $table = 'patient';


    public function last(){
        return $this->query("SELECT MAX(id) as id
                                    FROM patient",[],true);
    }

}