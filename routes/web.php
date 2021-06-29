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
route::get('/pegawai', [App\Http\Controllers\PegawaiController::class, 'index'])->name('pegawai');
route::post('/pegawai/create', [App\Http\Controllers\PegawaiController::class, 'create'])->name('pegawai');
route::get('/pegawai/{id}/edit', [App\Http\Controllers\PegawaiController::class, 'edit'])->name('pegawai');
route::post('/pegawai/{id}/update', [App\Http\Controllers\PegawaiController::class, 'update'])->name('pegawai');
route::get('/pegawai/delete/{id}', [App\Http\Controllers\PegawaiController::class, 'delete'])->name('pegawai');