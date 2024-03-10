<?php

namespace App\Actions\Movie;

use App\Services\TmdbServices;
use Illuminate\Http\JsonResponse;

class Trending
{
    protected $tmdbServices;

    public function __construct(TmdbServices $tmdbServices)
    {
        $this->tmdbServices = $tmdbServices;
    }


    public function getAllPaginated(?int $page = 1): JsonResponse
    {
        $url = "https://api.themoviedb.org/3/trending/movie/day?page=$page&language=fr-FR&api_key=";

        return $this->tmdbServices->execute($url);
    }
}
