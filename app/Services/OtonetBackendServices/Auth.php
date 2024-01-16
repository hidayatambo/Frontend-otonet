<?php
namespace App\Services\OtonetBackendServices;

use Illuminate\Support\Facades\Http;

/**
 * Auth class handles authentication-related interactions with the Otonet backend API.
 * It provides methods for user login and registration.
 */
class Auth
{
    /**
     * The base URL for the Otonet API.
     */
    protected $apiEndpoint;

    /**
     * Send login data to the Otonet API and return the response.
     *
     * This method sends a POST request to the API's login endpoint with the provided user data.
     * It returns an array containing the API's response, which typically includes user authentication details.
     * In case of exceptions (like network issues), it returns an error message.
     *
     * @param array $data The user login data, usually including email and password.
     * @return array The response from the API as an associative array.
     */

     public function __construct()
     {
        $this->apiEndpoint = env('API_URL');;
    }
    function login(array $data) : array
    {
        try {
            $response = Http::post($this->apiEndpoint . 'login', $data);
            return json_decode($response->body(), true);
        } catch (\Exception $e) {
            // Handle other exceptions (e.g., network issues, timeouts)
            return ['error' => 'Exception', 'message' => $e->getMessage()];
        }
    }

    /**
     * Send registration data to the Otonet API and return the response.
     *
     * This method sends a POST request to the API's register endpoint with the user's registration data.
     * It returns an array containing the API's response, usually including confirmation of successful registration.
     * Similar to login, in case of exceptions, an error message is returned.
     *
     * @param array $data The user registration data, typically including details like email, password, and username.
     * @return array The response from the API as an associative array.
     */
    function register(array $data)
    {
        try {
            $response = Http::post($this->apiEndpoint . 'register', $data);
            return json_decode($response->body(), true);
        } catch (\Exception $e) {
            // Handle other exceptions (e.g., network issues, timeouts)
            return ['error' => 'Exception', 'message' => $e->getMessage()];
        }
    }
}
