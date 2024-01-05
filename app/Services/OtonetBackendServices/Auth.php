<?php
namespace App\Services\OtonetBackendServices;

use Illuminate\Support\Facades\Http;

class Auth
{
    protected $apiEndpoint = 'localhost:8000/api/';

    function login($data)
    {
        try {
            $response = Http::post($this->apiEndpoint . 'login', $data);

            // if ($response->successful()) {
                return json_decode($response->body(), true);
            // } else {
            //     return json_decode($response->body(), true);
            // }
        } catch (\Exception $e) {
            // Handle other exceptions (e.g., network issues, timeouts)
            return ['error' => 'Exception', 'message' => $e->getMessage()];
        }
    }
}
