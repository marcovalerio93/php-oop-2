<?php

trait Adress { 

    public $municipality;
    public $adress;
    public $houseNumber;

    public function getAllAdress() {

        return $this->adress . '' . $this->houseNumber . '' . $this->municipaity . '';
    }            
}