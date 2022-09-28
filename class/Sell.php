<?php

require_once __DIR__ . '/Property.php';

class Rental extends Property {

    public $price;

    public function __construct($name, $area, $price = null)
    {
        parent::__construct($name, $area);

        $this->price = $price;
       
    }


}