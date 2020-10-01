<?php 
require_once('Car.php');

class UberX extends Car{
    public $brand;
    public $model;

    public function __construct($license, $driver, $brand, $model){
        parent::__construct($license, $driver, $brand, $model);

        $this->brand = $brand;
        $this->model = $model;
    }
    public function setPassenger($passenger){
        if($passenger == 4){
            $this->passenger = $passenger;
        }else{
            echo("UberX necesita 4 pasajeros");
        }
    }

}
