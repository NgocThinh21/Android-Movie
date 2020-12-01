<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quocgia extends Model
{
    
    protected $table="quocgia";
    //protected $primarykey="phim_id";
    protected $fillable =[   
         'quocgia_ten'];
        
           public function phim(){
               return $this->hasMany('App\phim','phim_id','quocgia_id');
           }
}
