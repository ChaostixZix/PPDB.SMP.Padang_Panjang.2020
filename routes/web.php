<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('', [\App\Http\Controllers\InertiaController::class, 'index'])->name('depan.index');


Route::group(['prefix' => 'pengumuman'], function ()
{

    Route::group(['prefix' => 'smp'], function ()
    {
        Route::get('', [\App\Http\Controllers\Pengumuman\SMPController::class, 'index'])->name('pengumuman.smp.index');
        Route::get('pengumuman/{smp_id}', [\App\Http\Controllers\Pengumuman\SMPController::class, 'pengumuman'])->name('pengumuman.smp.pengumuman');
        Route::get('zonasi/{smp_id}', [\App\Http\Controllers\Pengumuman\SMPController::class, 'zonasi'])->name('pengumuman.smp.zonasi');
        Route::get('afirmasi/{smp_id}', [\App\Http\Controllers\Pengumuman\SMPController::class, 'afirmasi'])->name('pengumuman.smp.afirmasi');
        Route::get('pindahtugas/{smp_id}', [\App\Http\Controllers\Pengumuman\SMPController::class, 'pindahtugas'])->name('pengumuman.smp.pindahtugas');
    });
});
