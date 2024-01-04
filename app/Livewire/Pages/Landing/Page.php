<?php

namespace App\Livewire\Pages\Landing;

use Livewire\Component;

class Page extends Component
{
    public function render()
    {
        return view('livewire.pages.landing.page')->layout('layouts.landing');;
    }
}
