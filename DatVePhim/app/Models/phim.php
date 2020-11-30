<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phim extends Model
{
  protected $table="phim";
  protected $primarykey='id';
  protected $fillable=['tenphim,daodien, dienvien, theloai, hangphim, quocgia'];

  public function daodien(){
    
  }

}
