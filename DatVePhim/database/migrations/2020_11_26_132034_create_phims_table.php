<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phims', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenphim');
            // $table->String('hinhanh');
            // $table->String('thoiluong');
            // $table->String('trailer');
            // $table->String('diem');
            // $table->String('trangthai');
            $table->String('daodien');
            $table->String('dienvien');
            $table->String('theloai');
            $table->String('hangphim');
            $table->String('quocgia');
            $table->timestamps();

            // $table->foreign('daodien')->references('id')->on('daodiens');
            // $table->foreign('dienvien')->references('id')->on('dienviens');
            // $table->foreign('theloai')->references('id')->on('theloais');
            // $table->foreign('quocgia')->references('id')->on('quocgias');
            // $table->foreign('nsx')->references('id')->on('nsxes');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phims');
    }
}
