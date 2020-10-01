<?php 
require_once('clases.php');

class Student extends People{
    public $degree;
    public $university;

    
    public function __construct($name, $age, $country, $degree, $university){
        parent::__construct($name, $age, $country);

        $this->degree = $degree;
        $this->university = $university;
    }

    public function showInfo(){
        echo 'El estudiante es: ' .$this->name .' y tiene ' .$this->age  .' años. Nacio en  ' .$this->country .' cursa la licenciatura de ' .$this->degree .' por parte de la ' .$this->university;
    }
}
echo '<br />';
$roberto = new Student('Roberto', 23, 'Mexico', 'Musica', 'Universidad Veracruzana');
$roberto->showInfo();



?>