<?php 
require_once('Car.php');

class UberPool extends Car{
    public $brand;
    public $model;

    public function __construct($license, $driver, $brand, $model){
        parent::__construct($license, $driver, $brand, $model);

        $this->brand = $brand;
        $this->model = $model;
    }

    public function setPassenger($passenger){
        if ($passenger == 6) {
            $this->passenger = $passenger;
        }else{
           echo("Se necesita minimo 6 pasajeros"); 
        }
    }

}