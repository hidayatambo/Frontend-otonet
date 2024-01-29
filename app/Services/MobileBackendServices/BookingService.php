<?php

namespace App\Services\MobileBackendServices;

use Illuminate\Support\Facades\Http;
use Exception;

class BookingService
{
    protected $apiEndpoint;
    protected $token;

    /**
     * Constructor for the Supplier service.
     */
    public function __construct()
    {
        $this->apiEndpoint = 'https://be.techthinkhub.id/api/';
        $this->token = session('token'); // Retrieve the token from the session
    }

    public function show( $id)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token,
            ])->get($this->apiEndpoint . 'booking-fo/' . $id);
            return json_decode($response->body(), true);
        } catch (Exception $e) {
            return ['error' => 'Exception', 'message' => $e->getMessage()];
        }
    }
}
