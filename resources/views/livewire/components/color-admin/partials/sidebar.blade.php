<!-- BEGIN menu -->
<div class="menu">
    <div class="menu-profile">
        <a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile"
            data-target="#appSidebarProfileMenu">
            <div class="menu-profile-cover with-shadow"></div>
            <div class="menu-profile-image">
                <img src="{{ asset('coloradmin/img/user/user-13.jpg') }}" alt="" />
            </div>
            <div class="menu-profile-info">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        Sean Ngu
                    </div>
                    <div class="menu-caret ms-auto"></div>
                </div>
                <small>Frontend developer</small>
            </div>
        </a>
    </div>
    <div id="appSidebarProfileMenu" class="collapse">
        <div class="menu-item pt-5px">
            <a href="javascript:;" class="menu-link">
                <div class="menu-icon"><i class="fa fa-cog"></i></div>
                <div class="menu-text">Settings</div>
            </a>
        </div>
        <div class="menu-item">
            <a href="javascript:;" class="menu-link">
                <div class="menu-icon"><i class="fa fa-pencil-alt"></i></div>
                <div class="menu-text"> Send Feedback</div>
            </a>
        </div>
        <div class="menu-item pb-5px">
            <a href="javascript:;" class="menu-link">
                <div class="menu-icon"><i class="fa fa-question-circle"></i></div>
                <div class="menu-text"> Helps</div>
            </a>
        </div>
        <div class="menu-divider m-0"></div>
    </div>
    <div class="menu-header">Navigation</div>
    <div class="menu-item cursor-pointer {{ $activePage === 'dashboard' ? 'active expand' : '' }}">
        <a href="{{ url('dashboard') }}" class="menu-link">
            <div class="menu-icon">
                <i class="fa fa-sitemap"></i> </div>
            <div class="menu-text">Dashboard</div>
        </a>
    </div>
    <div class="menu-item cursor-pointer has-sub {{ $activePage === 'master' ? 'active expand' : '' }}">
        <a class="menu-link">
            <div class="menu-icon">
                <i class="fa fa-hdd"></i>
            </div>
            <div class="menu-text">Master</div>
            <div class="menu-caret"></div>
        </a>
        <div class="menu-submenu">
            <div class="menu-item {{ $subActivePage == 'supplier' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('master/supplier') }}">
                    <div class="menu-text">Supplier</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'pelanggan' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('master/pelanggan') }}">
                    <div class="menu-text">Pelanggan</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'barang' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('master/barang') }}">
                    <div class="menu-text">Barang</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'divisi_jasa' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('master/divisi_jasa') }}">
                    <div class="menu-text">Divisi Jasa</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'divisi_sparepart' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('master/divisi_sparepart') }}">
                    <div class="menu-text">Divisi Sparepart</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'jasa_service' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('master/jasa_service') }}">
                    <div class="menu-text">Jasa Service</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'merk' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('master/merk') }}">
                    <div class="menu-text">Merk</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'tipe' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('master/tipe') }}">
                    <div class="menu-text">Tipe</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'satuan' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('master/satuan') }}">
                    <div class="menu-text">Satuan</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'paket' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('master/paket') }}">
                    <div class="menu-text">Paket</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'divisi_sparepart' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('master/jenis_service') }}">
                    <div class="menu-text">Jenis Service</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'akses_menu' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('master/akses_menu') }}">
                <div class="menu-text">Akses Menu</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'karyawan' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('master/karyawan') }}">
                    <div class="menu-text">Karyawan</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'paket_member' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('master/paket_member') }}">
                <div class="menu-text">Paket Member</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'vendor' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('master/vendor') }}">
                    <div class="menu-text">Vendor</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'kontrak' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('master/kontrak') }}">
                    <div class="menu-text">Kontrak</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'cabang' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('master/cabang') }}">
                    <div class="menu-text">Cabang</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'gudang' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('master/gudang') }}">
                    <div class="menu-text">Gudang</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'flat_rate' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('master/flat_rate') }}">
                    <div class="menu-text">Flat Rate</div>
                </a>
            </div>
        </div>
    </div>
    {{-- Gudang --}}
    <div class="menu-item cursor-pointer has-sub {{ $activePage === 'gudang' ? 'active expand' : '' }}">
        <a class="menu-link">
            <div class="menu-icon">
                <i class="fa fa-hdd"></i>
            </div>
            <div class="menu-text">Gudang</div>
            <div class="menu-caret"></div>
        </a>
        <div class="menu-submenu">
            <div class="menu-item {{ $subActivePage == 'pembelian' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('gudang/pembelian') }}">
                    <div class="menu-text">Pembelian</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'stock_opname' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('gudang/stock_opname') }}">
                    <div class="menu-text">Stock Opname</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'po_pembelian' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('gudang/po_pembelian') }}">
                    <div class="menu-text">PO Pembelian</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'pr_pembelian' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('gudang/pr_pembelian') }}">
                    <div class="menu-text">PR Pembelian</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'pengeluaran_bahan' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('gudang/pengeluaran_bahan') }}">
                    <div class="menu-text">Pengeluaran Bahan</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'kartu_stok' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('gudang/kartu_stok') }}">
                    <div class="menu-text">Kartu Stok</div>
                </a>
            </div>
        </div>
    </div>
    {{-- END Gudang --}}
    {{-- Penjualan --}}
    <div class="menu-item cursor-pointer has-sub {{ $activePage === 'penjualan' ? 'active expand' : '' }}">
        <a class="menu-link">
            <div class="menu-icon">
                <i class="fa fa-hdd"></i>
            </div>
            <div class="menu-text">Penjualan</div>
            <div class="menu-caret"></div>
        </a>
        <div class="menu-submenu">
            <div class="menu-item {{ $subActivePage == 'toko' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('penjualan/toko') }}">
                    <div class="menu-text">Toko</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'nota_bengkel' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('penjualan/nota_bengkel') }}">
                    <div class="menu-text">Nota Bengkel</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'retur_toko' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('penjualan/retur_toko') }}">
                    <div class="menu-text">Retur Toko</div>
                </a>
            </div>
        </div>
    </div>
    {{-- END Penjual --}}
    {{-- Kasir --}}
    <div class="menu-item cursor-pointer has-sub {{ $activePage === 'kasir' ? 'active expand' : '' }}">
        <a class="menu-link">
            <div class="menu-icon">
                <i class="fa fa-hdd"></i>
            </div>
            <div class="menu-text">Kasir</div>
            <div class="menu-caret"></div>
        </a>
        <div class="menu-submenu">
            <div class="menu-item {{ $subActivePage == 'invoice_service' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('kasir/invoice_service') }}">
                    <div class="menu-text">Invoice Services</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'bukti_bayar' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('kasir/bukti_bayar') }}">
                    <div class="menu-text">Bukti Bayar</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'form_pengajuan' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('kasir/form_pengajuan') }}">
                    <div class="menu-text">>Form Pengajuan</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'bayar_supplier' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('kasir/bayar_supplier') }}">
                    <div class="menu-text">>Bayar Supplier</div>
                </a>
            </div>
        </div>
    </div>
    {{-- END Kasir --}}
    {{-- Front Office --}}
    <div class="menu-item cursor-pointer has-sub {{ $activePage === 'front_office' ? 'active expand' : '' }}">
        <a class="menu-link">
            <div class="menu-icon">
                <i class="fa fa-hdd"></i>
            </div>
            <div class="menu-text">Front Office</div>
            <div class="menu-caret"></div>
        </a>
        <div class="menu-submenu">
            <div class="menu-item {{ $subActivePage == 'booking_service' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('front_office/booking_service') }}">
                    <div class="menu-text">Booking Service</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'emergency_service' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('front_office/emergency_service') }}">
                    <div class="menu-text">Emergency Service</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'service' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('front_office/service') }}">
                    <div class="menu-text">>Service</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'membership' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('front_office/membership') }}">
                    <div class="menu-text">>Membership</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'history_kendaraan' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('front_office/history_kendaraan') }}">
                    <div class="menu-text">History Kendaraan</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'cuci' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('front_office/cuci') }}">
                    <div class="menu-text">>Cuci</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'membership' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('front_office/membership') }}">
                    <div class="menu-text">>Update KM</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'order_pekerjaan_luar' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('front_office/order_pekerjaan_luar') }}">
                    <div class="menu-text">>Order Pekerjaan Luar</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'order_pembelian_part' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('front_office/order_pembelian_part') }}">
                    <div class="menu-text">>Order Pembelian Part</div>
                </a>
            </div>
        </div>
    </div>
    {{-- END Front Office --}}
    {{-- Laporan --}}
    <div class="menu-item cursor-pointer has-sub {{ $activePage === 'laporan' ? 'active expand' : '' }}">
        <a class="menu-link">
            <div class="menu-icon">
                <i class="fa fa-hdd"></i>
            </div>
            <div class="menu-text">Laporan</div>
            <div class="menu-caret"></div>
        </a>
        <div class="menu-submenu">
            <div class="menu-item {{ $subActivePage == 'laporan_toko' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('laporan/toko') }}">
                    <div class="menu-text">Laporan Toko</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'laporan_pembelian' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('laporan/pembelian') }}">
                    <div class="menu-text">Laporan Pembelian</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'laporan_service' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('laporan/service') }}">
                    <div class="menu-text">>Laporan Service</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'laporan_kasir' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('laporan/kasir') }}">
                    <div class="menu-text">>Laporan Kasir</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'laporan_unit_entry' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('laporan/unit_entry') }}">
                    <div class="menu-text">Laporan Unit Entry</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'laporan_status_PKB' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('laporan/status_pkb') }}">
                    <div class="menu-text">>Laporan Status PKB</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'laporan_nota_bengkel' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('laporan/nota_bengkel') }}">
                    <div class="menu-text">>Laporan Nota Bengkel</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'laporan_unit_cust' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('laporan/unit_cust') }}">
                    <div class="menu-text">>Laporan Unit Cust</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'laporan_pkb' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('laporan/pkb') }}">
                    <div class="menu-text">>Laporan PKB</div>
                </a>
            </div>
            <div class="menu-item {{ $subActivePage == 'laporan_stok' ? 'active' : '' }}">
                <a wire:navigate class="menu-link" href="{{ url('laporan/stok') }}">
                    <div class="menu-text">>Laporan Stok</div>
                </a>
            </div>
        </div>
    </div>
    {{-- END Laporan --}}
    <!-- BEGIN minify-button -->
    <div class="menu-item d-flex">
        <a href="javascript:;" class="app-sidebar-minify-btn ms-auto d-flex align-items-center text-decoration-none"
            data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
    </div>
    <!-- END minify-button -->
</div>
<!-- END menu -->

