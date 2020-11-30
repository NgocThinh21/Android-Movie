<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dienvien extends Model
{
    protected $table = "dienviens";
    public function theloai()  {
       return $this->hasMany ('App/Modes/phim','id', 'id');
    }
}
