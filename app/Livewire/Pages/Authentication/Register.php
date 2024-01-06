<?php

namespace App\Livewire\Pages\Authentication;

use Livewire\Component;
use App\Services\OtonetBackendServices\Auth;

use Illuminate\Http\Request;
class Register extends Component
{
    /**
     *  * Attr
     * inisialize Attribute
     */
    public $nama;
    public $email;
    public $phone;
    public $address;
    public $confirm;
    public $jenis_usaha;

    public function mount(Request $request)
    {
        $this->jenis_usaha = $request->input('jenis');
    }


    public function register()
    {
        $this->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'confirm' => 'required',
            'jenis_usaha' => 'required',
        ]);

        $api = new Auth();
        $response = $api->register(['email' => $this->email, 'phone' => $this->phone, 'address' => $this->address ,'nama' => $this->nama]);

        if ($response['status'] === true) {
            $this->dispatch('swal:success',
                title: 'Register Successful',
                text: 'Register Successfully!',
                icon: 'success',
                willClose: 'redirectAfterSuccess',
            );
        } else {
            // if (isset($response['message'])) {
                foreach ($response['message'] as $field => $errors) {
                    foreach ($errors as $error) {
                        $this->addError($field, $error);
                    }
                }

            $this->dispatch('swal:error',
                title: 'Register Fail',
                text: json_encode($this->getErrorBag()),
                icon: 'error'
            );
        }
    }

    public function render()
    {
        return view('livewire.pages.authentication.register');
    }
}
