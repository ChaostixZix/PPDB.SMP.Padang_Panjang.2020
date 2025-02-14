<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonSiswaPindahtugasTable extends Migration
{
    public function up()
    {
        Schema::create('calon_siswa_pindahtugas', function (Blueprint $table) {
            $table->id();
            $table->string('nik_siswa');
            $table->string('pilihan_sekolah');
            $table->timestamps();

            $table->foreign('nik_siswa')->references('nik')->on('data_siswa');
        });
    }

    public function down()
    {
        Schema::dropIfExists('calon_siswa_pindahtugas');
    }
}