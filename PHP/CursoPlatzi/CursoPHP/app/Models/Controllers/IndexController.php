<?php 

namespace App\Controllers;

use App\Models\{Job, Project};

class IndexController extends BaseController{
    public function indexAction(){
        

        $jobS = Job::all();
        $project1 = new Project('Project 1', "Description 1");
        $projects = [
            $project1
        ];

        $name = 'Edgar Gonzalez';
        $limitsMonths = 2400;
        
        return $this->renderHTML('index.twig', [
            'name' => $name,
            'jobs' => $jobs

        ]);
        
    }
}










