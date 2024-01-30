<?php

namespace App\Livewire\Pages\Master\Karyawan;

use Livewire\Component;

class Karyawan extends Component
{
    public $activePage;
    public $subActivePage;

    public $headers = ['Kode' , 'Nama', 'HP', 'Email', 'Created By', 'Actions'];
    public $apiEndpoint, $token;

    public function __construct()
    {
        $this->apiEndpoint = 'https://be.techthinkhub.id/api/';;
        $this->token = session('token'); // Retrieve the token from the session
    }

    public function render()
    {
        return view('livewire.pages.master.karyawan.karyawan')
        ->layout('layouts.coloradmin')
        ->title('Master Karyawan');
    }

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
        $this->subActivePage = 'karyawan';
    }
}
