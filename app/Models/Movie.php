<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Movie
 * 
 * @property int $id
 * @property bool $adult
 * @property string|null $backdrop_path
 * @property int|null $budget
 * @property string|null $homepage
 * @property int $tmdb_id
 * @property string|null $imdb_id
 * @property string $original_language
 * @property string $original_title
 * @property string|null $overview
 * @property float|null $popularity
 * @property string|null $poster_path
 * @property string|null $release_date
 * @property int|null $revenue
 * @property int|null $runtime
 * @property string|null $status
 * @property string|null $tagline
 * @property string $title
 * @property bool $video
 * @property float|null $vote_average
 * @property int|null $vote_count
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Genre[] $genres
 *
 * @package App\Models
 */
class Movie extends Model
{
	protected $table = 'movies';

	protected $casts = [
		'adult' => 'bool',
		'budget' => 'int',
		'tmdb_id' => 'int',
		'popularity' => 'float',
		'revenue' => 'int',
		'runtime' => 'int',
		'video' => 'bool',
		'vote_average' => 'float',
		'vote_count' => 'int'
	];

	protected $fillable = [
		'adult',
		'backdrop_path',
		'budget',
		'homepage',
		'tmdb_id',
		'imdb_id',
		'original_language',
		'original_title',
		'overview',
		'popularity',
		'poster_path',
		'release_date',
		'revenue',
		'runtime',
		'status',
		'tagline',
		'title',
		'video',
		'vote_average',
		'vote_count'
	];

	public function genres()
	{
		return $this->belongsToMany(Genre::class, 'movie_genre');
	}
}
