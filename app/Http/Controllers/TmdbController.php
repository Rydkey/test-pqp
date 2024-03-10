<?php

namespace App\Http\Controllers;

use App\Actions\Movie\Detail;
use App\Actions\Movie\Trending;
use Illuminate\Http\JsonResponse;

class TmdbController extends Controller
{
    public function getTrendingMovies(Trending $trending, ?int $page = 1): JsonResponse
    {
       return $trending->getAllPaginated($page);
    }

    public function getMovieDetails(Detail $detail, string $movieId): JsonResponse
    {
        return $detail->execute($movieId);
    }
}
