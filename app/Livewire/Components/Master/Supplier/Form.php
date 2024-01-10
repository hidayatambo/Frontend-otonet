<?php

namespace App\Livewire\Components\Master\Supplier;

use Livewire\Component;
use App\Http\Requests\Master\Supplier\StoreSupplier;

// call api service
use App\Services\OtonetBackendServices\Supplier as SupplierService;
class Form extends Component
{
    public $supplierId;
    public $name, $address, $phone, $contact, $npwp, $accountNumber, $bankName;



    public function mount($supplierId = null,  SupplierService $services)
    {
        if ($supplierId) {
            $supplier = Supplier::findOrFail($supplierId);
            $this->fill($supplier->toArray());
            $this->supplierId = $supplierId;
        }
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

    public function render()
    {
        return view('livewire.components.master.supplier.form');
    }
}
