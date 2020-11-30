<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daodien extends Model
{
    protected $table = "daodiens";
    public function theloai()  {
       return $this->hasMany ('App/Modes/phim','id', 'id');
    }
}
