<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\GfxBniController;
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
Route::get('/lot-lelang/{id}', [TblLotLelangController::class, 'detail']);

Route::get('/transaksi-bri', [TblTransaksiBriController::class, 'index']);

Route::get('/transaksi-bni', [TblTransaksiBniController::class, 'index']);

Route::get('/transaksi-mandiri', [TblTransaksiMandiriController::class, 'index']);

Route::controller(GfxBniController::class)->group(function(){
    Route::get('gfx-bni', 'index');
    // Route::post('gfx-bni', 'reader');
});

Route::get('/test', function(){
    
});

