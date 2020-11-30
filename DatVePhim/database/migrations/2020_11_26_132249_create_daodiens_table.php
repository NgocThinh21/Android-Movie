<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaodiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daodiens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tendaodien');
            $table->string('ngaysinh');
            $table->string('hinhanh');
            $table->string('quocgia');
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
        Schema::dropIfExists('daodiens');
    }
}