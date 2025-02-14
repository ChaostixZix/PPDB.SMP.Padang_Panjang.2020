<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZonasiTable extends Migration
{
    public function up()
    {
        Schema::create('zonasi', function (Blueprint $table) {
            $table->integer('zon_id')->primary();
            $table->string('nama_sekolah');
            $table->integer('kuota');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('zonasi');
    }
}