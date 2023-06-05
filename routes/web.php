<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BahanbakuController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\GudangbahanController;
use App\Http\Controllers\GudangbarangController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\PeralatanController;
use App\Http\Controllers\ProduksiController;
use App\Http\Controllers\HomeController;
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
// welcome page
Route::get('/', function () {
    return view('welcome');
});
Route::get('/bahanbaku', [BahanbakuController::class, 'index'])->name('bahanbaku.index');
Route::get('/gudangbarang', [GudangbarangController::class, 'index'])->name('gudangbarang.index');
Route::get('/gudangbahan', [GudangbahanController::class, 'index'])->name('gudangbahan.index');
Route::get('/produksi', [ProduksiController::class, 'index'])->name('produksi.index');
Route::get('/peralatan', [PeralatanController::class, 'index'])->name('peralatan.index');
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/pengiriman', [PengirimanController::class, 'index'])->name('pengiriman.index');
//CRUD BARANG
Route::get('/barang/index', [BarangController::class, 'index'])->name('barang.index')->middleware(['auth', 'role:Manajemen barang,admin']);
Route::get('/barang/create', [BarangController::class, 'addView'])->name('barang.create')->middleware(['auth', 'role:Manajemen barang,admin']);
Route::post('/barang', [BarangController::class, 'store'])->middleware(['auth', 'role:Manajemen barang,admin']);
Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit')->middleware(['auth', 'role:Manajemen barang,admin']);
Route::put('/barang/update/{id}', [BarangController::class, 'update'])->name('barang.update')->middleware(['auth', 'role:Manajemen barang,admin']);
Route::get('/barang/delete/{id}', [BarangController::class, 'destroy'])->middleware(['auth', 'role:Manajemen barang,admin']);
//CRUD OUTLET
Route::get('/outlet', [OutletController::class, 'index'])->name('outlet.index');
Route::get('/outlet/create', [OutletController::class, 'addView'])->name('outlet.create');
Route::post('/outlet', [OutletController::class, 'store']);
Route::get('/outlet/edit/{id}', [OutletController::class, 'edit'])->name('outlet.edit');
Route::put('/outlet/update/{id}', [OutletController::class, 'update'])->name('outlet.update');
Route::get('/outlet/delete/{id}', [OutletController::class, 'destroy']);
//CRUD PERALATAN
Route::get('/peralatan', [PeralatanController::class, 'index'])->name('peralatan.index');
Route::get('/peralatan/create', [PeralatanController::class, 'addView'])->name('peralatan.create');
Route::post('/peralatan', [PeralatanController::class, 'store']);
Route::get('/peralatan/edit/{id}', [PeralatanController::class, 'edit'])->name('peralatan.edit');
Route::put('/peralatan/update/{id}', [PeralatanController::class, 'update'])->name('peralatan.update');
Route::get('/peralatan/delete/{id}', [PeralatanController::class, 'destroy']);
//CRUD PEGAWAI
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/pegawai/create', [PegawaiController::class, 'addView'])->name('pegawai.create');
Route::post('/pegawai', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::put('/pegawai/update/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
Route::get('/pegawai/delete/{id}', [PegawaiController::class, 'destroy']);
//CRUD PENGIRIMAN
Route::get('/pengiriman', [PengirimanController::class, 'index'])->name('pengiriman.index');
Route::get('/pengiriman/create', [PengirimanController::class, 'addView'])->name('pengiriman.create');
Route::post('/pengiriman', [PengirimanController::class, 'store']);
Route::get('/pengiriman/edit/{id}', [PengirimanController::class, 'edit'])->name('pengiriman.edit');
Route::put('/pengiriman/update/{id}', [PengirimanController::class, 'update'])->name('pengiriman.update');
Route::get('/pengiriman/delete/{id}', [PengirimanController::class, 'destroy']);
//CRUD BAHAN BAKU
Route::get('/bahanbaku', [BahanbakuController::class, 'index'])->name('bahanbaku.index');
Route::get('/bahanbaku/create', [BahanbakuController::class, 'addView'])->name('bahanbaku.create');
Route::post('/bahanbaku', [BahanbakuController::class, 'store']);
Route::get('/bahanbaku/edit/{id}', [BahanbakuController::class, 'edit'])->name('bahanbaku.edit');
Route::put('/bahanbaku/update/{id}', [BahanbakuController::class, 'update'])->name('bahanbaku.update');
Route::get('/bahanbaku/delete/{id}', [BahanbakuController::class, 'destroy']);
//CRUD GUDANG BARANG
Route::get('/gudangbarang', [GudangbarangController::class, 'index'])->name('gudangbarang.index');
Route::get('/gudangbarang/create', [GudangbarangController::class, 'addView'])->name('gudangbarang.create');
Route::post('/gudangbarang', [GudangbarangController::class, 'store']);
Route::get('/gudangbarang/edit/{id}', [GudangbarangController::class, 'edit'])->name('gudangbarang.edit');
Route::put('/gudangbarang/update/{id}', [GudangbarangController::class, 'update'])->name('gudangbarang.update');
Route::get('/gudangbarang/delete/{id}', [GudangbarangController::class, 'destroy']);
//CRUD GUDANG BAHAN
Route::get('/gudangbahan', [GudangbahanController::class, 'index'])->name('gudangbahan.index');
Route::get('/gudangbahan/create', [GudangbahanController::class, 'addView'])->name('gudangbahan.create');
Route::post('/gudangbahan', [GudangbahanController::class, 'store']);
Route::get('/gudangbahan/edit/{id}', [GudangbahanController::class, 'edit'])->name('gudangbahan.edit');
Route::put('/gudangbahan/update/{id}', [GudangbahanController::class, 'update'])->name('gudangbahan.update');
Route::get('/gudangbahan/delete/{id}', [GudangbahanController::class, 'destroy']);
//CRUD PRODUKSI
Route::get('/produksi/index', [ProduksiController::class, 'index'])->name('produksi.index')->middleware(['auth', 'role:Manajemen produksi,admin']);
Route::get('/produksi/create', [ProduksiController::class, 'addView'])->name('produksi.create')->middleware(['auth', 'role:Manajemen produksi,admin']);
Route::post('/produksi', [ProduksiController::class, 'store'])->middleware(['auth', 'role:Manajemen produksi,admin']);
Route::get('/produksi/edit/{id}', [ProduksiController::class, 'edit'])->name('produksi.edit')->middleware(['auth', 'role:Manajemen produksi,admin']);
Route::put('/produksi/update/{id}', [ProduksiController::class, 'update'])->name('produksi.update')->middleware(['auth', 'role:Manajemen produksi,admin']);
Route::get('/produksi/delete/{id}', [ProduksiController::class, 'destroy'])->name('produksi.destroy')->middleware(['auth', 'role:Manajemen produksi,admin']);
//CETAK REPORT
Route::get('/barang-pdf', [ExportController::class, 'barangPDF'])->name('barang.pdf');
Route::get('/bahan-pdf', [ExportController::class, 'bahanPDF'])->name('bahan.pdf');
Route::get('/gudangbarang-pdf', [ExportController::class, 'gudangbarangPDF'])->name('gudangbarang.pdf');
Route::get('/gudangbahan-pdf', [ExportController::class, 'gudangbahanPDF'])->name('gudangbahan.pdf');
Route::get('/peralatan-pdf', [ExportController::class, 'peralatanPDF'])->name('peralatan.pdf');
Route::get('/produksi-pdf', [ExportController::class, 'produksiPDF'])->name('produksi.pdf');
Route::get('/pegawai-pdf', [ExportController::class, 'pegawaiPDF'])->name('pegawai.pdf');
Route::get('/pengiriman-pdf', [ExportController::class, 'pengirimanPDF'])->name('pengiriman.pdf');
Route::get('/outlet-pdf', [ExportController::class, 'outletPDF'])->name('outlet.pdf');
//AUNTENTIFIKASI
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home');
});
Route::middleware(['auth', 'role:Manejemen barang'])->prefix('barang')->group(function () {
    Route::get('/', [App\Http\Controllers\BarangController::class, 'index'])->name('barang.home');
});
Route::middleware(['auth', 'role:Manajemen produksi'])->prefix('produksi')->group(function () {
    Route::get('/', [App\Http\Controllers\PengirimanController::class, 'index'])->name('produksi.home');
});

// ROUTE UNTUK DASHBOARD HALAMAN MASING MASING ROLE
Route::get('/admin', function () {
    return view('admin.home');
})->middleware(['auth', 'role:admin']);
Route::get('/barang/home-page', function () {
    return view('barang.home');
})->middleware(['auth', 'role:Manajemen barang']);

Route::get('/produksi/home-page', function () {
    return view('produksi.home');
})->middleware(['auth', 'role:Manajemen produksi']);
//ROUTE UNTUK LOG-OUT
Route::get('/logout', [AuthenticatedSessionController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');
