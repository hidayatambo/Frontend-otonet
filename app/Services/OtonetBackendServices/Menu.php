<?php

namespace App\Services\OtonetBackendServices;

use Illuminate\Support\Facades\Http;
use Exception;

class Menu
{
    protected $apiEndpoint;
    protected $token;

    /**
     * Constructor for the Divisi Sparepart service.
     */
    public function __construct()
    {
        $this->apiEndpoint = 'http://be.techthinkhub.id/api/';
        $this->token = session('token'); // Retrieve the token from the session
    }

    /**
     * Retrieve a list of Divisi Sparepart.
     *
     * @return array The response from the API as an associative array.
     */
    public function getMenu()
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token,
            ])->get($this->apiEndpoint . 'aksesmenu/get_menu');
            // Check if the response was successful
            if ($response->successful()) {
                return json_decode($response->body(), true);
            } else {
                
               // If not successful, redirect to the login page
               return redirect('auth/login');
            }
        } catch (Exception $e) {
            return ['error' => 'Exception', 'message' => $e->getMessage()];
        }
    }

}
