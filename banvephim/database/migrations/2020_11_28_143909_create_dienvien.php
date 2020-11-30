<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDienvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dienvien', function (Blueprint $table) {
            $table->Increments('dienvien_id');
            $table->string('dienvien_ten');
            $table->string('dienvien_hinhanh');
            $table->string('dienvien_ngaysinh');
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
        Schema::dropIfExists('dienvien');
    }
}
