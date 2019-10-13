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
        SELECT * FROM employer WHERE telephone = ?", [$username], null, true);
        if($user){
             if($user->password === sha1($password)){
               $_SESSION['telephone'] = $user->telephone;
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