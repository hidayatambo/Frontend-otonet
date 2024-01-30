<?php

namespace App\Livewire\Pages\Master\PaketMember;

use Livewire\Component;

class PaketMember extends Component
{
    public $activePage;
    public $subActivePage;

    public $headers = ['Kode' , 'Nama Paket',  'Tipe Paket', 'Actions'];
    public $apiEndpoint, $token;

    public function __construct()
    {
        $this->apiEndpoint = 'https://be.techthinkhub.id/api/';;
        $this->token = session('token'); // Retrieve the token from the session
    }

    public function render()
    {
        return view('livewire.pages.master.paket-member.paket-member')
        ->layout('layouts.coloradmin')
        ->title('Master Paket');
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
        $this->subActivePage = 'paket_member';
    }
}
