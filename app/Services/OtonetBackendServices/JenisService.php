<?php

namespace App\Services\OtonetBackendServices;

use Illuminate\Support\Facades\Http;
use Exception;

class JenisService
{
    protected $apiEndpoint;
    protected $token;

    public function __construct()
    {
        $this->apiEndpoint = 'http://be.techthinkhub.id/api/';
        $this->token = session('token'); // Retrieve the token from the session
    }

    public function show()
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token,
            ])->get($this->apiEndpoint . 'jenis-service');
            // Check if the response was successful
            if ($response->successful()) {
                return json_decode($response->body(), true);
            } else {
               return redirect('auth/login');
            }
        } catch (Exception $e) {
            return ['error' => 'Exception', 'message' => $e->getMessage()];
        }
    }
}
