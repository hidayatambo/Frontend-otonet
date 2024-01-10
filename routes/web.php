<?php

use Illuminate\Support\Facades\Route;

/**
 * * Route For Authentication
 */


Route::prefix('auth')->group(function () {
    Route::get('login', App\Livewire\Pages\Authentication\Login::class)->name('auth/login');
    Route::get('register', App\Livewire\Pages\Authentication\Register::class);


});
Route::get('email_confirmation', App\Livewire\Pages\Authentication\EmailConfirmaation::class);
Route::middleware(['token.auth'])->group(function () {
    Route::get('/dashboard', App\Livewire\Pages\Dashboard\Dashboard::class);
});

Route::get('/', App\Livewire\Pages\Authentication\SelectApplication::class);

Route::middleware(['token.auth'])->group(function () {
    Route::prefix('master')->group(function () {
        Route::prefix('supplier')->group(function () {
            Route::get('/', App\Livewire\Pages\Master\Supplier\Supplier::class)->name('master/supplier');
        });
        Route::prefix('barang')->group(function () {
            Route::get('/', App\Livewire\Pages\Master\Barang\Barang::class)->name('master/barang');
        });
        Route::prefix('pelanggan')->group(function () {
            Route::get('/', App\Livewire\Pages\Master\Pelanggan\Pelanggan::class)->name('master/pelanggan');
        });
        Route::prefix('divisi_jasa')->group(function () {
            Route::get('/', App\Livewire\Pages\Master\Divisi\Jasa::class)->name('master/divisi_jasa');
        });
        Route::prefix('divisi_sparepart')->group(function () {
            Route::get('/', App\Livewire\Pages\Master\Divisi\Sparepart::class)->name('master/divisi_sparepart');
        });
        Route::prefix('jasa_service')->group(function () {
            Route::get('/', App\Livewire\Pages\Master\Jasa\Service::class)->name('master/jasa_service');
        });
        Route::prefix('merk')->group(function () {
            Route::get('/', App\Livewire\Pages\Master\Merk\Merk::class)->name('master/merk');
        });
        Route::prefix('tipe')->group(function () {
            Route::get('/', App\Livewire\Pages\Master\Tipe\Tipe::class)->name('master/tipe');
        });
        Route::prefix('satuan')->group(function () {
            Route::get('/', App\Livewire\Pages\Master\Satuan\Satuan::class)->name('master/satuan');
        });
        Route::prefix('paket')->group(function () {
            Route::get('/', App\Livewire\Pages\Master\Paket\Paket::class)->name('master/paket');
        });
        Route::prefix('jenis_service')->group(function () {
            Route::get('/', App\Livewire\Pages\Master\Jenis\Service::class)->name('master/jenis_service');
        });
        Route::prefix('akses_menu')->group(function () {
            Route::get('/', App\Livewire\Pages\Master\Akses\Menu::class)->name('master/akses_menu');
        });
        Route::prefix('akses_menu')->group(function () {
            Route::get('/', App\Livewire\Pages\Master\Akses\Menu::class)->name('master/akses_menu');
        });
        Route::prefix('karyawan')->group(function () {
            Route::get('/', App\Livewire\Pages\Master\Karyawan\Karyawan::class)->name('master/karyawan');
        });
        Route::prefix('paket_member')->group(function () {
            Route::get('/', App\Livewire\Pages\Master\Paket\Member::class)->name('master/paket_member');
        });
        Route::prefix('vendor')->group(function () {
            Route::get('/', App\Livewire\Pages\Master\Vendor\Vendor::class)->name('master/vendor');
        });
        Route::prefix('kontrak')->group(function () {
            Route::get('/', App\Livewire\Pages\Master\Kontrak\Kontrak::class)->name('master/kontrak');
        });
    });
    Route::prefix('gudang')->group(function () {
        Route::prefix('pembelian')->group(function () {
            Route::get('/', App\Livewire\Pages\Gudang\Pembelian\Pembelian::class)->name('gudang/supplier');
        });
        Route::prefix('stock_opname')->group(function () {
            Route::get('/', App\Livewire\Pages\Gudang\Stock\Opname::class)->name('gudang/stock_opname');
        });
        Route::prefix('po_pembelian')->group(function () {
            Route::get('/', App\Livewire\Pages\Gudang\Po\Pembelian::class)->name('gudang/po_pembelian');
        });
        Route::prefix('pr_pembelian')->group(function () {
            Route::get('/', App\Livewire\Pages\Gudang\Pr\Pembelian::class)->name('gudang/pr_pembelian');
        });
        Route::prefix('pengeluaran_bahan')->group(function () {
            Route::get('/', App\Livewire\Pages\Gudang\Pengeluaran\Bahan::class)->name('gudang/pengeluaran_bahan');
        });
        Route::prefix('kartu_stok')->group(function () {
            Route::get('/', App\Livewire\Pages\Gudang\Kartu\Stok::class)->name('gudang/kartu_stok');
        });
    });
});





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

// Route::get('/', function () {
//     return view('welcome');
// });
