<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\JsonResponse;

class TmdbController extends Controller
{
    private function requestTmdb(string $url): JsonResponse
    {
        $client = new Client();
        $apiKey = env('TMDB_API_KEY');
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $apiKey,
                'Accept' => 'application/json'
            ]
        ];

        try {
            $response = $client->get("$url$apiKey", $options);
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
    public function getTrendingMovies(): JsonResponse
    {
        $url = "https://api.themoviedb.org/3/trending/movie/day?language=fr-FR&api_key=";
        return $this->requestTmdb($url);
    }

    public function getMovieDetails(string $movieId): JsonResponse
    {
        $url = "https://api.themoviedb.org/3/movie/$movieId?language=fr-FR&api_key=";
        return $this->requestTmdb($url);
    }
}
