<?php

namespace App\Livewire\Pages\Authentication;

use Livewire\Component;

class SelectApplication extends Component
{
    protected $jenis_usaha;
    public function redirect_to_register($jenis_usaha)
    {
        return $this->redirect("/auth/register?jenis={$jenis_usaha}");
    }
    public function render()
    {
        return view('livewire.pages.authentication.select-application');
    }
}
