<?php

namespace App\Pendaftar\SMP;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Prestasi extends Model
{
    private function db()
    {
        return DB::table('calon_siswa_prestasi');
    }

    public function getPendaftarBySekolah($zon_id)
    {
        return $this->db()->where(['calon_siswa_prestasi.pilihan1' => $zon_id])
            ->leftJoin('data_siswa', 'data_siswa.nik', '=', 'calon_siswa_prestasi.nik_siswa')
            ->get();
    }
}
