<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DataKerohanianController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Siswa\EkstensifController;
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
    return view('landing_page');
});

Route::get('/login-siswa', [LoginController::class, 'viewSiswa']);
Route::post('/login-siswa', [LoginController::class, 'loginSiswa']);
Route::get('/login-guru', [LoginController::class, 'viewGuru']);
Route::post('/login-guru', [LoginController::class, 'loginGuru']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/test', function () {
    return view('siswa.main');
});


// CRUD Ekstensif
Route::resource('/ekstensif', EkstensifController::class)->middleware('siswa');





// Admin Route
Route::get('/admin-dashboard', [AdminController::class, 'index'])->middleware('admin');
// CRUD DATA KEROHANIAN
Route::resource('/data_kerohanian', DataKerohanianController::class);
