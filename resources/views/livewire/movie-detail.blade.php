<div class="container mx-auto p-4">
    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-4 flex">
            <div class="flex-1 w-2">
                <img src="https://image.tmdb.org/t/p/w200{{$movie->poster_path}}" alt="Description"
                     class="object-none object-center rounded">
            </div>
            <div class="flex-1 w-4">
                <h1 class="text-3xl font-bold mb-2">{{ $movie->title }}</h1>
                <p class="text-gray-700 mb-4">{{ $movie->overview }}</p>
                <ul>
                    <li><strong>Date de sortie :</strong> {{ $movie->release_date }}</li>
                    <!-- Remplacez 'Date' par votre donnée dynamique -->
                    <li><strong>Genre :</strong>
                        @foreach($movie->genres as $genre)
                            {{$genre->name}}
                            @if(!$loop->last)
                                ,
                            @endif
                        @endforeach
                    </li>
                    <!-- Remplacez 'Genre' par votre donnée dynamique -->
                    <li><strong>Langage :</strong> {{ $movie->original_language }}</li>
                    <!-- Remplacez 'Durée' par votre donnée dynamique -->
                </ul>
            </div>
        </div>
    </div>
</div>
