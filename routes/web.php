<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UangMasukController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\UangKeluarController;
use App\Http\Controllers\SearchController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('sesi.index');
});

Route::get('/dashboard',[dashboardController::class,'index']);
Route::get('/sesi',[SessionController::class,'index']);
Route::post('/sesi/login',[SessionController::class,'login'])->name('submitlogin');
Route::get('/DataUser',[DataUserController::class,'index'])->name('datauser');
Route::get('/tambahDataUser',[DataUserController::class,'create'])->name('storetambahDataUser');
Route::post('/DataUser',[DataUserController::class, 'store'])->name('simpandatauser');
Route::get('/DataUser/hapusDataUser/{id}',[DataUserController::class,'destroy'])->name('hapusDataUser');




Route::resource('uangkeluar', UangKeluarController::class);
Route::get('/tambahUangKeluar',[UangKeluarController::class,'create'])->name('tambahUangKeluar');
Route::post('/UangKeluar',[UangKeluarController::class, 'store'])->name('simpanuangkeluar');
Route::get('/UangKeluar-export',[UangKeluarController::class,'export'])->name('exportUangKeluar');
Route::get('/export-pdf',[UangKeluarController::class,'exportpdf'])->name('exportUangKeluarpdf');
Route::get('/UangKeluar/hapusUangKeluar/{id}',[UangKeluarController::class,'destroy'])->name('hapusUangKeluar');

// safira's
Route::get('/search', [SearchController::class, 'search'])->name('search');





