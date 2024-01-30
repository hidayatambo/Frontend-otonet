<?php

namespace App\Livewire\Pages\Test;

use Livewire\Component;

class Test extends Component
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
        $this->activePage = 'master';
        $this->subActivePage = 'supplier';
    }
    public function render()
    {
        return view('livewire.pages.test.test')->layout('layouts.coloradmin');
    }
}
