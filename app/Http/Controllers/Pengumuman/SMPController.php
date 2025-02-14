<?php

namespace App\Http\Controllers\Pengumuman;

use App\Http\Controllers\Controller;
use App\Pendaftar\SMP\Afirmasi;
use App\Pendaftar\SMP\PindahTugas;
use App\Pendaftar\SMP\Prestasi;
use App\Pendaftar\SMP\Zonasi;
use App\Sistem\SMP;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

class SMPController extends Controller
{
    public function index()
    {
        $data = (new SMP())->getAll();
        
        // Count total siswa
        $totalSiswa = DB::table('data_siswa')->count();
        
        // Count total pendaftar from all categories
        $totalPendaftar = DB::table('calon_siswa_smp_zonasi')->count() +
            DB::table('calon_siswa_prestasi')->count() +
            DB::table('calon_siswa_afirmasi')->count() +
            DB::table('calon_siswa_pindahtugas')->count();
    
        return Inertia::render('Pengumuman/SMP/ListSMP', [
            'smps' => $data,
            'totalSiswa' => $totalSiswa,
            'totalPendaftar' => $totalPendaftar
        ]);
    }

    public function pengumuman($zon_id)
    {
        $data = (new SMP())->get($zon_id);
        return Inertia::render('Pengumuman/SMP/PengumumanSMP', [
            'smp' => $data,
        ]);
    }
    public function zonasi($zon_id)
    {
        $data = (new SMP())->get($zon_id);
        $pserta = (new Zonasi())->getPendaftarBySekolah($zon_id);
        return Inertia::render('Pengumuman/SMP/Zonasi', [
            'smp' => $data,
            'pesertass' => $pserta[6],
        ]);
    }

    public function pindahtugas($zon_id)
    {
        $data = (new SMP())->get($zon_id);
        $pserta = (new PindahTugas())->getPendaftarBySekolah($zon_id);
        return Inertia::render('Pengumuman/SMP/PindahTugas', [
            'smp' => $data,
            'pesertas' => $pserta,
        ]);
    }

    public function afirmasi($zon_id)
    {
        $data = (new SMP())->get($zon_id);
        $pserta = (new Afirmasi())->getPendaftarBySekolah($zon_id);
        return Inertia::render('Pengumuman/SMP/Afirmasi', [
            'smp' => $data,
            'pesertas' => $pserta,
        ]);
    }
    public function prestasi($zon_id)
    {
        $data = (new SMP())->get($zon_id);
        $pserta = (new Prestasi())->getPendaftarBySekolah($zon_id);
        return Inertia::render('Pengumuman/SMP/Prestasi', [
            'smp' => $data,
            'pesertas' => $pserta,
        ]);
    }
}
