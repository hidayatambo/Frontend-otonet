<?php

namespace App\Livewire\Pages\Master\Supplier;

use Livewire\Component;
use App\Http\Requests\Master\Supplier\StoreSupplier;

// call api service
use App\Services\OtonetBackendServices\Supplier as SupplierService;

class Supplier extends Component
{
    public $activePage;
    public $subActivePage;

    public $detail = [];

    public $supplierId;

    public $isOpen = false;
    public $headers = ['Nama Supplier' , 'Alamat', 'Telp', 'Kontak', 'Created By','action'];
    public $rows = [];
    public $cell = ['nama', 'alamat', 'telp', 'kontak', 'created_at'];
    public $sortField;
    public $sortDirection = 'asc';

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortField = $field;
    }

    public function mount(SupplierService $services)
    {
        $this->setActivePages();
        $this->activePage = 'master';
        $this->subActivePage = 'supplier';
        $this->dispatch('breadcrumb', $this->activePage, $this->subActivePage);
        $this->dispatch('pages', $this->activePage);
        $this->dispatch('sub-pages', $this->subActivePage);
        $this->list = $services->show();
        $this->rows = $this->getDataSupplier();
    }

    public function store(StoreSupplier $request, SupplierService $services)
    {
        $validate = $request->validated();
        try {

            $supplier = $services->store($request->all());

            if ($response['status'] === true) {

            } else {
                foreach ($response['message'] as $field => $errors) {
                    foreach ($errors as $error) {
                        $this->addError($field, $error);
                    }
                }
            }
        } catch (Exception $e) {

            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function setActivePages()
    {
        $this->activePage = 'master';
        $this->subActivePage = 'supplier';
    }



    #[Title('Master Supplier')]
    public function render()
    {
        return view('livewire.pages.master.supplier.supplier')->layout('layouts.dashboard');
    }

    public function editSupplier($supplierId)
    {
        $this->openModal();
        $this->$supplierId = $supplierId;
        $supplier = new SupplierService();
        // dd($supplier->show()['data']);
        $this->detail = $supplier->detail($supplierId)['data'] ? $supplier->detail($supplierId)['data'] : [];
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function getDataSupplier()
    {
        $supplier = new SupplierService();
        // dd($supplier->show()['data']);
        return isset($supplier->show()['data']) ? $supplier->show()['data'] : [] ;
    }

    public function createSupplier()
    {
        $this->emitTo('supplier-form', 'mount');
        $this->dispatchBrowserEvent('openModal', ['id' => 'exampleModalCenter1']);
    }

    public function save(StoreSupplier $request, SupplierService $services)
    {
        try {
            $this->validate();

            if ($this->supplierId) {
                $detail = $services->detail($this->supplierId);
                $response = $supplier->update($this->validate());
            } else {
                $response = $services->store($request->all());

                if ($response['status'] === true) {

                } else {
                    foreach ($response['message'] as $field => $errors) {
                        foreach ($errors as $error) {
                            $this->addError($field, $error);
                        }
                    }
                }
            }
        } catch (Exception $e) {

            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }

        $this->emit('modalClosed');
        $this->reset();
    }
}
