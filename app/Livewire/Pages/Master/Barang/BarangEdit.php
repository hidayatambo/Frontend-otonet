<?php

namespace App\Livewire\Pages\Master\Barang;

use Livewire\Component;
use App\Services\OtonetBackendServices\Tipe;
use App\Services\OtonetBackendServices\Satuan;
use App\Services\OtonetBackendServices\DivisiSparepart;
use App\Services\OtonetBackendServices\Barang;

class BarangEdit extends Component
{
    public $activePage;
    public $subActivePage;

    public $apiEndpoint, $token;
    public $tipe, $satuan, $divisi_sparepart, $barang, $barangId;

    public function __construct()
    {
        $this->apiEndpoint = 'https://be.techthinkhub.id/api/';
        $this->token = session('token'); // Retrieve the token from the session
    }
    
    public function render()
    {
        return view('livewire.pages.master.barang.barang-edit')
        ->layout('layouts.dashboard')
        ->title('Master Barang Edit');
    }
    public function mount()
    {
        $this->setActivePages();
        $this->dispatch('breadcrumb', $this->activePage, $this->subActivePage);
        $this->dispatch('pages', $this->activePage);
        $this->dispatch('sub-pages', $this->subActivePage);
        $this->getSatuan();
        $this->getTipe();
        $this->getNamaDivisiSparepart();
        $this->getDetailBarang($this->barangId);
        // dd($this->divisi_sparepart);
    }
    public function setActivePages()
    {
        $this->activePage = 'master';
        $this->subActivePage = 'barang';
    }

    public function getNamaDivisiSparepart()
    {
        try {
            $divisi_sparepart_service = new DivisiSparepart();

            $this->divisi_sparepart = $divisi_sparepart_service->show();
            // dd($this->divisi_sparepart);
       
            // if (isset($this->divisi_sparepart['error']) || $this->divisi_sparepart === null || $this->divisi_sparepart['code'] === 401) {
                // Redirect to the login page
                // return redirect('auth/login');
            // }
            return $this->divisi_sparepart;
        } catch (\Exception $e) {
            return ['error' => 'Exception', 'message' => $e->getMessage()];
        }
    }

    public function getTipe()
    {
        try {
            $tipeService = new Tipe();
            $this->tipe = $tipeService->show();
            
            return $this->tipe;
        } catch (\Exception $e) {
            return redirect('auth/login');
        }
    }
    public function getSatuan()
    {
        try {
            $satuanService = new Satuan();
            $this->satuan = $satuanService->show();

            return $this->satuan;
        } catch (\Exception $e) {
            return redirect('auth/login');
        }
    }
    public function getDetailBarang(int $barangId)
    {
        try {
            $barangService = new Barang();
            $barang = $barangService->detail( $barangId);
            $this->barang = $barang['data'];
            // dd($this->barang['data']);
            // return $this->barang['data'];
        } catch (\Exception $e) {
            return redirect('auth/login');
        }
    }
}
