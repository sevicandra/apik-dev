<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TblLotLelangController;
use App\Http\Controllers\TblTransaksiBniController;
use App\Http\Controllers\TblTransaksiBriController;
use App\Http\Controllers\TblTransaksiMandiriController;

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
    return view('layout.main',[
        'pagetitle'=> 'Beranda'
    ]);
});

Route::get('/lot-lelang', [TblLotLelangController::class, 'index']);

Route::get('/transaksi-bri', [TblTransaksiBriController::class, 'index']);

Route::get('/transaksi-bni', [TblTransaksiBniController::class, 'index']);

Route::get('/transaksi-mandiri', [TblTransaksiMandiriController::class, 'index']);


