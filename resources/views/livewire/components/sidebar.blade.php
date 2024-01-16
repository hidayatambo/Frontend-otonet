<nav class="sidebar-main">
    <div class="left-arrow disabled" id="left-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="feather feather-arrow-left">
            <line x1="19" y1="12" x2="5" y2="12"></line>
            <polyline points="12 19 5 12 12 5"></polyline>
        </svg></div>
    <div id="sidebar-menu">
        <ul class="sidebar-links" id="simple-bar" style="height: calc(100vh - 155px);" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                            <div class="simplebar-content" style="padding: 0px;">
                                <li class="back-btn">
                                    <a href="https://demo3.otonet.co.id" ><img
                                            class="img-fluid"
                                            src="https://demo3.otonet.co.id/assets/images/logo/logo-icon.png"
                                            alt=""></a>
                                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                            aria-hidden="true"></i></div>
                                </li>

                                <li class="sidebar-main-title">
                                </li>
                                <li class="sidebar-list cursor-pointer">
                                        <a class="sidebar-link sidebar-title {{ $activePage == 'master' ? 'active' : '' }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-database">
                                            <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                            <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                        </svg>
                                        <span >Master</span>
                                        <div class="according-menu"><i class="fa fa-angle-down"></i></div>
                                    </a>
                                    <ul class="sidebar-submenu" style="{{ $activePage !== 'master' ? 'display:none' : '' }}">
                                        <li><a wire:navigate class="{{ $subActivePage == 'supplier' ? 'active' : '' }}" href="{{ url('master/supplier') }}">Supplier</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'pelanggan' ? 'active' : '' }}"  href="{{ url('master/pelanggan') }}" >Pelanggan</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'barang' ? 'active' : '' }}"  href="{{ url('master/barang') }}">Barang</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'divisi_jasa' ? 'active' : '' }}"  href="{{ url('master/divisi_jasa') }}">Divisi Jasa</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'divisi_sparepart' ? 'active' : '' }}"  href="{{ url('master/divisi_sparepart') }}">Divisi Sparepart</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'jasa_service' ? 'active' : '' }}"  href="{{ url('master/jasa_service') }}">Jasa Service</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'merk' ? 'active' : '' }}"  href="{{ url('master/merk') }}">Merk</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'tipe' ? 'active' : '' }}" href="{{ url('master/tipe') }}">Tipe</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'satuan' ? 'active' : '' }}" href="{{ url('master/satuan') }}">Satuan</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'paket' ? 'active' : '' }}" href="{{ url('master/paket') }}">Paket</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'jenis_service' ? 'active' : '' }}" href="{{ url('master/jenis_service') }}">Jenis Service</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'akses_menu' ? 'active' : '' }}" href="{{ url('master/akses_menu') }}">Akses Menu</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'karyawan' ? 'active' : '' }}" href="{{ url('master/karyawan') }}">Karyawan</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'paket_member' ? 'active' : '' }}" href="{{ url('master/paket_member') }}">Paket Member</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'vendor' ? 'active' : '' }}" href="{{ url('master/vendor') }}">Vendor</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'kontrak' ? 'active' : '' }}" href="{{ url('master/kontrak') }}">Kontrak</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list cursor-pointer">
                                    <a class="sidebar-link sidebar-title {{ $activePage == 'gudang' ? 'active' : '' }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-truck">
                                            <rect x="1" y="3" width="15" height="13"></rect>
                                            <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                                            <circle cx="5.5" cy="18.5" r="2.5"></circle>
                                            <circle cx="18.5" cy="18.5" r="2.5"></circle>
                                        </svg>
                                        <span >Gudang</span>
                                        <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                                    </a>
                                    <ul class="sidebar-submenu" style="{{ $activePage !== 'gudang' ? 'display:none' : '' }}">

                                        <li><a wire:navigate class="{{ $subActivePage == 'pembelian' ? 'active' : '' }}" href="{{ url('gudang/pembelian') }}">Pembelian</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'stock_opname' ? 'active' : '' }}" href="{{ url('gudang/stock_opname') }}">Stock Opname</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'po_pembelian' ? 'active' : '' }}" href="{{ url('gudang/po_pembelian') }}">PO Pembelian</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'pr_pembelian' ? 'active' : '' }}" href="{{ url('gudang/pr_pembelian') }}">PR Pembelian</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'pengeluaran_bahan' ? 'active' : '' }}" href="{{ url('gudang/pengeluaran_bahan') }}">Pengeluaran Bahan</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'kartu_stok' ? 'active' : '' }}" href="{{ url('gudang/kartu_stok') }}">Kartu Stok</a></li>

                                    </ul>
                                </li>
                                <li class="sidebar-list cursor-pointer">
                                    <a class="sidebar-link sidebar-title {{ $activePage == 'penjualan' ? 'active' : '' }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-shopping-bag">
                                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                            <line x1="3" y1="6" x2="21" y2="6"></line>
                                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                                        </svg>
                                        <span >Penjualan</span>
                                        <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                                    </a>
                                    <ul class="sidebar-submenu" style="{{ $activePage !== 'penjualan' ? 'display:none' : '' }}">
                                        <li><a wire:navigate class="{{ $subActivePage == 'toko' ? 'active' : '' }}" href="{{ url('penjualan/toko') }}">Toko</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'nota_bengkel' ? 'active' : '' }}" href="{{ url('penjualan/nota_bengkel') }}">Nota Bengkel</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'retur_toko' ? 'active' : '' }}" href="{{ url('penjualan/retur_toko') }}">Retur Toko</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list cursor-pointer">
                                    <a class="sidebar-link sidebar-title {{ $activePage == 'kasir' ? 'active' : '' }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-dollar-sign">
                                            <line x1="12" y1="1" x2="12" y2="23"></line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                        </svg>
                                        <span >Kasir</span>
                                        <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                                    </a>
                                    <ul class="sidebar-submenu" style="{{ $activePage !== 'kasir' ? 'display:none' : '' }}">
                                        <li><a wire:navigate class="{{ $subActivePage == 'invoice_service' ? 'active' : '' }}" href="{{ url('kasir/invoice_service') }}">Invoice Services</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'bukti_bayar' ? 'active' : '' }}" href="{{ url('kasir/bukti_bayar') }}">Bukti Bayar</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'form_pengajuan' ? 'active' : '' }}" href="{{ url('kasir/form_pengajuan') }}">Form Pengajuan</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'bayar_supplier' ? 'active' : '' }}" href="{{ url('kasir/bayar_supplier') }}">Bayar Supplier</a></li>

                                    </ul>
                                </li>
                                <li class="sidebar-list cursor-pointer">
                                    <a class="sidebar-link sidebar-title {{ $activePage == 'front_office' ? 'active' : '' }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-bookmark">
                                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                        </svg>
                                        <span >Front Office</span>
                                        <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                                    </a>
                                    <ul class="sidebar-submenu" style="{{ $activePage !== 'front_office' ? 'display:none' : '' }}">

                                        <li><a  wire:navigate class="{{ $subActivePage == 'service' ? 'active' : '' }}" href="{{ url('front_office/service') }}">Servis</a></li>
                                        <li><a  wire:navigate class="{{ $subActivePage == 'membership' ? 'active' : '' }}" href="{{ url('front_office/membership') }}">Membership</a></li>
                                        <li><a  wire:navigate class="{{ $subActivePage == 'history_kendaraan' ? 'active' : '' }}" href="{{ url('front_office/history_kendaraan') }}">History Kendaraan</a></li>
                                        <li><a  wire:navigate class="{{ $subActivePage == 'cuci' ? 'active' : '' }}" href="{{ url('front_office/cuci') }}">Cuci</a></li>
                                        <li><a  wire:navigate class="{{ $subActivePage == 'update_km' ? 'active' : '' }}" href="{{ url('front_office/update_km') }}">Update KM</a></li>
                                        <li><a  wire:navigate class="{{ $subActivePage == 'order_pekerjaan_luar' ? 'active' : '' }}" href="{{ url('front_office/order_pekerjaan_luar') }}">Order Pekerjaan Luar</a></li>
                                        <li><a  wire:navigate class="{{ $subActivePage == 'order_pembelian_part' ? 'active' : '' }}" href="{{ url('front_office/order_pembelian_part') }}">Order Pembelian Part</a></li>

                                    </ul>
                                </li>
                                <li class="sidebar-list cursor-pointer">
                                    <a class="sidebar-link sidebar-title {{ $activePage == 'laporan' ? 'active' : '' }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
                                            <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                            <polyline points="13 2 13 9 20 9"></polyline>
                                        </svg>
                                        <span >Laporan</span>
                                        <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                                    </a>
                                    <ul class="sidebar-submenu" style="{{ $activePage !== 'laporan' ? 'display:none' : '' }}">
                                        <li><a wire:navigate class="{{ $subActivePage == 'laporan_toko' ? 'active' : '' }}" href="{{ url('laporan/toko') }}">Laporan Toko</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'laporan_pembelian' ? 'active' : '' }}" href="{{ url('laporan/pembelian') }}">Laporan Pembelian</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'laporan_service' ? 'active' : '' }}" href="{{ url('laporan/service') }}">Laporan Service</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'laporan_kasir' ? 'active' : '' }}" href="{{ url('laporan/kasir') }}">Laporan Kasir</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'laporan_unit_entry' ? 'active' : '' }}" href="{{ url('laporan/unit_entry') }}">Laporan Unit Entry</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'laporan_status_PKB' ? 'active' : '' }}" href="{{ url('laporan/status_pkb') }}">Laporan Status PKB</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'laporan_nota_bengkel' ? 'active' : '' }}" href="{{ url('laporan/nota_bengkel') }}">Laporan Nota Bengkel</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'laporan_unit_cust' ? 'active' : '' }}" href="{{ url('laporan/unit_cust') }}">Laporan Unit Cust</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'laporan_pkb' ? 'active' : '' }}" href="{{ url('laporan/pkb') }}">Laporan PKB</a></li>
                                        <li><a wire:navigate class="{{ $subActivePage == 'laporan_stok' ? 'active' : '' }}" href="{{ url('laporan/stok') }}">Laporan Stok</a></li>

                                    </ul>
                                </li>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: auto; height: 886px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar"
                    style="height: 755px; display: block; transform: translate3d(0px, 0px, 0px);"></div>
            </div>
        </ul>
    </div>
    <div class="right-arrow" id="right-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="feather feather-arrow-right">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
        </svg></div>
</nav>
