<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quocgia extends Model
{
    protected $table = "quocgias";
    public function theloai()  {
       return $this->hasMany ('App/Modes/phim','id', 'id');
    }
}
