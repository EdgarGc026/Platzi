<?php 
require_once 'Product.php';

class Album extends Product{
    private $company;
    private $artist;
    private $duration;
    private $genre;

    public function __construct($company, $artist, $duration, $genre, $id, $title, $price, $description){
        parent::__construct($id, $title, $price, $description);
        $this->company = $company;
        $this->artist = $artist;
        $this->duration = $duration;
        $this->genre = $genre;


    }

    public function getProfit() {
        return round($this->price * (0.1 + $this->profitBonus), 2);
    }
}

?>