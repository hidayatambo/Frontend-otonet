<?php

namespace App\Livewire\Pages\Master\Tipe;

use Livewire\Component;
use App\Services\OtonetBackendServices\Merk as merkService;
class Tipe extends Component
{
    public $activePage;
    public $subActivePage;

    public $headers = ['Nama Merk' , 'Nama Tipe', 'Created By','Actions'];

    public $apiEndpoint, $token;
    public $merk = [];

    public function __construct()
    {
        $this->apiEndpoint = 'https://be.techthinkhub.id/api/';
        $this->token = session('token'); // Retrieve the token from the session
    }

    public function render()
    {
        return view('livewire.pages.master.tipe.tipe')
        ->layout('layouts.coloradmin')
        ->title('Master Tipe');
    }

    public function mount()
    {
        $this->setActivePages();
        $this->dispatch('breadcrumb', $this->activePage, $this->subActivePage);
        $this->dispatch('pages', $this->activePage);
        $this->dispatch('sub-pages', $this->subActivePage);
        $this->getMerk();
    }

    public function setActivePages()
    {
        $this->activePage = 'master';
        $this->subActivePage = 'tipe';
    }

    public function getMerk()
    {
        $service = new merkService;
        $this->merk = $service->show();
    }
}
