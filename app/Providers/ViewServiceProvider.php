<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Partager les catégories avec toutes les vues
        View::composer('*', function ($view) {
            // Récupérer toutes les catégories uniques depuis loja_products
            $categories = [];

            if (config()->has('loja_products')) {
                $allProducts = collect(config('loja_products'));
                $categories = $allProducts
                    ->pluck('category')
                    ->unique()
                    ->mapWithKeys(function ($category) {
                        $categoryName = strtoupper(str_replace('-', ' ', $category));
                        return [$category => $categoryName];
                    })
                    ->toArray();

                // Optionnel : trier les catégories par ordre alphabétique
                asort($categories);
            }

            $view->with('categories', $categories);
        });
    }
}
