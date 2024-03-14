<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\tampil;
use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;

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

 


 //login/admin
Route::get('login/admin', [admin::class, 'loginAdmin']);
//simpan/login/admin
Route::post('simpan/login/admin', [Admin::class, 'cekAdmin']);
//login/petugas
Route::get('login/petugas', [admin::class, 'loginPetugas']);
//registrasi/admin
Route::get('registrasi/admin', [admin::class, 'regis2']);
//simpan/registrasi/admin
Route::post('simpan/registrasi/admin', [admin::class, 'simpan']);
//dashboard/admin
Route::get('dashboard/admin', [admin::class, 'dasbor']);
//tampil/buku 
Route::get('tampil/buku ',[tampil::class,'tampil']);
//registrasi/buku 
Route::get('registrasi/buku  ',[admin::class,'cc']);
 //simpan/registrasi/buku
Route::post('simpan/registrasi/buku', [admin::class, 'simpanbuku']);
//tampil data admin
Route::get('tampil/data/admin ',[tampil::class,'dataadmin']);



