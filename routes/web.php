<?php

use App\Http\Controllers\AgendaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnakController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ImunisasiController;
use App\Http\Controllers\TimbanganController;
use App\Http\Controllers\HomeController;

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    Auth::logout();
    return redirect('/login');
});

Route::get('/dashboard', function () {
    return view('posyandu.dashboard');
});

Route::get('/', function () {
    return view('posyandu.landing');
});

Route::get('/anak', [AnakController::class, 'index']);
Route::get('/anak/create', [AnakController::class, 'create']);
Route::get('/anak/search', [AnakController::class, 'search']);
Route::post('/anak/store', [AnakController::class, 'store']);
Route::get('/anak/show/{id}', [AnakController::class, 'show']);
Route::get('/anak/lihat/{id}', [AnakController::class, 'lihat']);
Route::get('/anak/edit/{id}', [AnakController::class, 'edit']);
Route::post('/anak/update/{id}', [AnakController::class, 'update']);
Route::get('/anak/destroy/{id}', [AnakController::class, 'destroy']);

Route::get('/imunisasi', [ImunisasiController::class, 'index']);
Route::get('/imunisasi/create', [ImunisasiController::class, 'create']);
Route::post('/imunisasi/store', [ImunisasiController::class, 'store']);
Route::get('/imunisasi/show/{id}', [ImunisasiController::class, 'show']);
Route::get('/imunisasi/edit/{id}', [ImunisasiController::class, 'edit']);
Route::post('/imunisasi/update/{id}', [ImunisasiController::class, 'update']);
Route::get('/imunisasi/destroy/{id}', [ImunisasiController::class, 'destroy']);

Route::get('/timbangan', [TimbanganController::class, 'index']);
Route::get('/timbangan/create', [TimbanganController::class, 'create']);
Route::post('/timbangan/store', [TimbanganController::class, 'store']);
Route::get('/timbangan/show/{id}', [TimbanganController::class, 'show']);
Route::get('/timbangan/lihat/{id}', [TimbanganController::class, 'lihat']);
Route::get('/timbangan/edit/{id}', [TimbanganController::class, 'edit']);
Route::post('/timbangan/update/{id}', [TimbanganController::class, 'update']);
Route::get('/timbangan/destroy/{id}', [TimbanganController::class, 'destroy']);

Route::get('/agenda', [AgendaController::class, 'index']);
Route::get('/agenda/create', [AgendaController::class, 'create']);
Route::post('/agenda/store', [AgendaController::class, 'store']);
Route::get('/agenda/show/{id}', [AgendaController::class, 'show']);
Route::get('/agenda/edit/{id}', [AgendaController::class, 'edit']);
Route::post('/agenda/update/{id}', [AgendaController::class, 'update']);
Route::get('/agenda/destroy/{id}', [AgendaController::class, 'destroy']);
