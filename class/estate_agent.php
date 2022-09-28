<?php
require_once __DIR__ . '/User.php';

class Estate_agent extends User {

    public $commision;

    public function __construct($name, $surname, $email, $password, $commision = null)
    {
        parent::__construct($name, $surname, $email, $password);

        $this->commision = $commision;
        
    }
}