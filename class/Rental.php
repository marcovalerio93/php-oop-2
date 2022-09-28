<?php

require_once __DIR__ . '/Property.php';

class Rental extends Property {

    public $priceMonth;

    public function __construct($name, $area, $priceMonth = null)
    {
        parent::__construct($name, $area);

        $this->priceMonth = $priceMonth;
       
    }


}