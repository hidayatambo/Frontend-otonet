<?php

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

/**
 * * Route For Authentication
 */
 Route::prefix('auth')->group(function () {
    Route::get('login', App\Livewire\Pages\Authentication\Login::class)->name('auth/login');
    Route::get('register', App\Livewire\Pages\Authentication\Register::class);
    Route::get('email_confirmation',function () {
        return view('livewire.pages.authentication.email-confirmaation');
    });
});

Route::get('/', App\Livewire\Pages\Authentication\SelectApplication::class);

Route::middleware(['token.auth'])->group(function () {

    /**
     * * Route For Dashboard
     */
    Route::get('/dashboard', App\Livewire\Pages\Dashboard\Dashboard::class);

    /**
     * * Route For Master
     */
    Route::prefix('master')->group(function () {
        Route::prefix('supplier')->group(function () {
            Route::get('/', App\Livewire\Pages\Master\Supplier\Supplier::class)->name('master/supplier');
            Route::get('datatable',  [App\Http\Controllers\Master\Supplier::class, 'datatable'])->name('master/supplier/datatable');
        });
        Route::prefix('barang')->group(function () {
            Route::get('/', App\Livewire\Pages\Master\Barang\Barang::class)->name('master/barang');
            

        });
        Route::prefix('pelanggan')->group(function () {
            Route::get('/', App\Livewire\Pages\Master\Pelanggan\Pelanggan::class)->name('master/pelanggan');
            Route::get('datatable',  [App\Http\Controllers\Master\Pelanggan::class, 'datatable'])->name('master/pelanggan/datatable');
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
            Route::get('datatable',  [App\Http\Controllers\Master\Merk::class, 'datatable'])->name('master/merk/datatable');
        });
        Route::prefix('tipe')->group(function () {
            Route::get('/', App\Livewire\Pages\Master\Tipe\Tipe::class)->name('master/tipe');
            Route::get('datatable',  [App\Http\Controllers\Master\Tipe::class, 'datatable'])->name('master/tipe/datatable');

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

    /**
     * * Route For Gudang
     */
    Route::prefix('gudang')->group(function () {
        Route::prefix('pembelian')->group(function () {
            Route::get('/', App\Livewire\Pages\Gudang\Pembelian\Pembelian::class)->name('gudang/pembelian');
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

    /**
     * * Route For Penjualan
     */
    Route::prefix('penjualan')->group(function () {
        Route::prefix('toko')->group(function () {
            Route::get('/', App\Livewire\Pages\Penjualan\Toko\Toko::class)->name('penjualan/toko');
        });
        Route::prefix('nota_bengkel')->group(function () {
            Route::get('/', App\Livewire\Pages\Penjualan\Nota\Bengkel::class)->name('penjualan/nota_bengkel');
        });
        Route::prefix('retur_toko')->group(function () {
            Route::get('/', App\Livewire\Pages\Penjualan\Retur\Toko::class)->name('penjualan/retur_toko');
        });
    });

    /**
     * * Route For Kasir
     */
    Route::prefix('kasir')->group(function () {
        Route::prefix('invoice_service')->group(function () {
            Route::get('/', App\Livewire\Pages\Kasir\Invoice\Service::class)->name('penjualan/invoice_service');
        });
        Route::prefix('bukti_bayar')->group(function () {
            Route::get('/', App\Livewire\Pages\Kasir\Bukti\Bayar::class)->name('penjualan/bukti_bayar');
        });
        Route::prefix('form_pengajuan')->group(function () {
            Route::get('/', App\Livewire\Pages\Kasir\Form\Pengajuan::class)->name('penjualan/form_pengajuan');
        });
        Route::prefix('bayar_supplier')->group(function () {
            Route::get('/', App\Livewire\Pages\Kasir\Bayar\Supplier::class)->name('penjualan/bayar_supplier');
        });
    });
    /**
     * * Route For Front Office
     */
    Route::prefix('front_office')->group(function () {
        Route::prefix('booking_service')->group(function () {
            Route::get('/', App\Livewire\Pages\Fo\BookingService\BookingService::class)->name('front_office/booking_service');
        });
        Route::prefix('emergency_service')->group(function () {
            Route::get('/', App\Livewire\Pages\Fo\EmergencyService\EmergencyService::class)->name('front_office_emergency_service');
        });
        Route::prefix('service')->group(function () {
            Route::get('/', App\Livewire\Pages\Fo\Service\Service::class)->name('front_office/service');
        });
        Route::prefix('membership')->group(function () {
            Route::get('/', App\Livewire\Pages\Fo\Membership\Membership::class)->name('front_office/membership');
        });
        Route::prefix('history_kendaraan')->group(function () {
            Route::get('/', App\Livewire\Pages\Fo\History\Kendaraan::class)->name('front_office/history_kendaraan');
        });
        Route::prefix('cuci')->group(function () {
            Route::get('/', App\Livewire\Pages\Fo\Cuci\Cuci::class)->name('front_office/cuci');
        });
        Route::prefix('update_km')->group(function () {
            Route::get('/', App\Livewire\Pages\Fo\Update\Km::class)->name('front_office/update_km');
        });
        Route::prefix('order_pekerjaan_luar')->group(function () {
            Route::get('/', App\Livewire\Pages\Fo\Order\PekerjaanLuar::class)->name('front_office/order_pekerjaan_luar');
        });
        Route::prefix('order_pembelian_part')->group(function () {
            Route::get('/', App\Livewire\Pages\Fo\Order\PembelianPart::class)->name('front_office/order_pembelian_part');
        });
    });

    /**
     * * Route For Laporan
     */
    Route::prefix('laporan')->group(function () {
        Route::prefix('toko')->group(function () {
            Route::get('/', App\Livewire\Pages\Laporan\Toko\Laporan::class)->name('laporan/toko');
        });
        Route::prefix('pembelian')->group(function () {
            Route::get('/', App\Livewire\Pages\Laporan\Pembelian\Laporan::class)->name('laporan/pembelian');
        });
        Route::prefix('service')->group(function () {
            Route::get('/', App\Livewire\Pages\Laporan\Service\Laporan::class)->name('laporan/service');
        });
        Route::prefix('kasir')->group(function () {
            Route::get('/', App\Livewire\Pages\Laporan\Kasir\Laporan::class)->name('laporan/kasir');
        });
        Route::prefix('unit_entry')->group(function () {
            Route::get('/', App\Livewire\Pages\Laporan\UnitEntry\Laporan::class)->name('laporan/unit_entry');
        });
        Route::prefix('status_pkb')->group(function () {
            Route::get('/', App\Livewire\Pages\Laporan\StatusPkb\Laporan::class)->name('laporan/status_pkb');
        });
        Route::prefix('nota_bengkel')->group(function () {
            Route::get('/', App\Livewire\Pages\Laporan\NotaBengkel\Laporan::class)->name('laporan/nota_bengkel');
        });
        Route::prefix('unit_cust')->group(function () {
            Route::get('/', App\Livewire\Pages\Laporan\UnitCust\Laporan::class)->name('laporan/unit_cust');
        });
        Route::prefix('pkb')->group(function () {
            Route::get('/', App\Livewire\Pages\Laporan\Pkb\Laporan::class)->name('laporan/pkb');
        });
        Route::prefix('stok')->group(function () {
            Route::get('/', App\Livewire\Pages\Laporan\Stok\Laporan::class)->name('laporan/stok');
        });
    });
});
