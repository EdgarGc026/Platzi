<?php 
require_once('Account.php');

class Driver extends Account{
    public function __construct($id, $name, $document, $password){
        parent::__construct($id, $name, $document, $password);

    }
}

?>