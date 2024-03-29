<?php
require_once './vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;


class Login {
    protected $database;
    protected $dbname = 'login';
    public function __construct(){
        $acc = ServiceAccount::fromJsonFile(__DIR__ . '/secret/firstfirebasewebapplication-d0d63608c31e.json');
        $firebase = (new Factory)->withServiceAccount($acc)->create();
        $this->database = $firebase->getDatabase();
    }


    public function get(string $userID = NULL){
        if (empty($userID) || !isset($userID)) { return FALSE; }
        if ($this->database->getReference($this->dbname)->getSnapshot()->hasChild($userID)){
            return $this->database->getReference($this->dbname)->getChild($userID)->getValue();
        } else {
            return FALSE;
        }
    }


    public function insert(array $data) {
        if (empty($data) || !isset($data)) { return FALSE; }
        foreach ($data as $key => $value){
            $this->database->getReference()->getChild($this->dbname)->getChild($key)->set($value);
        }
        return TRUE;
    }


    public function delete(string $userID) {
        if (empty($userID) || !isset($userID)) { return FALSE; }
        if ($this->database->getReference($this->dbname)->getSnapshot()->hasChild($userID)){
            $this->database->getReference($this->dbname)->getChild($userID)->remove();
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
?>