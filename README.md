## Movie Db

application pour le test technique plus que pro

## installation

après avoir cloné le repo, executer les commandes dans l'ordre : 

```composer install```

```npm install```

```npm run build```

```./vendor/bin/sail up```

```./vendor/bin/sail artisan migrate```

```./vendor/bin/sail artisan php artisan app:populate-db-with-trending```

## indications

Bien que demandé dans l'énoncé, par manque de temps (_jeune père de famille_), voici quelques indications :

- version de Laravel utilisée : 10 au lieu de 9
- back-office et front-office assez sommaire 
- il n'y a pas de CRUD pour les films

Il y a cependant quelques bonus que j'ai réalisé :
- ✅ Récupérer plusieurs catégories et pouvoir changer le produit de catégorie
- ✅ Utilisation de Livewire pour l’intégration

## Ressources utiles

- [Documentation Laravel 10.0](https://laravel.com/docs/10.x).
- [Documentation Jetstream](https://jetstream.laravel.com/introduction.html).
- [Documentation Jetstream](https://laravel-livewire.com/docs/2.x/quickstart).
- [Forum Laracast](https://laracasts.com/).
- [StackOverflow ](https://stackoverflow.com/).
