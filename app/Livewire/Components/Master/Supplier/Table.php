<?php

namespace App\Livewire\Components\Master\Supplier;

use Livewire\Component;
// call api service
use App\Services\OtonetBackendServices\Supplier;
class Table extends Component
{
    public $headers = ['Nama Supplier' , 'Alamat', 'Telp', 'Kontak', 'Created By','action'];
    public $rows = [];
    public $cell = ['nama', 'alamat', 'telp', 'kontak', 'created_at'];
    public $sortField;
    public $sortDirection = 'asc';

    public $supplierId;

    public $isOpen = false;

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortField = $field;
    }

    public function render()
    {
        return view('livewire.components.master.supplier.table');
    }

    public function getDataSupplier()
    {
        $supplier = new Supplier();
        // dd($supplier->show()['data']);
        return isset($supplier->show()['data']) ? $supplier->show()['data'] : [] ;
    }

    public function createSupplier()
    {
        $this->emitTo('supplier-form', 'mount');
        $this->dispatchBrowserEvent('openModal', ['id' => 'exampleModalCenter1']);
    }

    public function editSupplier($supplierId)
    {
        $this->openModal();
        // $this->emitTo('supplier-form', 'mount', $supplierId);
        // $this->dispatchBrowserEvent('openModal', ['id' => 'exampleModalCenter1']);

        dd($supplierId);
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function mount()
    {
        $this->rows = $this->getDataSupplier();
    }
}
