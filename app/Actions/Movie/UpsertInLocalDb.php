<?php

namespace App\Actions\Movie;

use App\Models\Movie;

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

        return $movie;
    }
}
