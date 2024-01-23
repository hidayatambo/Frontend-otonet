<?php

namespace App\Services\OtonetBackendServices;

use Illuminate\Support\Facades\Http;
use Exception;

class Barang
{
    protected $apiEndpoint;
    protected $token;

    /**
     * Constructor for the Barang service.
     */
    public function __construct()
    {
        $this->apiEndpoint = 'http://be.techthinkhub.id/api/';
        $this->token = session('token'); // Retrieve the token from the session
    }

    /**
     * Retrieve a list of Barang.
     *
     * @return array The response from the API as an associative array.
     */
    public function show()
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token,
            ])->get($this->apiEndpoint . 'barang');
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
     * Retrieve the details of a specific Barang.
     *
     * @param int $id The ID of the Barang.
     * @return array The response from the API as an associative array.
     */
    public function detail(int $id)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token,
            ])->get($this->apiEndpoint . 'barang/' . $id);
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

    public function getDivisiSparepart()
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token,
            ])->get($this->apiEndpoint . 'barang-divisi' );
            if ($response->successful()) {
                return json_decode($response->body(), true);
            } else {
               return redirect('auth/login');
            }
        } catch (Exception $e) {
            return ['error' => 'Exception', 'message' => $e->getMessage()];
        }
    }
    
    /**
     * Store a new Barang.
     *
     * @param array $data The data for the new Barang.
     * @return array The response from the API as an associative array.
     */
    // public function store(array $data)
    // {
    //     try {
    //         $response = Http::withHeaders([
    //             'Authorization' => '`Bearer` ' . $this->token,
    //         ])->post($this->apiEndpoint . 'Barang', $data);
    //         return json_decode($response->body(), true);
    //     } catch (Exception $e) {
    //         return ['error' => 'Exception', 'message' => $e->getMessage()];
    //     }
    // }

    /**
     * Update the specified Barang's details.
     *
     * @param int $id The ID of the Barang to update.
     * @param array $data The data to update the Barang with.
     * @return array The response from the API as an associative array.
     */
    // public function update(int $id, array $data)
    // {
    //     try {
    //         $response = Http::put($this->apiEndpoint . 'Barang/' . $id, $data);
    //         return json_decode($response->body(), true);
    //     } catch (Exception $e) {
    //         return ['error' => 'Exception', 'message' => $e->getMessage()];
    //     }
    // }

    /**
     * Delete a specific Barang.
     *
     * @param int $id The ID of the Barang to delete.
     * @return array The response from the API as an associative array.
     */
    // public function delete(int $id)
    // {
    //     try {
    //         $response = Http::delete($this->apiEndpoint . 'Barang/' . $id);
    //         return json_decode($response->body(), true);
    //     } catch (Exception $e) {
    //         return ['error' => 'Exception', 'message' => $e->getMessage()];
    //     }
    // }
}
