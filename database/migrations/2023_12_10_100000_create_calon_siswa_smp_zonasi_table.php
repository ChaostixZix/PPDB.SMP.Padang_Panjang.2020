<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonSiswaSmpZonasiTable extends Migration
{
    public function up()
    {
        Schema::create('calon_siswa_smp_zonasi', function (Blueprint $table) {
            $table->id();
            $table->string('nik_siswa');
            $table->string('pilihan1');
            $table->string('pilihan2');
            $table->float('jarak1');
            $table->float('jarak2');
            $table->timestamps();

            $table->foreign('nik_siswa')->references('nik')->on('data_siswa');
        });
    }

    public function down()
    {
        Schema::dropIfExists('calon_siswa_smp_zonasi');
    }
}