<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->boolean('adult')->default(false);
            $table->string('backdrop_path')->nullable();
            $table->integer('budget')->nullable();
            $table->string('homepage')->nullable();
            $table->bigInteger('tmdb_id')->unique(); // TMDB ID
            $table->string('imdb_id')->nullable();
            $table->string('original_language', 10);
            $table->string('original_title');
            $table->text('overview')->nullable();
            $table->float('popularity')->nullable();
            $table->string('poster_path')->nullable();
            $table->string('release_date')->nullable();
            $table->bigInteger('revenue')->nullable();
            $table->integer('runtime')->nullable();
            $table->string('status')->nullable();
            $table->string('tagline')->nullable();
            $table->string('title');
            $table->boolean('video')->default(false);
            $table->float('vote_average')->nullable();
            $table->integer('vote_count')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
