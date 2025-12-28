<?php

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;
use function Laravel\Pail\exists;

class LojaProduct
{
    protected Collection $items;

    public function __construct()
    {
        $this->items =  collect(config('loja_products'));
    }

    public static function query(): self
    {
        return new self();
    }

    public function where(string $key, $value): self
    {
        $this->items = $this->items->where($key, $value);
        return $this;
    }

    public function search(string $term): self
    {
        $term = strtolower($term);

        $this->items = $this->items->filter(function ($item) use ($term) {
            return str_contains(strtolower($item['title']), $term)
                || str_contains(strtolower($item['slug']), $term);
        });

        return $this;
    }

    public function orderBy(string $key, string $direction = 'asc'): self
    {
        $this->items = $direction === 'asc'
            ? $this->items->sortBy($key)
            : $this->items->sortByDesc($key);

        return $this;
    }

    public function paginate(int $perPage = 15): LengthAwarePaginator
    {
        $page = request('page', 1);

        $results = $this->items
            ->slice(($page - 1) * $perPage, $perPage)
            ->values();

        return new LengthAwarePaginator(
            $results,
            $this->items->count(),
            $perPage,
            $page,
            [
                'path' => request()->url(),
                'query' => request()->query(),
            ]
        );
    }

    public function get(): Collection
    {
        return $this->items->values();
    }

    public static function find($id): ?array
    {
        return collect(config('loja_products'))->firstWhere('id', $id);
    }

    // NOUVELLE MÉTHODE POUR LE FILTRAGE AVANCÉ
    public function applyFilters(array $filters = []): self
    {
        // Filtre par catégorie
        if (isset($filters['category']) && $filters['category']) {
            $this->items = $this->items->where('category', $filters['category']);

        }

        // Filtre par prix
        if (isset($filters['min_price']) && isset($filters['max_price'])) {
            $this->items = $this->items->filter(function ($item) use ($filters) {
                $price = (float) str_replace([',', ' '], '', $item['price']);
                return $price >= $filters['min_price'] && $price <= $filters['max_price'];
            });
        }

        // Filtre par disponibilité
        if (isset($filters['in_stock']) && $filters['in_stock']) {
            $this->items = $this->items->where('in_stock', true);
        }

        if (!empty($filters['product_visibility']) && $filters['product_visibility'] == 'featured') {
            // Filtre pour produits en vedette
        }

        if (!empty($filters['stock']) && $filters['stock'] == 'instock') {
            // Filtre pour produits en stock
        }

        if (!empty($filters['pa_color'])) {
            // Filtre pour couleurs (vous aurez besoin d'ajouter un champ 'color' à vos produits)
            $this->items = $this->items->filter(function ($item) use ($filters) {
                return isset($item['color']) && in_array($item['color'], $filters['colors']);
            });
        }

        // Recherche par texte
        if (isset($filters['search']) && $filters['search']) {
            $this->search($filters['search']);
        }

        // Tri
        if (isset($filters['orderby'])) {
            switch ($filters['orderby']) {
                case 'price':
                    $this->orderBy('price', 'asc');
                    break;
                case 'price-desc':
                    $this->orderBy('price', 'desc');
                    break;
                case 'date':
                    // Si vous avez un champ 'date' dans vos produits
                    $this->orderBy('id', 'desc');
                    break;
                case 'title':
                    $this->orderBy('title', 'asc');
                    break;
                default:
                    $this->orderBy('id', 'asc');
            }
        }

        return $this;
    }
}
