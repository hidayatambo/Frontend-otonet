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
    public $nama_perusahaan;
    public $email;
    public $phone;
    // public $address;
    public $confirm;
    public $jenis_aplikasi;
    public $detail_jenis_aplikasi;

    public function mount(Request $request)
    {
        $this->jenis_aplikasi = $request->input('jenis');
    }


    public function register()
    {
	/**
        $this->validate([
            'nama' => 'required',
            'nama_perusahaan' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'jenis_aplikasi' => 'required',
            'detail_jenis_aplikasi' => 'required',
            'confirm' => 'required'
        ]);
	dd($this->validate);
         **/

        $api = new Auth();
        $response = $api->register([
            'nama' => $this->nama,
            'nama_perusahaan' => $this->nama_perusahaan,
            'email' => $this->email,
            'no_telepon' => $this->phone,
            'id_aplikasi' => 1,
            'id_jenis_aplikasi' => 1,
            'confirm' => $this->confirm,
	    'alamat' => ''
        ]);

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
                text: 'Register Failed',
                icon: 'error'
            );
        }
    }

    public function render()
    {
        return view('livewire.pages.authentication.register');
    }
}
