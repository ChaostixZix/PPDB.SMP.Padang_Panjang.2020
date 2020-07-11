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

class SMPController extends Controller
{
    public function index()
    {
        $data = (new SMP())->getAll();
        return Inertia::render('Pengumuman/SMP/ListSMP', [
            'smps' => $data
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
