<?php
namespace Core\Auth;

use Core\Database\Database;

class DBAuth{

    private $db;


    public function __construct(Database $db){
            $this->db = $db;
    }

    public function getUserId(){
        if($this->logged()){
            return $_SESSION['telephone'];
        }
        return false;
    }

    /**
     * @param $username
     * @param $password
     * @return boolean
     */

    public function login($username, $password){
        $user = $this->db->prepare("
        SELECT employer.id, nomComplet,email,telephone,password,typeEmployer.libelle as typeEmployer, domaine.libelle as domaine
        FROM employer, typeEmployer,domaine
        WHERE employer.id_type_employer = typeEmployer.id && employer.id_domaine = domaine.id &&
        telephone = ?", [$username], null, true);

        if($user){
             if($user->password === $password/*sha1($password)*/){
               $_SESSION['telephone'] = $user->telephone;
               $_SESSION['domaine'] = $user->domaine;
               $_SESSION['type'] = $user->typeEmployer;
               $_SESSION['id'] = $user->id;
                 return true;
             }
        }
        return false;
    }

    public function logged(){
        return isset($_SESSION['telephone']);
    }

    public function loggeOut(){
        session_destroy();
        session_reset();
        return true;
    }
}