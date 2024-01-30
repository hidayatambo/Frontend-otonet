<?php

namespace App\Livewire\Pages\Fo\Order;

use Livewire\Component;

class PekerjaanLuar extends Component
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
        return view('livewire.pages.fo.order.pekerjaan-luar')
        ->layout('layouts.coloradmin')
        ->title('Front Office | Update KM');
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
        $this->activePage = 'front_office';
        $this->subActivePage = 'order_pekerjaan_luar';
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
