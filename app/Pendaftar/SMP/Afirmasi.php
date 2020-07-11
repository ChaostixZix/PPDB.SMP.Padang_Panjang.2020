<?php

namespace App\Pendaftar\SMP;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Afirmasi extends Model
{
    private function db()
    {
        return DB::table('calon_siswa_afirmasi');
    }

    public function getPendaftarBySekolah($zon_id)
    {
        return $this->db()->where(['calon_siswa_afirmasi.pilihan1' => $zon_id])
            ->leftJoin('data_siswa', 'data_siswa.nik', '=', 'calon_siswa_afirmasi.nik_siswa')
            ->get();
    }
}
