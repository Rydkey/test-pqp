<?php

namespace App\Console\Commands;

use App\Actions\Movie\Detail;
use App\Actions\Movie\Trending;
use App\Actions\Movie\UpsertInLocalDb;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;

class PopulateDbWithTrending extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:populate-db-with-trending {page=1}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Populate the database with trending movies of the day, a page argument can be given to indicate the tmdb movie tranding page wanted';

    /**
     * Execute the console command.
     */
    public function handle(Trending $trending, Detail $detail, UpsertInLocalDb $upsertInLocalDb)
    {
        $movies = json_decode($trending->getAllPaginated($this->argument('page'))->content(), true);
        $moviesIds = Arr::pluck($movies['results'], ['id']);
        $moviesCount = count($moviesIds);
        $this->line("Adding {$moviesCount} in database");
        $bar = $this->output->createProgressBar(count($moviesIds));
        foreach ($moviesIds as $id) {
            $movieDetails = $detail->execute(movieId: $id);
            $movieArray = json_decode($movieDetails->content(), true);
            $upsertInLocalDb->execute($movieArray);
            $bar->advance();
        }
        $bar->finish();
        $this->line("\n {$moviesCount} movies added in database");
    }
}
