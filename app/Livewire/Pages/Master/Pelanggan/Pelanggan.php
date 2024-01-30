<?php

namespace App\Livewire\Pages\Master\Pelanggan;

use Livewire\Component;
use App\Services\OtonetBackendServices\Merk;
class Pelanggan extends Component
{
    public $activePage;
    public $subActivePage;

    public $headers = ['Nama Pelanggan' , 'Alamat', 'Telp', 'HP', 'Email','Kontak', 'Actions'];

    public $apiEndpoint, $token;

    public $merk = [];

    public function render()
    {
        return view('livewire.pages.master.pelanggan.pelanggan')->layout('layouts.coloradmin')->title('Master Barang');
    }

    public function __construct()
    {
        $this->apiEndpoint = 'http://be.techthinkhub.id/api/';;
        $this->token = session('token'); // Retrieve the token from the session
    }

    public function mount()
    {
        $this->getMerk();
        $this->setActivePages();
        $this->dispatch('breadcrumb', $this->activePage, $this->subActivePage);
        $this->dispatch('pages', $this->activePage);
        $this->dispatch('sub-pages', $this->subActivePage);
    }
    
    public function setActivePages()
    {
        $this->activePage = 'master';
        $this->subActivePage = 'pelanggan';
    }
    public function getMerk()
    {
        $merkService = new Merk;
        $this->merk = $merkService->show(); 
    }
}
