<?php

namespace App\Livewire\Components\ColorAdmin\Partials;

use Livewire\Component;

class Sidebar extends Component
{
    public $activePage;
    public $subActivePage;

    protected $listeners = [
        'navigate-to' => 'navigateTo',
        'pages' => 'pages',
        'sub-pages' => 'subPages'
    ];
    public function navigateTo($page, $subPage)
    {
        $this->activePage = $page;
        $this->subActivePage = $subPage;
    }

    public function pages($page)
    {
        $this->activePage = $page;
    }
    public function subPages($subPage)
    {
        $this->subActivePage = $subPage;
    }
    public function render()
    {
        return view('livewire.components.color-admin.partials.sidebar');
    }
}
