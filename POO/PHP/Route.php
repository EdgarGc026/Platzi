<?php  

class Route{
    
    public $id;
    public $star = array();
    public $end = array();

    public function __construct($id, $star, $end){
        $this->id = $id;
        $this->star = $star;
        $this->end =$end;
    }

}