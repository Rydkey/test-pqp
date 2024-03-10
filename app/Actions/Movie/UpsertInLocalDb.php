<?php

namespace App\Actions\Movie;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\MovieGenre;

class UpsertInLocalDb
{
    public function execute(array $movieData)
    {
        // Assurez-vous que $movieData contient toutes les données nécessaires
        // et un identifiant unique pour vérifier si le film existe déjà.

        $movie = Movie::updateOrCreate(
            ['tmdb_id' => $movieData['id']], // Critères pour trouver le film existant.
            $movieData // Les données pour créer / mettre à jour le film.
        );
        $genres_id = [];
        foreach ($movieData['genres'] as $genre){
            $createdOrUpdatedGenre = Genre::updateOrCreate(
                ['tmdb_id' => $genre['id']],
                ['tmdb_id'=> $genre['id'], 'name' => $genre['name']]
            );
            $genres_id[] = $createdOrUpdatedGenre->getKey();
        }

        $movie->genres()->sync($genres_id);

        return $movie;
    }
}
