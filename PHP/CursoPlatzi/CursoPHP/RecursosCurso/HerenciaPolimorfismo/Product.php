<?php 

class Product{
    private $id;
    private $title;
    private $price;
    private $description;

    public function __construct($id, $title, $price, $description){
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->description = $description;
    }

    public function getProfit($price){
        return $this->price * 0.1;
    }

    //  Metodos setters
    // public function setId($id){
    //     $this->id = $id;
    // }

    // public function setTitle($title){
    //     $this->title = $title;
    // }

    // public function setPrice($price){
    //     $this->price = $price;
    // }


    // public function setDescription($description){
    //     $this->description = $description;
    // }

    // // metodos getters 
    // public function getId(){
    //     return $this->id;
    // }

    // public function getTitle(){
    //     return $this->title;
    // }

    // public function getPrice(){
    //     return $this->price;
    // }

    // public function getDescription(){
    //     return $this->description;
    // }


}


?>