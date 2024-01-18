<?php

namespace App\Livewire\Pages\Fo\BookingService;

use Livewire\Component;

class BookingService extends Component
{
    public $activePage;
    public $subActivePage;

    public $headers = ['Kode' , 'Nama', 'Divisi', 'Brand', 'Kode 2','Qty', 'Harga Beli','Harga Jual', 'Status', 'Action'];
 
    public function render()
    {
        return view('livewire.pages.fo.booking-service.booking-service')
        ->layout('layouts.dashboard')
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
        $this->subActivePage = 'booking_service';
    }
}
