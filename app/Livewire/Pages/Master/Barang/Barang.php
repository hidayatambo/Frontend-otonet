<?php

namespace App\Livewire\Pages\Master\Barang;

use Livewire\Component;

class Barang extends Component
{
    public $activePage;
    public $subActivePage;

    public $headers = ['Kode' , 'Nama', 'Divisi', 'Brand', 'Kode 2','Qty', 'Harga Beli','Harga Jual', 'Status', 'Action'];

    public $apiEndpoint, $token;

    public function __construct()
    {
        $this->apiEndpoint = 'http://be.techthinkhub.id/api/';;
        $this->token = session('token'); // Retrieve the token from the session
    }

    public function render()
    {
        return view('livewire.pages.master.barang.barang')->layout('layouts.dashboard')->title('Master Barang');
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
        $this->subActivePage = 'barang';
    }
}
