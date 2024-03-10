<x-guest-layout>

                        @auth
                            <p class="text-lg text-gray-700">Découvrez les derniers films tendances ici !</p>
                            @livewire('movies-list')
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

</x-guest-layout>
