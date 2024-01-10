<?php

namespace App\Services\OtonetBackendServices;

use Illuminate\Support\Facades\Http;
use Exception;

class Supplier
{
    protected $apiEndpoint;
    protected $token;

    /**
     * Constructor for the Supplier service.
     */
    public function __construct()
    {
        $this->apiEndpoint = env('API_URL');
        $this->token = session('token'); // Retrieve the token from the session
    }

    /**
     * Retrieve a list of supplier.
     *
     * @return array The response from the API as an associative array.
     */
    public function show()
    {

        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token,
            ])->get($this->apiEndpoint . 'supplier');
            return json_decode($response->body(), true);
        } catch (Exception $e) {
            return ['error' => 'Exception', 'message' => $e->getMessage()];
        }
    }

    /**
     * Retrieve the details of a specific supplier.
     *
     * @param int $id The ID of the supplier.
     * @return array The response from the API as an associative array.
     */
    public function detail(int $id)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token,
            ])->get($this->apiEndpoint . 'supplier/' . $id);
            return json_decode($response->body(), true);
        } catch (Exception $e) {
            return ['error' => 'Exception', 'message' => $e->getMessage()];
        }
    }

    /**
     * Store a new supplier.
     *
     * @param array $data The data for the new supplier.
     * @return array The response from the API as an associative array.
     */
    public function store(array $data)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token,
            ])->post($this->apiEndpoint . 'supplier', $data);
            return json_decode($response->body(), true);
        } catch (Exception $e) {
            return ['error' => 'Exception', 'message' => $e->getMessage()];
        }
    }

    /**
     * Update the specified supplier's details.
     *
     * @param int $id The ID of the supplier to update.
     * @param array $data The data to update the supplier with.
     * @return array The response from the API as an associative array.
     */
    public function update(int $id, array $data)
    {
        try {
            $response = Http::put($this->apiEndpoint . 'supplier/' . $id, $data);
            return json_decode($response->body(), true);
        } catch (Exception $e) {
            return ['error' => 'Exception', 'message' => $e->getMessage()];
        }
    }

    /**
     * Delete a specific supplier.
     *
     * @param int $id The ID of the supplier to delete.
     * @return array The response from the API as an associative array.
     */
    public function delete(int $id)
    {
        try {
            $response = Http::delete($this->apiEndpoint . 'supplier/' . $id);
            return json_decode($response->body(), true);
        } catch (Exception $e) {
            return ['error' => 'Exception', 'message' => $e->getMessage()];
        }
    }
}
