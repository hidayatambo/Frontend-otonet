<?php

namespace App\Livewire\Pages\Master\Paket;

use Livewire\Component;

class Member extends Component
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
        return view('livewire.pages.master.paket.member')
        ->layout('layouts.coloradmin')
        ->title('Master Paket Member');
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
        $this->subActivePage = 'paket_member';
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }
    // public function render()
    // {
    //     return view('livewire.pages.master.paket.member');
    // }
}
