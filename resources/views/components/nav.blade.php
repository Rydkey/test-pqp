<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <div class="text-white font-semibold text-xl">
                    <a href="{{Route('home')}}">
                        Movie Database
                    </a>
                </div>
            </div>
            <div>
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                               class="font-semibold text-gray-600 hover:text-cyan-200 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"
                               class="font-semibold text-white hover:text-cyan-200 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Connexion</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                   class="ml-4 font-semibold text-white hover:text-cyan-200 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">S'inscrire</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
</nav>
