<?php

namespace App\Http\Controllers;

use App\Actions\Movie\Detail;
use App\Actions\Movie\Trending;
use App\Actions\Movie\UpsertInLocalDb;
use Illuminate\Http\JsonResponse;

class TmdbController extends Controller
{
    public function getTrendingMovies(Trending $trending, ?int $page = 1): JsonResponse
    {
       return $trending->getAllPaginated($page);
    }

    public function getMovieDetails(Detail $detail, int $movieId): JsonResponse
    {
        return $detail->execute($movieId);
    }

    public function upsertMovieInDB(UpsertInLocalDb $upsertInLocalDb, Detail $detail, int $tmdbMovieId): void
    {
        $movieDetails = $detail->execute(movieId: $tmdbMovieId);
        $movieArray = json_decode($movieDetails->content(), true);
        $upsertInLocalDb->execute($movieArray);
    }
}
