<?php

namespace App\Livewire\Pages\Fo\BookingService;

use Livewire\Component;

class BookingService extends Component
{
    public $activePage;
    public $subActivePage;

    public $headers = [ 'Nama', 'No Polisi', 'Tipe', 'Merk','Jenis Service', 'Rest Area', 'Status', 'Action'];
 
    public $apiEndpoint, $token;

    public function __construct()
    {
        $this->apiEndpoint = 'https://be.techthinkhub.id/api/';;
        $this->token = session('token'); // Retrieve the token from the session
    }
    public function render()
    {
        return view('livewire.pages.fo.booking-service.booking-service')
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
        $this->subActivePage = 'booking_service';
    }
}
