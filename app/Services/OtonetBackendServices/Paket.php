<?php

namespace App\Services\OtonetBackendServices;

use Illuminate\Support\Facades\Http;
use Exception;

class Paket
{
    protected $apiEndpoint;
    protected $token;

    /**
     * Constructor for the Supplier service.
     */
    public function __construct()
    {
        $this->apiEndpoint = 'http://be.techthinkhub.id/api/';
        $this->token = session('token'); // Retrieve the token from the session
    }

    /**
     * Retrieve a list of supplier.
     *
     * @return array The response from the API as an associative array.
     */
    public function search(string $column, string $value)
    {
        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $this->token
            ])->post($this->apiEndpoint . 'paket/search', [
                'column' => $column,
                'value' => $value
            ]);
            return json_decode($response->body(), true);
        } catch (Exception $e) {
            return ['error' => 'Exception', 'message' => $e->getMessage()];
        }
    }

    public function show( $id)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token,
            ])->get($this->apiEndpoint . 'paket/' . $id);
            return json_decode($response->body(), true);
        } catch (Exception $e) {
            return ['error' => 'Exception', 'message' => $e->getMessage()];
        }
    }
}
