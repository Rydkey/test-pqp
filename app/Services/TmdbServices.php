<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\JsonResponse;

class TmdbServices
{
    protected $apiKey;

    protected $baseUrl;

    public function __construct() {
        $this->apiKey = env('TMDB_API_KEY');
        $this->baseUrl = 'https://api.themoviedb.org/3/';
    }
    public function execute(string $path): JsonResponse
    {
        $client = new Client();
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Accept' => 'application/json'
            ]
        ];

        try {
            $response = $client->get("$this->baseUrl$path", $options);
        } catch (GuzzleException $e) {
            return response()->json(['error' => $e->getMessage()], $e->getCode());
        }


        if ($response->getStatusCode() == 200) {
            $body = $response->getBody();
            $data = json_decode($body);
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Unable to fetch data from TMDB'], $response->getStatusCode());
        }
    }
}
