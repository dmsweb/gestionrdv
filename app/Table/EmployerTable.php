<?php


namespace App\Table;
use Core\Table\Table;

class EmployerTable extends Table{


    protected $table = 'employer';

    public function allEmployer(){
        return $this->query("
                            SELECT employer.id, nomComplet,email,telephone,typeEmployer.libelle as typeEmployer, domaine.libelle as domaine
                            FROM employer, typeEmployer,domaine
                            WHERE employer.id_type_employer = typeEmployer.id && employer.id_domaine = domaine.id
                            ");
    }

}