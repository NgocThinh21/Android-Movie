<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhim extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phim', function (Blueprint $table) {
            $table->Increments('phim_id');
            $table->string('phim_ten');
            $table->string('phim_gia');
            $table->string('phim_thoiluong');
            $table->string('phim_daodien');
            $table->string('phim_dienvien');
            $table->string('phim_theloai');
            $table->string('phim_quocgia');
            $table->string('phim_nsx');
            $table->string('phim_hinhanh');
            $table->string('phim_trailer');
            $table->string('phim_trangthai');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phim');
    }
}
