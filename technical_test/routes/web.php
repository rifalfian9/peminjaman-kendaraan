<?php

use App\Http\Controllers\adminwebController;
use App\Http\Controllers\webuserController;
use App\Http\Controllers\LoginController;
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
    return view('include.beranda');
});

Route::controller(webuserController::class)->group( function() {
    Route::get('/beranda', 'beranda')->middleware('auth');
    Route::get('/pinjam', 'pinjam');
    Route::get('/login', 'login');
    Route::get('/register', 'register');
    Route::get('/pesanan', 'pesanan');
    Route::get('/pengaturan', 'pengaturan');
    Route::get('/grup', 'grup');
    Route::get('/search', 'search');
    Route::get('/pesan/{id_kendaraan}', 'pesan');
    
});
Route::controller(webuserController::class)->group( function() {
     Route::post('/', 'memesan');
     Route::post('/mendaftar', 'regist');
     Route::post('/logout', 'logout');
});
Route::post('/login', [LoginController::class, 'authenticate']);










// ---------------------------------------------------
Route::controller(adminwebController::class)->group( function() {
    Route::get('/admin/login', 'login');
     Route::get('/admin/cetak', 'cetak');
    Route::get('/admin/home', 'adminhome');
     Route::get('/admin/datakendaraan', 'datakendaraan');
     Route::get('/admin/datauser', 'datauser');
      Route::get('/admin/datasopir', 'datasopir');
      Route::get('/admin/disetujui', 'disetujui');
      Route::get('/admin/dibatalkan', 'dibatalkan');
      Route::get('/admin/tambahpesanan', 'tambahpesanan');
      Route::get('/admin/seedetails/{id_peminjaman}', 'seedetails');
      Route::get('/admin/hapussopir' , 'hapussopir');
      Route::get('/admin/tambahkendaraan' ,'tambahkendaraan');
      Route::get('/admin/tambahsopir' ,'tambahsopir');
      Route::get('/admin/hapuskendaraan', 'hapuskendaraan');
      route::get('/admin/editkendaraan/{id_kendaraan}', 'editkendaraan');
});
Route::controller(adminwebController::class)->group( function (){
    Route::post('/admin/validasi', 'validasi');
    Route::post('/admin/tolak', 'tolak');
    Route::post('/admin/buatpesanan', 'buatpesanan');
    Route::post('/admin/editpesanan/{id_peminjaman}', 'editpesanan');
    Route::post('/admin/settambahsopir', 'settambahsopir');
    Route::post('/admin/settambahkendaraan', 'settambahkendaraan');
    Route::post('/admin/seteditkendaraan/{id_kendaraan}' , 'seteditkendaraan');
     Route::post('/admin/logined', 'authenticate');
      Route::post('/admin/logout', 'logout');
});