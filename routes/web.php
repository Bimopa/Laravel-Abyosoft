<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HutangController;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\DashboardController;

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
    $hbeli = DB::table('tbl_hbeli')->get();
    return view('dashboard', ['hbeli' => $hbeli]);
})->name('home');


//BARANG ->name('barang.view')
Route::get('/view-barang', function () {
    $barang = DB::table('tbl_barang')->get();
    return view('view-barang', ['barang' => $barang]);
})->name('barang.view');
Route::get('/create-barang-view', function () {
    return view('create-barang');
});
Route::post('/create-barang', [BarangController::class, 'create']);
Route::put('/barang', [BarangController::class, 'update']);
Route::delete('/barang', [BarangController::class, 'del']);


// SUPLIER
Route::get('/view-suplier', function () {
    $suplier = DB::table('tbl_suplier')->get();
    return view('view-suplier', ['suplier' => $suplier]);
})->name('suplier.view');
Route::get('/create-suplier-view', function () {
    return view('create-suplier');
});
Route::post('/create-suplier', [SuplierController::class, 'create']);


//STOCK
Route::get('/view-stock', function () {
    $stock = DB::table('tbl_stock')->get();
    return view('view-stock', ['stock' => $stock]);
})->name('stock.view');
Route::get('/create-stock-view', function () {
    $barang = DB::table('tbl_barang')->get();
    return view('create-stock', ['barang' => $barang]);
});
Route::post('/create-stock', [StockController::class, 'create']);


//HUTANG
Route::get('/view-hutang', function () {
    $hutang = DB::table('tbl_hutang')->get();
    return view('view-hutang', ['hutang' => $hutang]);
})->name('hutang.view');
Route::get('/create-hutang-view', function () {
    return view('create-hutang');
});
Route::post('/create-hutang', [HutangController::class, 'create']);


//HARGA BELI
Route::get('/view-pembelian', function () {
    $hbeli = DB::table('tbl_hbeli')->get();
    return view('view-pembelian', ['hbeli' => $hbeli]);
})->name('pembelian.view');
Route::get('/create-pembelian-view', function () {
    $suplier = DB::table('tbl_suplier')->get();
    return view('create-pembelian', ['suplier' => $suplier]);
});
Route::post('/create-pembelian', [StockController::class, 'create']);


// DETAIL PEMBELIAN
Route::get('/view-dbeli', function () {
    $debli = DB::table('tbl_dbeli')->get();
    return view('view-dbeli', ['dbeli' => $dbeli]);
})->name('dbeli.view');
Route::get('/create-dbeli-view', function () {
    return view('create-dbeli');
});
Route::post('/create-dbeli', [StockController::class, 'create']);
