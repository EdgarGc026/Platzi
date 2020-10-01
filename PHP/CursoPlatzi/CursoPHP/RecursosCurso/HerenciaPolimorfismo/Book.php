<?php

require_once 'Product.php';

class Book extends Product{
    
    private $isbn;
    private $publisher;
    private $author;
    private $pages;
    private $profitBonus = 0.05;

    // public function __construct($isbn, $publisher, $author, $pages, $profitBonus, $id, $title, $price, $description){
    //     parent::__construct($id, $title, $price, $description);
    //     $this->isbn = $isbn;
    //     $this->publisher = $publisher;
    //     $this->author = $author;
    //     $this->pages = $pages;
    //     $this->profitBonus = $profitBonus;
    // }

    public function getProfit($price) {
        $this->price = $price;
        return $this->price * (0.1 + $this->profitBonus);
    }
}

/* 
$libro = new Book(id, title, price, description, isbn, publisher, author, paginas, profitBonus)
*/

$libro = new Book('1039B', 'Real Española', 'Un Español', 100, '');
echo "La ganancia del libro fue: " . $libro->getProfit(100);


?>