<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phim extends Model
{
   protected $table="phim";
   protected $primarykey="phim_id";
   protected $field=[   
        'phim_ten',
        'phim_gia',
        'phim_thoiluong',
        'phim_daodien',
        'phim_dienvien',
        'phim_theloai',
        'phim_quocgia',
        'phim_nsx',
        'phim_hinhanh',
        'phim_trailer',
        'phim_trangthai',];
          public function theloai(){
              return $this->belongsTo('App\theloai','theloai_id','phim_theloai');
          }
          public function daodien(){
            return $this->hasMany('App\daodien','daodien_id','phim_daodien');
          }
            public function dienvien(){
              return $this->hasMany('App\dienvien','dienvien_id','phim_theloai');
          }
          public function quocgia(){
            return $this->belongsTo('App\quocgia','quocgia_id','phim_quocgia');
          }
          public function nsx(){
            return $this->belongsTo('App\nsx','nsx_id','phim_id');
          }
}
