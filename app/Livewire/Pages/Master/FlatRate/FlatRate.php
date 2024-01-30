<?php

namespace App\Livewire\Pages\Master\FlatRate;

use Livewire\Component;

class FlatRate extends Component
{
    public $activePage;
    public $subActivePage;

    public $headers = ['Nama Merk' , 'Created By', 'Actions'];
   
    public $apiEndpoint, $token;

    public function __construct()
    {
        $this->apiEndpoint = 'https://be.techthinkhub.id/api/';
        $this->token = session('token'); // Retrieve the token from the session
    }

    public function render()
    {
        return view('livewire.pages.master.flat-rate.flat-rate')
        ->layout('layouts.coloradmin')
        ->title('Master Gudang');
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
        $this->subActivePage = 'flat_rate';
    }
}
