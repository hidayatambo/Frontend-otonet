<?php

namespace App\Livewire\Pages\Master\Paket;

use Livewire\Component;
use App\Services\OtonetBackendServices\JenisService as JenisServiceService;
class AddPaket extends Component
{
    public $activePage;
    public $subActivePage;

    public $headers = ['Kode' , 'Nama Paket', 'Total', 'Tipe Service', 'Actions'];
    public $apiEndpoint, $token;

    public $jenis_service;

    public function __construct()
    {
        $this->apiEndpoint = 'https://be.techthinkhub.id/api/';;
        $this->token = session('token'); // Retrieve the token from the session
    }

    public function render()
    {
        return view('livewire.pages.master.paket.add-paket')
        ->layout('layouts.dashboard')
        ->title('Master Paket');
    }

    public function mount()
    {
        $this->setActivePages();
        $this->dispatch('breadcrumb', $this->activePage, $this->subActivePage);
        $this->dispatch('pages', $this->activePage);
        $this->dispatch('sub-pages', $this->subActivePage);
        $this->getJenisService();
    }

    public function setActivePages()
    {
        $this->activePage = 'master';
        $this->subActivePage = 'paket';
    }

    public function getJenisService()
    {
        try {
            $jenis_service_service = new JenisServiceService();

            $this->jenis_service = $jenis_service_service->show();
        } catch (\Exception $e) {
            return redirect('auth/login');
        }
    }
}
