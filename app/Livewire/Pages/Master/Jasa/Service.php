<?php

namespace App\Livewire\Pages\Master\Jasa;

use Livewire\Component;
use App\Services\OtonetBackendServices\DivisiJasa;

class Service extends Component
{
    public $activePage;
    public $subActivePage;

    public $headers = ['Kode' , 'Nama Jasa', 'Divisi', 'Biaya', 'Menit', 'Actions'];

    public $divisi_jasa;
    public $apiEndpoint, $token;

    public function __construct()
    {
        $this->apiEndpoint = 'https://be.techthinkhub.id/api/';
        $this->token = session('token'); // Retrieve the token from the session
    }

    public function render()
    {
        return view('livewire.pages.master.jasa.service')->layout('layouts.coloradmin')->title('Master | Jasa Service');
    }

    public function mount()
    {
        $this->setActivePages();
        $this->dispatch('breadcrumb', $this->activePage, $this->subActivePage);
        $this->dispatch('pages', $this->activePage);
        $this->dispatch('sub-pages', $this->subActivePage);
        $this->getDivisiJasa();
    }

    public function setActivePages()
    {
        $this->activePage = 'master';
        $this->subActivePage = 'jasa_service';
    }

    public function getDivisiJasa()
    {
        $service = new DivisiJasa;
        $this->divisi_jasa =  $service->show();
    }
}
