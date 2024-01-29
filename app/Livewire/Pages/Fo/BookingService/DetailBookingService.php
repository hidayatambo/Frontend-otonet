<?php

namespace App\Livewire\Pages\Fo\BookingService;

use Livewire\Component;
use App\Services\MobileBackendServices\BookingService;
class DetailBookingService extends Component
{
    public $activePage;
    public $subActivePage;
 
    public $apiEndpoint, $token;

    public $detail = [];
    public $id;
    public function __construct()
    {
        $this->apiEndpoint = 'https://be.techthinkhub.id/api/';
        $this->token = session('token'); // Retrieve the token from the session
    }
    public function render()
    {
        return view('livewire.pages.fo.booking-service.detail-booking-service')
        ->layout('layouts.dashboard')
        ->title('Front Office | Detail Booking Service');
    }

    public function mount()
    {
        $this->setActivePages();
        $this->dispatch('breadcrumb', $this->activePage, $this->subActivePage);
        $this->dispatch('pages', $this->activePage);
        $this->dispatch('sub-pages', $this->subActivePage);

        $this->getBookingDetail($this->id);
    }

    public function setActivePages()
    {
        $this->activePage = 'front_office';
        $this->subActivePage = 'booking_service';
    }
    public function getBookingDetail($bookingId)
    {
        try {
            $service = new BookingService();
            $this->detail = $service->show($bookingId);
        } catch (\Exception $e) {
            // return redirect('auth/login');
        }
        
    }
}
