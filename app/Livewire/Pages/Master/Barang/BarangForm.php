<?php

namespace App\Livewire\Pages\Master\Barang;

use Livewire\Component;
use App\Services\OtonetBackendServices\Tipe;
use App\Services\OtonetBackendServices\Satuan;
use App\Services\OtonetBackendServices\DivisiSparepart;
use Illuminate\Support\Facades\Http;

class BarangForm extends Component
{
    public $activePage;
    public $subActivePage;

    public $apiEndpoint, $token;
    public $tipe, $satuan, $divisi_sparepart;

    public function __construct()
    {
        $this->apiEndpoint = 'http://be.techthinkhub.id/api/';;
        $this->token = session('token'); // Retrieve the token from the session
    }
    
    public function render()
    {
        return view('livewire.pages.master.barang.barang-form')
        ->layout('layouts.dashboard')
        ->title('Master Barang Form');
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
            return redirect('auth/login');
        }
    }

    public function getTipe()
    {
        try {
            $tipeService = new Tipe();
            $this->tipe = $tipeService->show();
            // dd($this->tipe);
            // Check if the response includes an error key or if the response itself is null
            if (isset($this->tipe['error']) || $this->tipe === null) {
                // Redirect to the login page
                return redirect('auth/login');
            }
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

            // Check if the response includes an error key or if the response itself is null
            if (isset($this->satuan['error']) || $this->satuan === null) {
                // Redirect to the login page
                return redirect('auth/login');
            }
            return $this->satuan;
        } catch (\Exception $e) {
            return redirect('auth/login');
        }
    }
}
