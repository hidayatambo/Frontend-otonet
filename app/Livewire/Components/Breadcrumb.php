<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Breadcrumb extends Component
{
    public $activePage;
    public $subActivePage;


    protected $listeners = ['breadcrumb' => 'breadcrumb'];

    public function breadcrumb($page, $subPage)
    {
        $this->activePage = $page;
        $this->subActivePage = $subPage;
    }

    public function render()
    {
        return view('livewire.components.breadcrumb');
    }
}
