<?php

namespace App\Livewire\Pages\Master\Paket;

use Livewire\Component;
use App\Services\OtonetBackendServices\Paket;
use App\Services\OtonetBackendServices\PaketJasa;
use App\Services\OtonetBackendServices\PaketPart;
use Illuminate\Support\Facades\Crypt;

class DetailPaket extends Component
{
    public $activePage;
    public $subActivePage;
    public $apiEndpoint, $token;

    public $jenis_service;
    public $paketId, $kodePaket, $decrypt;

    public $paket, $paket_jasa, $paket_part = [];

    public function __construct()
    {
        $this->apiEndpoint = 'https://be.techthinkhub.id/api/';;
        $this->token = session('token'); // Retrieve the token from the session
    }

    public function render()
    {
        return view('livewire.pages.master.paket.detail-paket')
        ->layout('layouts.coloradmin')
        ->title('Master Paket');
    }

    public function mount()
    {
        
        $this->setActivePages();
        $this->dispatch('breadcrumb', $this->activePage, $this->subActivePage);
        $this->dispatch('pages', $this->activePage);
        $this->dispatch('sub-pages', $this->subActivePage);
        $this->getPaket();
        $this->getPaketJasa();
        $this->getPaketPart();
    }

    public function setActivePages()
    {
        $this->activePage = 'master';
        $this->subActivePage = 'paket';
    }

    public function getPaket()
    {
        
        try {
            $paket_service = new Paket;
            
            $this->paket = $paket_service->show( $this->paketId)['data'];
            $this->kodePaket = $this->paket['kode_paket'];
            // dd($this->kodePaket);
        } catch (\Exception $e) {
            // return redirect('auth/login');
        }
    }

    public function getPaketPart()
    {
        try {
            $paket_part_service = new PaketPart;
            $this->paket_part = $paket_part_service->search('kode_paket', $this->kodePaket)['data'];
        } catch (\Exception $e) {
            // return redirect('auth/login');
        }
    }
    public function getPaketJasa()
    {
        try {
            $paket_jasa_service = new PaketJasa;
            $this->paket_jasa = $paket_jasa_service->search('kode_paket', $this->kodePaket)['data'];
        } catch (\Exception $e) {
            // return redirect('auth/login');
        }
    }
}
