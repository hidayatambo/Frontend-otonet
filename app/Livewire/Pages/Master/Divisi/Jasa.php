<?php

namespace App\Livewire\Pages\Master\Divisi;

use Livewire\Component;

class Jasa extends Component
{
    public $activePage;
    public $subActivePage;

    public $headers = ['Nama Divisi Jasa' , 'Created By', 'Actions'];

    public $apiEndpoint, $token;

    public function __construct()
    {
        $this->apiEndpoint = 'https://be.techthinkhub.id/api/';;
        $this->token = session('token'); // Retrieve the token from the session
    }
    public function render()
    {
        return view('livewire.pages.master.divisi.jasa')->layout('layouts.dashboard')->title('Master | Divisi Jasa');
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
        $this->subActivePage = 'divisi_jasa';
    }
}
