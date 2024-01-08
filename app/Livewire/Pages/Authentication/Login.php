<?php

namespace App\Livewire\Pages\Authentication;

use Livewire\Component;

// external api
use App\Services\OtonetBackendServices\Auth;

// session handler
use Illuminate\Support\Facades\Session;
class Login extends Component
{
    public $email;
    public $password;

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $api = new Auth();
        $response = $api->login(['email' => $this->email, 'password' => $this->password]);


        if ($response['status'] === true) {
            Session::put('token', $response['token']);
            $this->dispatch('swal:success',
                title: 'Login Successful',
                text: 'Welcome!',
                icon: 'success',
                willClose: 'redirectAfterSuccess',
            );
        } else {
            $this->dispatch('swal:error',
                title: 'Login Failed',
                text: $response['message'],
                icon: 'error'
            );
        }
    }

    public function redirectAfterSuccess()
    {
        // Redirect to the dashboard after a successful login
        return redirect()->to('/dashboard');
    }
    public function render()
    {
        return view('livewire.pages.authentication.login');
    }
}
