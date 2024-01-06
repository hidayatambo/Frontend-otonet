<?php

namespace App\Livewire\Pages\Landing;

use Livewire\Component;

class Page extends Component
{
    public $selected_application;

    public function select_application()
    {
        return redirect()->to('/select_aplikasi?unit?' . $this->$selected_application);
    }
    public function render()
    {
        return view('livewire.pages.landing.page')->layout('layouts.landing');;
    }
}
