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
        $url = "trending/movie/day?page=$page&language=fr-FR";

        return $this->tmdbServices->execute($url);
    }
}
