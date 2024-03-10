<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Genre
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Movie[] $movies
 *
 * @package App\Models
 */
class Genre extends Model
{
	protected $table = 'genres';

	protected $fillable = [
		'name'
	];

	public function movies()
	{
		return $this->belongsToMany(Movie::class, 'movie_genre');
	}
}
