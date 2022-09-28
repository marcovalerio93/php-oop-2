<?php

require_once __DIR__ . '/../trait/adress.php';
class Property{

    public $name;
    public $area;
    public $rooms;
    public $floor;

    public function __construct($name, $area) {

        $this->name = $name;
        $this->area = $area;

    }

    
    

}