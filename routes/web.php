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
// Route::get('/application_unit/{unit}', App\Livewire\Pages\Landing\Page::class);

Route::middleware(['token.auth'])->prefix('master')->group(function () {
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
