<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class BrapiApiRequest 
{
    protected $base_url;

    public function __construct()
    {
        $this->base_url = config('integration.BRAPI_BASE_URL');
    }

    protected function makeRequest(string $method, string $url, array $options = [])
    {
        $client = new Client([
            'base_uri' => $this->base_url,
            'http_errors' => false,
            'timeout' => 10
        ]);
        $response = $client->request($method, $url, $this->options);

        return $response;
    }

    public function post(string $url)
    {
        return $this->makeRequest('POST', $url);
    }

    public function get(string $url)
    {
        return $this->makeRequest('GET', $url);
    }

    public function put(string $url)
    {
        return $this->makeRequest('PUT', $url);
    }

    public function delete(string $url)
    {
        return $this->makeRequest('DELETE', $url);
    }
} 
