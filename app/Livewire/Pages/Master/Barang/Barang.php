<?php

namespace App\Livewire\Pages\Master\Barang;

use Livewire\Component;
use App\Services\OtonetBackendServices\DivisiSparepart;
use App\Services\OtonetBackendServices\Barang as BarangService;


class Barang extends Component
{
    public $activePage;
    public $subActivePage;

    public $headers = ['Kode' , 'Nama', 'Divisi', 'Brand', 'Kode 2','Qty', 'Harga Beli','Harga Jual', 'Status', 'Action'];

    public $apiEndpoint, $token;

    public $divisi_sparepart;

    public function __construct()
    {
        $this->apiEndpoint = 'https://be.techthinkhub.id/api/';;
        $this->token = session('token'); // Retrieve the token from the session
    }

    public function render()
    {
        return view('livewire.pages.master.barang.barang')->layout('layouts.coloradmin')->title('Master Barang');
    }

    public function mount()
    {
        $this->setActivePages();
        $this->dispatch('breadcrumb', $this->activePage, $this->subActivePage);
        $this->dispatch('pages', $this->activePage);
        $this->dispatch('sub-pages', $this->subActivePage);
        $this->getNamaDivisiSparepart();
    }
    public function setActivePages()
    {
        $this->activePage = 'master';
        $this->subActivePage = 'barang';
    }
    public function getNamaDivisiSparepart()
    {
        try {
            $divisi_sparepart_service = new BarangService();

            $this->divisi_sparepart = $divisi_sparepart_service->getDivisiSparepart();
          
            return $this->divisi_sparepart;
        } catch (\Exception $e) {
            return redirect('auth/login');
        }
    }
}
