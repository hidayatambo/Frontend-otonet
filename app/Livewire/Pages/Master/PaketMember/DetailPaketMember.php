<?php

namespace App\Livewire\Pages\Master\PaketMember;

use Livewire\Component;
use App\Services\OtonetBackendServices\PaketMember;
use App\Services\OtonetBackendServices\PaketMemberJasa;
use App\Services\OtonetBackendServices\PaketMemberPart;

class DetailPaketMember extends Component
{
    public $activePage;
    public $subActivePage;
    public $apiEndpoint, $token;

    public $jenis_service;
    public $paketMemberId, $kodePaket, $decrypt;

    public $paket_member, $paket_member_jasa, $paket_member_part = [];

    public function __construct()
    {
        $this->apiEndpoint = 'https://be.techthinkhub.id/api/';;
        $this->token = session('token'); // Retrieve the token from the session
    }

    public function render()
    {
        return view('livewire.pages.master.paket-member.detail-paket-member')
        ->layout('layouts.dashboard')
        ->title('Master Paket Member');
    }

    public function mount()
    {
        
        $this->setActivePages();
        $this->dispatch('breadcrumb', $this->activePage, $this->subActivePage);
        $this->dispatch('pages', $this->activePage);
        $this->dispatch('sub-pages', $this->subActivePage);
        $this->getPaketMember();
        $this->getPaketMemberJasa();
        $this->getPaketMemberPart();
    }

    public function setActivePages()
    {
        $this->activePage = 'master';
        $this->subActivePage = 'paket_member';
    }

    public function getPaketMember()
    {
        
        try {
            $paket_member_service = new PaketMember;
            
            $this->paket_member = $paket_member_service->show( $this->paketMemberId)['data'];
            $this->kodePaket = $this->paket_member['kode_paketmember'];
            // print_r($this->kodePaket);exit;
        } catch (\Exception $e) {
            return redirect('auth/login');
        }
    }

    public function getPaketMemberPart()
    {
        // try {
            $paket_member_part_service = new PaketMemberPart;
            $this->paket_member_part = $paket_member_part_service->search('kode_paketmember', $this->kodePaket);
            dd($this->paket_member_part);
        // } catch (\Exception $e) {
        // //     // return redirect('auth/login');
        // }
    }
    public function getPaketMemberJasa()
    {
        try {
            $paket_member_jasa_service = new PaketMemberJasa;
            $this->paket_member_jasa = $paket_member_jasa_service->search('kode_paketmember', $this->kodePaket)['data'];
            
        } catch (\Exception $e) {
            // return redirect('auth/login');
        }
    }
}
