<?php

namespace App\Services\OtonetBackendServices;

use Illuminate\Support\Facades\Http;
use Exception;

class DivisiJasa
{
    protected $apiEndpoint;
    protected $token;

    /**
     * Constructor for the Divisi Jasa service.
     */
    public function __construct()
    {
        $this->apiEndpoint = 'http://be.techthinkhub.id/api/';
        $this->token = session('token'); // Retrieve the token from the session
    }

    /**
     * Retrieve a list of Divisi Jasa.
     *
     * @return array The response from the API as an associative array.
     */
    public function show()
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token,
            ])->get($this->apiEndpoint . 'divisi-jasa');
            return json_decode($response->body(), true);
        } catch (Exception $e) {
            return ['error' => 'Exception', 'message' => $e->getMessage()];
        }
    }
}
