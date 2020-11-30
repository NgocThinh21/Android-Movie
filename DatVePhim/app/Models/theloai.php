<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class theloai extends Model
{
    protected $table = "theloais";
    public function theloai()  {
       return $this->hasMany ('App/Modes/phim','id', 'id');
    }
}
