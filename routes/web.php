<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UangMasukController;
use App\Http\Controllers\userController;
use App\Http\Controllers\UangKeluarController;

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
//Route::get('/UangMasuk',[masukController::class,'index']);
Route::get('/user',[userController::class,'index']);

Route::resource('uangmasuk', UangMasukController::class);
Route::get('/tambahUangMasuk',[UangMasukController::class,'create'])->name('tambahUangMasuk');
Route::post('/UangMasuk/store',[UangMasukController::class, 'store'])->name('simpanuangmasuk');

Route::resource('uangkeluar', UangKeluarController::class);




