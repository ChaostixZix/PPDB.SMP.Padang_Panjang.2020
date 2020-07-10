<?php

namespace App\Http\Controllers\Pengumuman;

use App\Http\Controllers\Controller;
use App\Pendaftar\SMP\Zonasi;
use App\Sistem\SMA;
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
}
