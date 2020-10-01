<?php 
/* 
// Sin POO
$name = "Edgar";
$age = 23;
$country = "mexico";

$name2 = "Ramon";
$age2 = 23;
$country2 = "mexico";

$name3 = "David";
$age3 = 23;
$country3 = "mexico"; */

class People {
    public $name;
    public $age;
    public $country;
    
    public function __construct($name, $age, $country){
        $this->name = $name;
        $this->age = $age;
        $this->country = $country;
    }

    public function showInfo(){
        echo $this->name .' tiene ' .$this->age .' y nacio en ' .$this->country;
    }
}

$edgar = new People('Edgar', 23, 'Mexico');
$edgar->showInfo();

echo '<br/>';
$adan = new People('Adan', 25, 'Brasil');
$adan->showInfo(); 

?> 