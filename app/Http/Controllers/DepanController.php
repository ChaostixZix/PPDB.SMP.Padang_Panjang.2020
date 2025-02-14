<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class DepanController extends Controller
{
    public function index()
    {
        $counts = [
            'zonasi' => DB::table('calon_siswa_smp_zonasi')->count(),
            'prestasi' => DB::table('calon_siswa_prestasi')->count(),
            'afirmasi' => DB::table('calon_siswa_afirmasi')->count(),
            'pindahTugas' => DB::table('calon_siswa_pindahtugas')->count()
        ];

        return Inertia::render('Depan', [
            'counts' => $counts
        ]);
    }
}