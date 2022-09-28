<?php 

require_once __DIR__ . '/../trait/adress.php';

class User {

    public $name;
    public $surname;
    public $email;
    public $password;

    public function __construct($name, $surname, $email, $password) {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = $password;
    }

    public function getUserInfo() {
        return $this->name . '' . $this->surname . '' . $this->email . ''. $this->password . '' ;
    }

    
}