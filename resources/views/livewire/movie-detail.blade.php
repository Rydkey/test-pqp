<div class="container mx-auto p-4">
    <div class="max-w-xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
        <div class="bg-cover bg-center h-56 p-4" style="background-image: url('{{ $movie->backdrop_path }}')">
            <div class="flex justify-end">
                <span class="text-white bg-gray-800 bg-opacity-75 rounded-full px-2 py-1 text-xs font-bold">
                    {{ $movie->vote_average * 10 }}% Rating
                </span>
            </div>
        </div>
        <div class="p-4">
            <h2 class="font-bold text-3xl mb-2">{{ $movie->title }}</h2>
            <p class="text-gray-700">{{ $movie->overview }}</p>
            <div class="mt-4">
                <h3 class="font-bold">Details</h3>
                <ul>
                    <li><strong>Release Date:</strong> {{ $movie->release_date }}</li>
                    <li><strong>Popularity:</strong> {{ $movie->popularity }}</li>
                    <li><strong>Language:</strong> {{ $movie->original_language }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
