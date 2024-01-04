<?php

namespace App\Livewire\Pages\Dashboard;

use Livewire\Component;

class Dashboard extends Component
{
    // #[Layout('layouts.dashboard')]
    public function render()
    {
        return view('livewire.pages.dashboard.dashboard')->layout('layouts.dashboard');
    }
}
