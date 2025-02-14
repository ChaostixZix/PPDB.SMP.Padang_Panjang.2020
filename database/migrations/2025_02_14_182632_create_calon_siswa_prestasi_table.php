<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonSiswaPrestasiTable extends Migration
{
    public function up()
    {
        Schema::create('calon_siswa_prestasi', function (Blueprint $table) {
            $table->id();
            $table->string('nik_siswa');
            $table->integer('pilihan1');
            $table->string('jenis_prestasi');
            $table->string('tingkat_prestasi');
            $table->timestamps();
            
            $table->foreign('nik_siswa')->references('nik')->on('data_siswa');
        });
    }

    public function down()
    {
        Schema::dropIfExists('calon_siswa_prestasi');
    }
}