<?php

require_once __DIR__ . '/User.php';

class Costumer extends User {

    public $budget;
    public $area;
    public $municipality;

    public function __construct($name, $surname, $email, $password, $budget = null, $area = null, $municipality =null)
    {
        parent::__construct($name, $surname, $email, $password);

        $this->budget = $budget;
        $this->area = $area;
        $this->municipality = $municipality;

    }


}
