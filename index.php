<?php

require_once __DIR__ . '/class/Costumer.php';
require_once __DIR__ . '/class/Estate_agent.php';
require_once __DIR__ . '/class/Sell.php';
require_once __DIR__ . '/class/Rental.php';


$myCostumer = new Costumer ("Jhon", "Smith", "jhon@smith.com", "jhonSmit1993", "100.000.00");
$myEstate_agent = new Estate_agent ("Matt", "Offman", "matt@offma.com", "0000Matt", "3%");
$myRental = new Rental ("Villa", "190mq", 3000); 

var_dump($myCostumer);
var_dump($myEstate_agent);
var_dump($mySell);
var_dump($myRental);