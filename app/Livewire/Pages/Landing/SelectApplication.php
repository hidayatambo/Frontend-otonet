<?php

namespace App\Livewire\Pages\Landing;

use Livewire\Component;

class SelectApplication extends Component
{
    public $unit;

    public function get_application_unit()
    {
        return [$this->unit . ' feature 1' ,$this->unit . ' feature 2', $this->unit . ' feature 3'];
    }

    public function render()
    {
        $data['unit'] = get_application_unit();
        return view('livewire.pages.landing.select-application', $data);
    }
}
