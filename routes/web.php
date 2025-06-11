<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\Pegawai2Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MinyakgorengController;
use App\Http\Controllers\KaryawanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', [Link::class, 'helloword']);

Route::get('template1', function () {
    return view('template1'); //v
});

Route::get('pertama', function () {
    return view('pertama'); //v
});

Route::get('linktree', function () {
    return view('linktree'); //v
});

Route::get('layout', function () {
    return view('layout'); //v
});

Route::get('js2', function () {
    return view('js2'); //v
});

Route::get('js1', function () {
    return view('js1'); //v
});

Route::get('ets', function () {
    return view('ets'); //v
});

Route::get('home', function () {
    return view('home'); //v
});

Route::get('dosen', [Link::class, 'index']);

// Route::get('pegawai/{nama}', [Pegawai2Controller::class, 'index']);
Route::get('/formulir', [Pegawai2Controller::class, 'formulir']);
Route::post('/formulir/proses', [Pegawai2Controller::class, 'proses']);

//Route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//route CRUD
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);

//template
Route::get('template', function () {
    return view('template'); //v
});

//route crud tugas mandiri minyak goreng
Route::get('/minyakgoreng', [MinyakgorengController::class, 'index']);
Route::get('/minyakgoreng/tambah', [MinyakgorengController::class, 'tambah']);
Route::post('/minyakgoreng/store', [MinyakgorengController::class, 'store']);
Route::get('/minyakgoreng/edit/{id}', [MinyakgorengController::class, 'edit']);
Route::post('/minyakgoreng/update', [MinyakgorengController::class, 'update']);
Route::get('/minyakgoreng/hapus/{id}', [MinyakgorengController::class, 'hapus']);
Route::get('/minyakgoreng/cari', [MinyakgorengController::class, 'cari']);

//route latihan 3 karyawan
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'hapus']);

