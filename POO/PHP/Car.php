<?php 

class Car{
    
    public $id;
    public $license;
    public $driver;
    protected $passenger;

    public function __construct($license, $driver, $passenger){
        $this->license = $license;
        $this->driver = $driver;
        $this->passenger = $passenger;
    }

    public function setPassenger($passenger){
        if ($passenger == 4) {
            $this->passenger = $passenger;
        }else{
           echo("Se necesita minimo 4 pasajeros"); 
        }
    }

    public function getPassenger(){
        return $this->passenger;
    }


    public function printDataCar(){
        echo('<p>Licencia:' . $this->license . '<br>');
        echo('<p>Nombre del conductor:' . $this->driver->document . '<br>');
        echo('<p>Pasajeros:' . $this->passenger . '<br>');
    }
}