<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WishlistController extends Controller
{
    public function add(Request $request)
    {
        try {
            $validated = $request->validate([
                'product_id' => 'required|string',
                'product_title' => 'required|string',
                'product_price' => 'required|string',
                'product_image' => 'required|string',
                'product_slug' => 'required|string',
            ]);

            $productId = $validated['product_id'];

            $wishlist = Session::get('wishlist', []);

            // Vérifier si le produit n'existe pas déjà
            if (!isset($wishlist[$productId])) {
                $wishlist[$productId] = [
                    'id' => $productId,
                    'title' => $validated['product_title'],
                    'price' => $validated['product_price'],
                    'image' => $validated['product_image'],
                    'slug' => $validated['product_slug'],
                    'added_at' => now()->toDateTimeString()
                ];

                Session::put('wishlist', $wishlist);

                return response()->json([
                    'success' => true,
                    'message' => 'Produit ajouté à la liste de souhaits',
                    'count' => count($wishlist)
                ]);
            }

            return response()->json([
                'success' => false,
                'message' => 'Produit déjà dans la liste de souhaits',
                'count' => count($wishlist)
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erreur: ' . $e->getMessage()
            ], 500);
        }
    }

    public function remove(Request $request)
    {
        try {
            $validated = $request->validate([
                'product_id' => 'required|string',
            ]);

            $productId = $validated['product_id'];
            $wishlist = Session::get('wishlist', []);

            if (isset($wishlist[$productId])) {
                unset($wishlist[$productId]);
                Session::put('wishlist', $wishlist);

                return response()->json([
                    'success' => true,
                    'message' => 'Produit retiré de la liste de souhaits',
                    'count' => count($wishlist)
                ]);
            }

            return response()->json([
                'success' => false,
                'message' => 'Produit non trouvé dans la liste de souhaits'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erreur: ' . $e->getMessage()
            ], 500);
        }
    }

    public function index()
    {
        $wishlist = Session::get('wishlist', []);
        $allProducts = collect(config('loja_products', []));

        $wishlistProducts = [];
        foreach ($wishlist as $item) {
            $product = $allProducts->firstWhere('id', $item['id']);
            if ($product) {
                $wishlistProducts[] = array_merge($product, [
                    'added_at' => $item['added_at'] ?? now()->toDateTimeString()
                ]);
            }
        }

        return view('lista-de-desejos', [
            'wishlistProducts' => $wishlistProducts,
            'wishlistCount' => count($wishlist)
        ]);
    }

    public function getCount()
    {
        $wishlist = Session::get('wishlist', []);
        return response()->json(['count' => count($wishlist)]);
    }
}
