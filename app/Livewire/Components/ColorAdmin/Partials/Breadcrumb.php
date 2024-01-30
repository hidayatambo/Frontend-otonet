<?php

namespace App\Livewire\Components\ColorAdmin\Partials;

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
        return view('livewire.components.color-admin.partials.breadcrumb');
    }
}
