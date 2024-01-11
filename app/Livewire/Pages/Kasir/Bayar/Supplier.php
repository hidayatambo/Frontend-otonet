<?php

namespace App\Livewire\Pages\Kasir\Bayar;

use Livewire\Component;

class Supplier extends Component
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
        return view('livewire.pages.kasir.bayar.supplier')
        ->layout('layouts.dashboard')
        ->title('Kasir Bayar Supplier');
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
        $this->activePage = 'kasir';
        $this->subActivePage = 'bayar_supplier';
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
