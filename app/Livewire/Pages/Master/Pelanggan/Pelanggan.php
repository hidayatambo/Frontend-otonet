<?php

namespace App\Livewire\Pages\Master\Pelanggan;

use Livewire\Component;

class Pelanggan extends Component
{
    public $activePage;
    public $subActivePage;

    public $detail = [];

    public $supplierId;

    public $isOpen = false;
    public $headers = ['Nama Pelanggan' , 'Alamat', 'Telp', 'HP', 'Email','Kontak', 'Actions'];
    public $rows = [];
    public $cell = ['Kode' , 'Nama', 'Divisi', 'Brand', 'Kode 2','Qty', 'Harga Beli','Harga Jual', 'Status'];
    public $sortField;
    public $sortDirection = 'asc';

    public $apiEndpoint, $token;

    public function render()
    {
        return view('livewire.pages.master.pelanggan.pelanggan')->layout('layouts.dashboard')->title('Master Barang');
    }

    public function __construct()
    {
        $this->apiEndpoint = 'http://be.techthinkhub.id/api/';;
        $this->token = session('token'); // Retrieve the token from the session
        // dd($this->token);

    }

    public function mount()
    {
        $this->setActivePages();
        $this->dispatch('breadcrumb', $this->activePage, $this->subActivePage);
        $this->dispatch('pages', $this->activePage);
        $this->dispatch('sub-pages', $this->subActivePage);
        $this->rows = [];
    }
    public function setActivePages()
    {
        $this->activePage = 'master';
        $this->subActivePage = 'pelanggan';
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

}
