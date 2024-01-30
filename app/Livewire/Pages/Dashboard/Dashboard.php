<?php

namespace App\Livewire\Pages\Dashboard;

use Livewire\Component;

class Dashboard extends Component
{
    public $activePage;
    public $subActivePage;
    public function mount()
    {
        $this->setActivePages();
        $this->dispatch('breadcrumb', $this->activePage, $this->subActivePage);
        $this->dispatch('pages', $this->activePage);
        $this->dispatch('sub-pages', $this->subActivePage); 
    }
    public function setActivePages()
    {
        $this->activePage = 'dashboard';
        $this->subActivePage = 'dashboard';
    }
    // #[layout('layouts.coloradmin')]
    public function render()
    {
        return view('livewire.pages.dashboard.dashboard')->layout('layouts.coloradmin');
    }
}
