<?php 

require_once("Account.php");
require_once("UberX.php");
require_once('Car.php');
require_once("UberPool.php");

$uberX = new UberX("AMDX80", new Account("Fidel Martinez", "BIGDICK-20"), "Nissan", "TIIDA");
$uberX->setPassenger(4);
$uberX->printDataCar();


$uberPool = new UberPool("INTELN96", new Account("Linus Torval", "H1N1VNZ"), "Mazda", "La wea");
$uberPool->setPassenger(6);
$uberPool->printDataCar(); 

