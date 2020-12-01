<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class theloai extends Model
{
    
    protected $table="theloai";
    //protected $primarykey="phim_id";
    protected $fillable =[   
         'theloai_ten'];
        
           public function phim(){
               return $this->hasMany('App\phim','phim_id','theloai_id');
           }
}
