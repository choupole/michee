<?php

namespace App\Providers;

use App\Models\Categorie;
use App\Models\Propriete;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $categories = Categorie::all();
            $proprietes = Propriete::all();

            $categorieTops = Categorie::orderBy('CodCat', 'desc')->paginate(4);
            $proprieteTops = Propriete::orderBy('NumProp', 'desc')->paginate(3);

            $view->with(compact('categories', 'categorieTops', 'proprietes', 'proprieteTops'));
        });
    }
}
