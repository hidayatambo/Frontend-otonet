<?php

namespace App\Livewire\Pages\Master\Barang;

use Livewire\Component;

class Barang extends Component
{
    public $activePage= 'master';
    public $subActivePage= 'barang';

    public $detail = [];

    public $supplierId;

    public $isOpen = false;
    public $headers = ['Kode' , 'Nama', 'Divisi', 'Brand', 'Kode 2','Qty', 'Harga Beli','Harga Jual', 'Status', 'Action'];
    public $rows = [];
    public $cell = ['Kode' , 'Nama', 'Divisi', 'Brand', 'Kode 2','Qty', 'Harga Beli','Harga Jual', 'Status'];
    public $sortField;
    public $sortDirection = 'asc';
    #[Title('Master Barang')]
    public function render()
    {
        return view('livewire.pages.master.barang.barang')->layout('layouts.dashboard');
    }

    public function mount()
    {
        $this->setActivePages();

        // $this->dispatch('navigate-to', $this->activePage, $this->subActivePage);

        $this->dispatch('breadcrumb', $this->activePage, $this->subActivePage);
        $this->dispatch('pages', $this->activePage);
        $this->dispatch('sub-pages', $this->subActivePage);
        $this->rows = [];
    }
    public function setActivePages()
    {
        $this->activePage = 'master';
        $this->subActivePage = 'barang';
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
