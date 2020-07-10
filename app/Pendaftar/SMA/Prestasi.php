<?php

namespace App\Pendaftar\SMA;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Prestasi extends Model
{
    private function db()
    {
        return DB::table('daftar_prestasi');
    }

    public function getPendaftarBySekolah($sma_id)
    {
        $select =
            [
                'daftar_prestasi.id',
                'daftar_prestasi.nopes',
                'daftar_prestasi.pilihan',
                'daftar_prestasi.status',
                'daftar_prestasi.waktu',

                'data_siswa.nisn',
                'data_siswa.no_induk',
                'data_siswa.nm_pes',
                'data_siswa.tmp_lhr',
                'data_siswa.tgl_long',
                'data_siswa.sex',
                'data_siswa.nm_ortu',
                'data_siswa.asal_smp',
                'data_siswa.alamat_1',
                'data_siswa.koordinat',
                'data_siswa.url_foto',
                'data_siswa.kota',
                'data_siswa.kecamatan',
                'data_siswa.kelurahan',
                'data_siswa.lock',

            ];
        return $this->db()->where(['daftar_prestasi.lock' => 1, 'daftar_prestasi.pilihan' => $sma_id])
            ->select($select)
            ->leftJoin('data_siswa', 'data_siswa.nopes', '=', 'daftar_prestasi.nopes')
            ->get();
    }
}
