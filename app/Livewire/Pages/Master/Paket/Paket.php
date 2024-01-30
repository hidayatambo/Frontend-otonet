<?php

namespace App\Livewire\Pages\Master\Paket;

use Livewire\Component;

class Paket extends Component
{
    public $activePage;
    public $subActivePage;

    public $headers = ['Kode' , 'Nama Paket', 'Total', 'Tipe Service', 'Actions'];
    public $apiEndpoint, $token;

    public function __construct()
    {
        $this->apiEndpoint = 'https://be.techthinkhub.id/api/';;
        $this->token = session('token'); // Retrieve the token from the session
    }

    public function render()
    {
        return view('livewire.pages.master.paket.paket')
        ->layout('layouts.coloradmin')
        ->title('Master Paket');
    }

    public function mount()
    {
        $this->setActivePages();
        $this->dispatch('breadcrumb', $this->activePage, $this->subActivePage);
        $this->dispatch('pages', $this->activePage);
        $this->dispatch('sub-pages', $this->subActivePage);
    }

    public function setActivePages()
    {
        $this->activePage = 'master';
        $this->subActivePage = 'paket';
    }
}
