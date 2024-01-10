<?php

namespace App\Livewire\Components;

use Livewire\Component;
// use Livewire\WithPagination;
class DynamicalTable extends Component
{
    // use WithPagination;


    // public $headers = [];
    // public $rows = [];
    // public $showUpdate = false;
    // public $showDelete = false;
    // public $perPage;

    // array $headers, array $rows, $showUpdate = false, $showDelete = false, $perPage
    public function mount()
    {
        // $this->headers = $headers;
        // $this->rows = $rows;
        // $this->showUpdate = $showUpdate;
        // $this->showDelete = $showDelete;
        // $this->perPage = $perPage;
    }
    public function render()
    {
        return view('livewire.components.dynamical-table');
    }
}
