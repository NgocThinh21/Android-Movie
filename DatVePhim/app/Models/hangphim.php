<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hangphim extends Model
{
    protected $table = "hangphims";
    public function theloai()  {
       return $this->hasMany ('App/Modes/phim','id', 'id');
    }
}
