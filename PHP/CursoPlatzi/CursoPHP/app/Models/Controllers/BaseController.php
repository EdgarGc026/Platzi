<?php 

namespace App\Controllers;
use Laminas\Diactoros\Response\HtmlResponse; 

class BaseController{

    protected $templateEngine;
    
    public function __construct(){
        $loader = new \Twig\Loader\FilesystemLoader('/Views');

        $this->templateEngine = new \Twig\Enviroment($loader, [
            'debug' => true,
            'cache' => false,
        ]);
    }

    public function renderHTML($fileName, $data = []){
        return new HtmlResponse ($this->templateEngine->render($fileName, $data));
    }
}

?>