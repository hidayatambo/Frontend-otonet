<?php

namespace App\Livewire\Pages\Penjualan\Retur;

use Livewire\Component;

class Toko extends Component
{
    public $activePage;
    public $subActivePage;

    public $detail = [];

    public $supplierId;

    public $isOpen = false;
    public $headers = ['Kode' , 'Nama', 'Divisi', 'Brand', 'Kode 2','Qty', 'Harga Beli','Harga Jual', 'Status', 'Action'];
    public $rows = [];
    public $cell = ['Kode' , 'Nama', 'Divisi', 'Brand', 'Kode 2','Qty', 'Harga Beli','Harga Jual', 'Status'];
    public $sortField;
    public $sortDirection = 'asc';
    public function render()
    {
        return view('livewire.pages.penjualan.retur.toko')
        ->layout('layouts.dashboard')
        ->title('Penjualan Retur Toko');
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
        $this->activePage = 'penjualan';
        $this->subActivePage = 'retur_toko';
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