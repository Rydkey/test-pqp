<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MovieGenre
 *
 * @property int $movie_id
 * @property int $genre_id
 *
 * @property Genre $genre
 * @property Movie $movie
 *
 * @package App\Models
 */
class MovieGenre extends Model
{
	protected $table = 'movie_genre';
	public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'movie_id',
        'genre_id'
    ];

    protected $casts = [
		'movie_id' => 'int',
		'genre_id' => 'int'
	];

	public function genre()
	{
		return $this->belongsTo(Genre::class);
	}

	public function movie()
	{
		return $this->belongsTo(Movie::class);
	}
}
