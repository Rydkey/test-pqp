<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Movie;

class MovieDetail extends Component
{
    public $movieId;
    public $movie;

    public function mount($movieId)
    {
        $this->movie = Movie::find($movieId);
    }

    public function render()
    {
        return view('livewire.movie-detail');
    }
}
