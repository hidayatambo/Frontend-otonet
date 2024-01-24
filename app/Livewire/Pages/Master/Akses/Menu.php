<?php

namespace App\Livewire\Pages\Master\Akses;

use Livewire\Component;
use App\Services\OtonetBackendServices\Menu as MenuService;
class Menu extends Component
{
    public $activePage;
    public $subActivePage;

    public $headers = ['Nama' , 'Email', ''];
    public $apiEndpoint, $token;
    public $menu;

    public function __construct()
    {
        $this->apiEndpoint = 'https://be.techthinkhub.id/api/';;
        $this->token = session('token'); // Retrieve the token from the session
    }
    public function render()
    {
        return view('livewire.pages.master.akses.menu')
        ->layout('layouts.dashboard')
        ->title('Master Akses Menu');
    }

    public function mount()
    {
        $this->setActivePages();
        $this->dispatch('breadcrumb', $this->activePage, $this->subActivePage);
        $this->dispatch('pages', $this->activePage);
        $this->dispatch('sub-pages', $this->subActivePage); 
        $this->getMenu();
    }

    public function setActivePages()
    {
        $this->activePage = 'master';
        $this->subActivePage = 'akses_menu';
    }

    public function getMenu()
    {
        try {
            $menu_service = new MenuService();

            $this->menu = $menu_service->getMenu();
            // dd($this->menu);
        } catch (\Exception $e) {
            return redirect('auth/login');
        }
    }
}
