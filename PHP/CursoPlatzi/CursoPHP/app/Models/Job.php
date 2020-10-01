<?php 

namespace App\Models;
use  Illuminate\Database\Eloquent\Model;


class Job extends Model{
    protected $table = 'jobs';
    
    public function getDurationAsString(){
        $years = floor($this->months / 12);
        $tmp = $this->months % 12;
        
    
        return "Job duration: $years years and $tmp months";
    }
}
