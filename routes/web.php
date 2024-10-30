<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\RAController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\RTController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\StokbarangController;

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
    //return view('welcome');
    return view('homepage');
});
Route::resource('absensi', AbsensiController::class);
Route::resource('transaksi', TransaksiController::class);
Route::get(
    '/rw_absensi',
    [RAController::class, 'show']
)->name('rw_absensi');

Route::get(
    '/rw_transaksi',
    [RTController::class, 'show']
)->name('rw_transaksi');

Route::get('/print-pdf', [RAController::class, 'print_pdf']);
Route::get('/print-excel', [RAController::class, 'print-excel']);

Route::get('/printpdf', [RTController::class, 'printpdf']);
Route::get('/print-excel', [RAController::class, 'print-excel']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/', HomepageController::class);

Route::group(['middleware' => ['auth']],function (){
    Route::group(['middleware' => ['logincheck:admin']], function(){
      Route::resource('admin', AdminController::class);
    }) ;
    Route::group(['middleware' => ['logincheck:pegawai']], function(){
      Route::resource('pegawai', PegawaiController::class);
  });
  });

  Route::resource('p', StokbarangController::class,);