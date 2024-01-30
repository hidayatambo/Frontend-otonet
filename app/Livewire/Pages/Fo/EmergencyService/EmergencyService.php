<?php

namespace App\Livewire\Pages\Fo\EmergencyService;

use Livewire\Component;

class EmergencyService extends Component
{
    public $activePage;
    public $subActivePage;

    public $headers = ['Kode' , 'Nama', 'Divisi', 'Brand', 'Kode 2','Qty', 'Harga Beli','Harga Jual', 'Status', 'Action'];
 
    public function render()
    {
        return view('livewire.pages.fo.emergency-service.emergency-service')
        ->layout('layouts.coloradmin')
        ->title('Front Office | Booking Service');
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
        $this->activePage = 'front_office';
        $this->subActivePage = 'emergency_service';
    } 
}
