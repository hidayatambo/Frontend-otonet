<?php

namespace App\Livewire\Pages\Master\Satuan;

use Livewire\Component;

class Satuan extends Component
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
        return view('livewire.pages.master.satuan.satuan')
        ->layout('layouts.dashboard')
        ->title('Master Satuan');
    }

    public function mount()
    {
        $this->setActivePages();
        $this->dispatch('breadcrumb', $this->activePage, $this->subActivePage);
        $this->dispatch('pages', $this->activePage);
        $this->dispatch('sub-pages', 'satuan');
        $this->rows = [];
    }

    public function setActivePages()
    {
        $this->activePage = 'master';
        $this->subActivePage = 'satuan';
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
