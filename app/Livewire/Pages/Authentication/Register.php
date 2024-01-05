<?php

namespace App\Livewire\Pages\Authentication;

use Livewire\Component;
use App\Services\OtonetBackendServices\Auth;
class Register extends Component
{
    /**
     *  * Attr
     * inisialize Attribute
     */
    public $nama;
    public $email;
    public $password;
    public $password_confirmation;
    public $confirm;


    public function register()
    {
        $this->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'password_confirmation' => 'required',
            'confirm' => 'required',


        ]);

        $api = new Auth();
        $response = $api->register(['email' => $this->email, 'password' => $this->password, 'password_confirmation' => $this->password_confirmation ,'nama' => $this->nama]);

        // if ($response['error']) {
        //     $errors = $response->json('message');
        //     foreach ($errors as $field => $message) {
        //         foreach ($message as $error) {
        //             // $err = '';
        //             // foreach($errors as $error)
        //             // {
        //             //     $err .= $error .'<br />';
        //             // }
        //             $this->addError($field, $error);
        //         }
        //     }
        // }

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
                // dd($this->getErrorBag());
            // }
            // foreach ($response['message'] as $field => $errors) {
            //     foreach ($errors as $error) {
            //         $this->addError($field, $error);
            //     }
            // }

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
