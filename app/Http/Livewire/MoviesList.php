<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Movie;

class MoviesList extends Component
{
    public $movies;

    public function mount()
    {
        $this->movies = Movie::all();
    }

    public function render()
    {
        return view('livewire.movies-list');
    }
}
