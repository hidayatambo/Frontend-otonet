<?php

namespace App\Services\OtonetBackendServices;

use Illuminate\Support\Facades\Http;
use Exception;

class DivisiSparepart
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
    public function show()
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token,
            ])->get($this->apiEndpoint . 'divisi-sparepart');
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

    /**
     * Retrieve the details of a specific Divisi Sparepart.
     *
     * @param int $id The ID of the Divisi Sparepart.
     * @return array The response from the API as an associative array.
     */
    // public function detail(int $id)
    // {
    //     try {
    //         $response = Http::withHeaders([
    //             'Authorization' => 'Bearer ' . $this->token,
    //         ])->get($this->apiEndpoint . 'Divisi Sparepart/' . $id);
    //         return json_decode($response->body(), true);
    //     } catch (Exception $e) {
    //         return ['error' => 'Exception', 'message' => $e->getMessage()];
    //     }
    // }

    /**
     * Store a new Divisi Sparepart.
     *
     * @param array $data The data for the new Divisi Sparepart.
     * @return array The response from the API as an associative array.
     */
    // public function store(array $data)
    // {
    //     try {
    //         $response = Http::withHeaders([
    //             'Authorization' => '`Bearer` ' . $this->token,
    //         ])->post($this->apiEndpoint . 'Divisi Sparepart', $data);
    //         return json_decode($response->body(), true);
    //     } catch (Exception $e) {
    //         return ['error' => 'Exception', 'message' => $e->getMessage()];
    //     }
    // }

    /**
     * Update the specified Divisi Sparepart's details.
     *
     * @param int $id The ID of the Divisi Sparepart to update.
     * @param array $data The data to update the Divisi Sparepart with.
     * @return array The response from the API as an associative array.
     */
    // public function update(int $id, array $data)
    // {
    //     try {
    //         $response = Http::put($this->apiEndpoint . 'Divisi Sparepart/' . $id, $data);
    //         return json_decode($response->body(), true);
    //     } catch (Exception $e) {
    //         return ['error' => 'Exception', 'message' => $e->getMessage()];
    //     }
    // }

    /**
     * Delete a specific Divisi Sparepart.
     *
     * @param int $id The ID of the Divisi Sparepart to delete.
     * @return array The response from the API as an associative array.
     */
    // public function delete(int $id)
    // {
    //     try {
    //         $response = Http::delete($this->apiEndpoint . 'Divisi Sparepart/' . $id);
    //         return json_decode($response->body(), true);
    //     } catch (Exception $e) {
    //         return ['error' => 'Exception', 'message' => $e->getMessage()];
    //     }
    // }
}
