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

    public function execute(int $movieId): JsonResponse
    {
        $url = "movie/$movieId?language=fr-FR";
        return $this->tmdbServices->execute($url);
    }
}
