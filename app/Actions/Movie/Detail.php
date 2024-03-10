<?php

namespace App\Actions\Movie;

use App\Services\TmdbServices;
use Illuminate\Http\JsonResponse;

class Detail
{
    protected $tmdbServices;

    public function __construct(TmdbServices $movieService)
    {
        $this->tmdbServices = $movieService;
    }

    public function execute(string $movieId): JsonResponse
    {
        $url = "https://api.themoviedb.org/3/movie/$movieId?language=fr-FR&api_key=";
        return $this->tmdbServices->execute($url);
    }
}
