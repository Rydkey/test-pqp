<x-guest-layout>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">
                Bienvenue sur Votre Application de Films
            </h1>
        </div>
    </header>

    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="px-4 py-6 sm:px-0">
                <div class="border-4 border-dashed border-gray-200 rounded-lg h-96">
                    <div class="text-center m-20">
                        @auth
                            <p class="text-lg text-gray-700">Découvrez les derniers films tendances ici !</p>
                        @else
                            <p class="text-lg text-gray-700">Vous devez vous connecter pour profiter de Movie
                                Database </p>
                            <div class="mt-2">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    <a href="{{Route('login')}}">
                                        Connexion
                                    </a>
                                </button>
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    <a href="{{Route('register')}}">
                                        Inscription
                                    </a>
                                </button>
                            </div>

                        @endauth
                        <!-- Ajoutez plus de contenu ici selon vos besoins -->
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-guest-layout>
