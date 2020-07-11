<?php

namespace App\Pendaftar\SMP;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PindahTugas extends Model
{
    private function db()
    {
        return DB::table('calon_siswa_pindahtugas');
    }

    public function getPendaftarBySekolah($zon_id)
    {
        return $this->db()->where(['calon_siswa_pindahtugas.pilihan_sekolah' => $zon_id])
            ->leftJoin('data_siswa', 'data_siswa.nik', '=', 'calon_siswa_pindahtugas.nik_siswa')
            ->get();
    }
}
