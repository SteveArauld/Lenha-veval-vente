<?php

namespace App\Http\Controllers;

use App\Repositories\LojaProduct;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $pelletProducts = LojaProduct::query()
            ->applyFilters(['category' => 'pellets-de-madeira'])
            ->paginate(16);

        $lenhaProducts = LojaProduct::query()
            ->applyFilters(['category' => 'lenha'])
            ->paginate(12);

        $chefProducts = LojaProduct::query()
            ->applyFilters(['category' => 'chef-de-madeira'])
            ->paginate(12);

        $compactadaProducts = LojaProduct::query()
            ->applyFilters(['category' => 'madeira-compactada'])
            ->paginate(12);

        $caldeiraProducts = LojaProduct::query()
            ->applyFilters(['category' => 'caldeira-de-lenha'])
            ->paginate(4);


        $granelProducts = LojaProduct::query()
            ->applyFilters(['category' => 'a-granel'])
            ->paginate(4);

        $madeiraFogoProducts = LojaProduct::query()
            ->applyFilters(['category' => 'madeira-de-fogo'])
            ->paginate(8);

        return view('home', compact(
            'pelletProducts',
            'lenhaProducts',
            'chefProducts',
            'compactadaProducts',
            'caldeiraProducts',
            'granelProducts',
            'madeiraFogoProducts'
        ));
    }


    public function quickView($id)
    {
        $allProducts = collect(config('loja_products', []));
        $product = $allProducts->firstWhere('id', $id);

        if (!$product) {
            return response()->json([
                'success' => false,
                'message' => 'Produit non trouvé'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'product' => $product
        ]);
    }
    public function loja()
    {
        // Récupérer tous les filtres depuis la requête
        $filters = [
            'category' => request('product_cat'),
            'min_price' => (float) request('min_price', 110),
            'max_price' => (float) request('max_price', 2997),
            'in_stock' => request('stock') == '0' ? true : false,
            'search' => request('s'),
            'orderby' => request('orderby', 'menu_order'),
            'page' => request('page', 1),
            'product_visibility' => request('product_visibility'),
            'stock' => request('stock'),
            'colors' => request('colors', []),
        ];



        // Appliquer les filtres et obtenir les produits
        $query = LojaProduct::query();

        // Appliquer tous les filtres
        $query->applyFilters($filters);

        // Paginer les résultats
        $lojaProducts = $query->paginate(12);

        // Passer les valeurs actuelles pour les inputs
        $currentFilters = [
            'min_price' => $filters['min_price'],
            'max_price' => $filters['max_price'],
            'product_cat' => $filters['category'],
            'stock' => request('stock'),
            'orderby' => $filters['orderby'],
            's' => $filters['search']
        ];


      //  dd($lojaProducts);
        return view('loja', compact('lojaProducts', 'filters', 'currentFilters'));
    }

    public function carrinho()
    {
        $cart = session()->get('cart', []);

        // Calculer les totaux
        $totalItems = 0;
        $totalPrice = 0.00;

        foreach ($cart as $item) {
            $itemQuantity = (int) ($item['quantity'] ?? 0);
            $itemPrice = $this->cleanPrice($item['price'] ?? 0);

            $totalItems += $itemQuantity;
            $totalPrice += ($itemPrice * $itemQuantity);
        }

        // Formater avec 3 décimales
        $formattedTotalPrice = $this->formatPrice($totalPrice);

        // Récupérer les produits pour la section panier vide
        $allProducts = collect(config('loja_products', []));
        $newProducts = $allProducts->take(4)->map(function($product) {
            $product['price'] = $this->cleanPrice($product['price'] ?? 0);
            $product['old_price'] = isset($product['old_price']) ? $this->cleanPrice($product['old_price']) : null;
            return $product;
        });


      //  dd($cart);
        return view('carrinho', [
            'cart' => $cart,
            'totalItems' => $totalItems,
            'totalPrice' => $totalPrice,
            'formattedTotalPrice' => $formattedTotalPrice,
            'isEmpty' => empty($cart),
            'newProducts' => $newProducts
        ]);



    }
    private function getNewProducts()
    {
        $allProducts = collect(config('loja_products', []));
        return $allProducts->take(4)->map(function($product) {
            $product['price'] = $this->cleanPrice($product['price'] ?? 0);
            $product['old_price'] = isset($product['old_price']) ? $this->cleanPrice($product['old_price']) : null;
            return $product;
        });
    }

    /**
     * Afficher la page détaillée d'un produit
     */
    public function show($slug)
    {
        // Récupérer le produit par son slug
        $allProducts = collect(config('loja_products'));
        $product = $allProducts->firstWhere('slug', $slug);



        // Si le produit n'existe pas, rediriger vers la page d'accueil
        if (!$product) {
            abort(404);
        }

        // Récupérer les produits de la même catégorie (pour la section "Produits liés")
        $relatedProducts = $allProducts
            ->where('category', $product['category'])
            ->where('id', '!=', $product['id'])
            ->take(4);

        // Récupérer les produits précédent et suivant
        $allProductsSorted = $allProducts->values();
        $currentIndex = $allProductsSorted->search(function ($item) use ($product) {
            return $item['id'] == $product['id'];
        });

        $prevProduct = null;
        $nextProduct = null;

        if ($currentIndex > 0) {
            $prevProduct = $allProductsSorted[$currentIndex - 1];
        }

        if ($currentIndex < $allProductsSorted->count() - 1) {
            $nextProduct = $allProductsSorted[$currentIndex + 1];
        }

        // Formater les prix
        $formatPrice = function ($price) {
            return number_format(floatval($price), 2, ',', ' ');
        };

        //dd($nextProduct);



        // Passer les données à la vue
        return view('products.show', compact(
            'product',
            'relatedProducts',
            'prevProduct',
            'nextProduct',
            'formatPrice'
        ));
    }

    private function formatPrice($price)
    {
        return number_format($price, 3, ',', ' ');
    }


    /**
     * Afficher les produits par catégorie
     */
    public function category($category)
    {
        $filters = [
            'category' => $category ?? request('product_cat'),
            'min_price' => (float) request('min_price', 110),
            'max_price' => (float) request('max_price', 2997),
            'in_stock' => request('stock') == '0' ? true : false,
            'search' => request('s'),
            'orderby' => request('orderby', 'menu_order'),
            'page' => request('page', 1),
            'product_visibility' => request('product_visibility'),
            'stock' => request('stock'),
            'colors' => request('colors', []),
        ];



        // Appliquer les filtres et obtenir les produits
        $query = LojaProduct::query();

        // Appliquer tous les filtres
        $query->applyFilters($filters);

        // Paginer les résultats
        $lojaProducts = $query->paginate(12);

        // Passer les valeurs actuelles pour les inputs
        $currentFilters = [
            'min_price' => $filters['min_price'],
            'max_price' => $filters['max_price'],
            'product_cat' => $filters['category'],
            'stock' => request('stock'),
            'orderby' => $filters['orderby'],
            's' => $filters['search']
        ];

        $categoryName = strtoupper(str_replace('-', ' ', $category));

        return view('category', compact('lojaProducts', 'filters', 'currentFilters','categoryName'));
    }

    public function addToCart(Request $request)
    {
        try {
            $productId = $request->input('product_id');
            $quantity = $request->input('quantity', 1);

            // Valider l'ID du produit
            if (!$productId) {
                return response()->json([
                    'success' => false,
                    'message' => 'ID du produit manquant.'
                ], 400);
            }

            // Valider la quantité
            $quantity = (int) $quantity;
            if ($quantity < 1) {
                $quantity = 1;
            }

            // Récupérer le produit depuis la configuration
            $allProducts = collect(config('loja_products', []));

            if ($allProducts->isEmpty()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Aucun produit disponible.'
                ], 404);
            }

            // Chercher le produit par ID
            $product = null;
            foreach ($allProducts as $prod) {
                if (isset($prod['id']) && $prod['id'] == $productId) {
                    $product = $prod;
                    break;
                }
            }

            if (!$product) {
                return response()->json([
                    'success' => false,
                    'message' => 'Produit non trouvé avec ID: ' . $productId
                ], 404);
            }

            // Nettoyer et valider le prix
            $price = $this->cleanPrice($product['price'] ?? 0);

            // Préparer les données du produit
            $productData = [
                'id' => $productId,
                'title' => $product['title'] ?? 'Produit sans nom',
                'price' => $price,
                'quantity' => $quantity,
                'image' => $product['images'][0] ?? ($product['image'] ?? null),
                'slug' => $product['slug'] ?? 'produit-' . $productId,
                'old_price' => $product['old_price'],
                'short_description' => $product['short_description'],


            ];

            // Récupérer le panier depuis la session
            $cart = session()->get('cart', []);

            // Ajouter ou mettre à jour le produit dans le panier
            if (isset($cart[$productId])) {
                $cart[$productId]['quantity'] += $quantity;
            } else {
                $cart[$productId] = $productData;
            }

            // Sauvegarder dans la session
            session()->put('cart', $cart);

            // Calculer les totaux
            $totalItems = 0;
            $totalPrice = 0;

            foreach ($cart as $item) {
                $itemQuantity = (int) ($item['quantity'] ?? 0);
                $itemPrice = $this->cleanPrice($item['price'] ?? 0);

                $totalItems += $itemQuantity;
                $totalPrice += ($itemPrice * $itemQuantity);
            }

            return response()->json([
                'success' => true,
                'message' => 'Produit ajouté au panier!',
                'cart' => $cart,
                'totalItems' => $totalItems,
                'totalPrice' => number_format($totalPrice, 2, '.', ''),
                'product' => $cart[$productId]
            ]);

        } catch (\Exception $e) {
            \Log::error('Erreur dans addToCart: ' . $e->getMessage());
            \Log::error('Trace: ' . $e->getTraceAsString());

            return response()->json([
                'success' => false,
                'message' => 'Une erreur est survenue lors de l\'ajout au panier.'
            ], 500);
        }
    }



    public function getCartContent()
    {
        try {
            $cart = session()->get('cart', []);
            $totalItems = 0;
            $totalPrice = 0.00;

            foreach ($cart as $item) {
                $itemQuantity = (int) ($item['quantity'] ?? 0);
                $itemPrice = $this->cleanPrice($item['price'] ?? 0);

                $totalItems += $itemQuantity;
                $totalPrice += ($itemPrice * $itemQuantity);
            }

            return response()->json([
                'success' => true,
                'cart' => $cart,
                'totalItems' => $totalItems,
                'totalPrice' => $totalPrice,
                'formattedTotalPrice' => $this->formatPrice($totalPrice)
            ]);
        } catch (\Exception $e) {
            \Log::error('Erreur dans getCartContent: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'cart' => [],
                'totalItems' => 0,
                'totalPrice' => 0.00
            ]);
        }
    }
    public function debugProducts()
    {
        $products = config('loja_products', []);

        echo "<pre>";
        echo "Nombre de produits: " . count($products) . "\n\n";

        foreach ($products as $index => $product) {
            echo "Produit #{$index}:\n";
            echo "ID: " . ($product['id'] ?? 'N/A') . "\n";
            echo "Titre: " . ($product['title'] ?? 'N/A') . "\n";
            echo "Prix: " . ($product['price'] ?? 'N/A') . " (Type: " . gettype($product['price'] ?? 'N/A') . ")\n";
            echo "Prix nettoyé: " . $this->cleanPrice($product['price'] ?? 0) . "\n";
            echo "---\n";
        }

        exit();
    }


    public function updateCart(Request $request)
    {
        try {
            $productId = $request->input('product_id');
            $quantity = (int) $request->input('quantity', 1);

            $cart = session()->get('cart', []);

            if (isset($cart[$productId])) {
                if ($quantity < 1) {
                    unset($cart[$productId]);
                } else {
                    $cart[$productId]['quantity'] = $quantity;
                }

                session()->put('cart', $cart);

                $totalItems = 0;
                $totalPrice = 0.00;

                foreach ($cart as $item) {
                    $itemQuantity = (int) ($item['quantity'] ?? 0);
                    $itemPrice = $this->cleanPrice($item['price'] ?? 0);

                    $totalItems += $itemQuantity;
                    $totalPrice += ($itemPrice * $itemQuantity);
                }

                return response()->json([
                    'success' => true,
                    'cart' => $cart,
                    'totalItems' => $totalItems,
                    'totalPrice' => $totalPrice,
                    'formattedTotalPrice' => $this->formatPrice($totalPrice)
                ]);
            }

            return response()->json(['success' => false, 'message' => 'Produit non trouvé'], 404);

        } catch (\Exception $e) {
            \Log::error('Erreur updateCart: ' . $e->getMessage());
            return response()->json(['success' => false], 500);
        }
    }

    public function removeFromCart(Request $request)
    {
        try {
            $productId = $request->input('product_id');
            $cart = session()->get('cart', []);

            if (isset($cart[$productId])) {
                unset($cart[$productId]);
                session()->put('cart', $cart);

                $totalItems = 0;
                $totalPrice = 0.00;

                foreach ($cart as $item) {
                    $itemQuantity = (int) ($item['quantity'] ?? 0);
                    $itemPrice = $this->cleanPrice($item['price'] ?? 0);

                    $totalItems += $itemQuantity;
                    $totalPrice += ($itemPrice * $itemQuantity);
                }

                return response()->json([
                    'success' => true,
                    'message' => 'Produit retiré du panier',
                    'cart' => $cart,
                    'totalItems' => $totalItems,
                    'totalPrice' => $totalPrice,
                    'formattedTotalPrice' => $this->formatPrice($totalPrice)
                ]);
            }

            return response()->json(['success' => false, 'message' => 'Produit non trouvé'], 404);

        } catch (\Exception $e) {
            \Log::error('Erreur removeFromCart: ' . $e->getMessage());
            return response()->json(['success' => false], 500);
        }
    }
    private function cleanPrice($price)
    {
        if (is_numeric($price)) {
            return (float) $price;
        }

        if (empty($price)) {
            return 0.000;
        }

        if (is_string($price)) {
            $price = str_replace(',', '.', $price);
            $price = preg_replace('/[^\d.]/', '', $price);
            return (float) $price;
        }

        return 0.000;
    }


    public function clearCart(Request $request)
    {
        session()->forget('cart');
        return response()->json(['success' => true]);
    }


    /**
     * Ajouter un produit à la liste de souhaits
     */
    public function addToWishlist($productId)
    {
        $allProducts = collect(config('loja_products'));
        $product = $allProducts->firstWhere('id', $productId);

        if (!$product) {
            return redirect()->back()->with('error', 'Produit non trouvé.');
        }

        // Logique pour ajouter à la liste de souhaits
        $wishlist = session()->get('wishlist', []);

        if (!in_array($productId, $wishlist)) {
            $wishlist[] = $productId;
            session()->put('wishlist', $wishlist);

            return redirect()->back()->with('success', 'Produit ajouté à votre liste de souhaits!');
        }

        return redirect()->back()->with('info', 'Produit déjà dans votre liste de souhaits.');
    }


    public function getMiniCartHtml()
    {
        try {
            $cart = session()->get('cart', []);
            $totalItems = 0;
            $totalPrice = 0.00;

            foreach ($cart as $item) {
                $itemQuantity = (int) ($item['quantity'] ?? 0);
                $itemPrice = $this->cleanPrice($item['price'] ?? 0);

                $totalItems += $itemQuantity;
                $totalPrice += ($itemPrice * $itemQuantity);
            }

            // Formater le prix avec 3 décimales
            $formattedTotalPrice = number_format($totalPrice, 3, ',', ' ');

            // Générer le HTML du mini-panier (desktop et mobile)
            $desktopHtml = '';
            $mobileHtml = '';

            if (empty($cart)) {
                // ============ VERSION DESKTOP (vide) ============
                $desktopHtml = '
            <div class="mcart-border">
                <ul class="cart_empty">
                    <li><span>Seu carrinho está vazio</span></li>
                    <li class="total">
                        <a class="button wc-continue" href="' . route('loja') . '">
                            Continuar A Comprar
                            <i class="tb-icon tb-icon-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>';

                // ============ VERSION MOBILE (vide) ============
                $mobileHtml = '
            <div class="mcart-border">
                <ul class="cart_empty">
                    <li><span>Seu carrinho está vazio</span></li>
                    <li class="total">
                        <a class="button wc-continue" href="' . route('loja') . '">
                            Continuar A Comprar
                            <i class="tb-icon tb-icon-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>';
            } else {
                // ============ VERSION DESKTOP (avec produits) ============
                $desktopProductsHtml = '';
                foreach ($cart as $productId => $item) {
                    $itemPrice = $this->cleanPrice($item['price'] ?? 0);
                    $itemQuantity = (int) ($item['quantity'] ?? 0);
                    $itemTotal = $itemPrice * $itemQuantity;
                    $formattedItemPrice = number_format($itemPrice, 3, ',', ' ');
                    $formattedItemTotal = number_format($itemTotal, 3, ',', ' ');

                    $desktopProductsHtml .= '
                <li class="mini-cart-item mini_cart_item">
                    <div class="product-image">
                        <a class="image" href="' . route('product.show', ['slug' => $item['slug'] ?? '']) . '">
                            <img width="100" height="100"
                                 src="' . (!empty($item['image']) ? asset($item['image']) : 'https://via.placeholder.com/100') . '"
                                 class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail"
                                 alt="' . htmlspecialchars($item['title'] ?? 'Produit') . '"
                                 decoding="async">
                        </a>
                    </div>
                    <div class="product-details">
                        <a class="product-name" href="' . route('product.show', ['slug' => $item['slug'] ?? '']) . '">
                            <span>' . htmlspecialchars($item['title'] ?? 'Produit') . '</span>
                        </a>
                        <div class="group">
                            <div class="quantity-wrap">
                                <div class="quantity">
                                    <label class="screen-reader-text" for="quantity_desktop_' . $productId . '">
                                        Quantidade de ' . htmlspecialchars($item['title'] ?? 'Produit') . '
                                    </label>
                                    <span class="box">
                                        <div class="quantity-selector">
                                            <button type="button" class="quantity-minus" data-product-id="' . $productId . '">−
                                            </button>
                                            <input type="number" class="quantity-input"
                                               data-product-id="' . $productId . '"
                                               value="' . $itemQuantity . '"
                                                aria-label="Quantidade do produto"
                                              >

                                            <button type="button" class="quantity-plus" data-product-id="' . $productId . '">＋
                                            </button>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <span class="woocommerce-Price-amount amount">
                                <bdi>' . $formattedItemPrice . '&nbsp;
                                <span class="woocommerce-Price-currencySymbol">€</span></bdi>
                            </span>
                        </div>
                        <a role="button" href="javascript:void(0);"
                           class="remove mini-cart-remove"
                           data-product-id="' . $productId . '"
                           data-cart-type="desktop"
                           aria-label="Remover ' . htmlspecialchars($item['title'] ?? 'Produit') . ' do carrinho">
                            <i class="tb-icon tb-icon-trash"></i>
                        </a>
                    </div>
                </li>';
                }

                $desktopHtml = '
            <div class="mcart-border">
                <ul class="cart_list product_list_widget p-0">' . $desktopProductsHtml . '</ul>
                <div class="group-button">
                    <p class="total">
                        <strong>Subtotal:</strong>
                        <span class="woocommerce-Price-amount amount">
                            <bdi>' . $formattedTotalPrice . '&nbsp;
                            <span class="woocommerce-Price-currencySymbol">€</span></bdi>
                        </span>
                    </p>
                    <p class="buttons">
                        <a href="' . route('carrinho') . '" class="button view-cart">Ver Carrinho</a>
                        <a href="'. route('checkout'). '" class="button checkout">Checkout</a>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>';

                // ============ VERSION MOBILE (avec produits) ============
                $mobileProductsHtml = '';
                foreach ($cart as $productId => $item) {
                    $itemPrice = $this->cleanPrice($item['price'] ?? 0);
                    $itemQuantity = (int) ($item['quantity'] ?? 0);
                    $itemTotal = $itemPrice * $itemQuantity;
                    $formattedItemPrice = number_format($itemPrice, 3, ',', ' ');
                    $formattedItemTotal = number_format($itemTotal, 3, ',', ' ');

                    $mobileProductsHtml .= '
                <li class="mini-cart-item mini_cart_item">
                    <div class="product-image">
                        <a class="image" href="' . route('product.show', ['slug' => $item['slug'] ?? '']) . '">
                            <img width="100" height="100"
                                 src="' . (!empty($item['image']) ? asset($item['image']) : 'https://via.placeholder.com/100') . '"
                                 class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail"
                                 alt="' . htmlspecialchars($item['title'] ?? 'Produit') . '"
                                 decoding="async">
                        </a>
                    </div>
                    <div class="product-details">
                        <a class="product-name" href="' . route('product.show', ['slug' => $item['slug'] ?? '']) . '">
                            <span>' . htmlspecialchars($item['title'] ?? 'Produit') . '</span>
                        </a>
                        <div class="group">
                            <div class="quantity-wrap">
                                <div class="quantity">
                                    <label class="screen-reader-text" for="quantity_mobile_' . $productId . '">
                                        Quantidade de ' . htmlspecialchars($item['title'] ?? 'Produit') . '
                                    </label>
                                    <span class="box">
                                         <div class="quantity-selector">
                                            <button type="button" class="quantity-minus" data-product-id="' . $productId . '">−
                                            </button>
                                            <input type="number" class="quantity-input"
                                               data-product-id="' . $productId . '"
                                               value="' . $itemQuantity . '"
                                                aria-label="Quantidade do produto"
                                              >

                                            <button type="button" class="quantity-plus" data-product-id="' . $productId . '">＋
                                            </button>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <span class="woocommerce-Price-amount amount">
                                <bdi>' . $formattedItemPrice . '&nbsp;
                                <span class="woocommerce-Price-currencySymbol">€</span></bdi>
                            </span>
                        </div>
                        <a role="button" href="javascript:void(0);"
                           class="remove mini-cart-remove"
                           data-product-id="' . $productId . '"
                           data-cart-type="mobile"
                           aria-label="Remover ' . htmlspecialchars($item['title'] ?? 'Produit') . ' do carrinho">
                            <i class="tb-icon tb-icon-trash"></i>
                        </a>
                    </div>
                </li>';
                }

                $mobileHtml = '
            <div class="mcart-border">
                <ul class="cart_list product_list_widget p-0" >' . $mobileProductsHtml . '</ul>
                <div class="group-button">
                    <p class="total">
                        <strong>Subtotal:</strong>
                        <span class="woocommerce-Price-amount amount">
                            <bdi>' . $formattedTotalPrice . '&nbsp;
                            <span class="woocommerce-Price-currencySymbol">€</span></bdi>
                        </span>
                    </p>
                    <p class="buttons">
                        <a href="' . route('carrinho') . '" class="button view-cart">Ver Carrinho</a>
                        <a href="'. route('checkout'). '" class="button checkout">Checkout</a>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>';
            }

            return response()->json([
                'success' => true,
                'desktop_html' => $desktopHtml,
                'mobile_html' => $mobileHtml,
                'totalItems' => $totalItems,
                'totalPrice' => $totalPrice,
                'formattedTotalPrice' => $formattedTotalPrice,
                'isEmpty' => empty($cart)
            ]);

        } catch (\Exception $e) {
            \Log::error('Erreur getMiniCartHtml: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'desktop_html' => '<div class="mcart-border"><p>Erro ao carregar o carrinho</p></div>',
                'mobile_html' => '<div class="mcart-border"><p>Erro ao carregar o carrinho</p></div>'
            ]);
        }
    }
    public function listaDeDesejos()
    {
        return view('lista-de-desejos');
    }




    public function sobreNos()
    {
        return view('pages.sobre-nos');
    }

    public function avisosLegais()
    {
        return view('pages.avisos-legais');
    }

    public function contacto()
    {
        return view('pages.contacto');
    }

    public function politicaDePrivacidade()
    {
        return view('pages.politica-de-privacidade');
    }

    public function condicoesGeraisGeVendaCgv()
    {
        return view('pages.condicoes-gerais-de-venda-cgv');
    }

    public function termosCondicoesGeraisDeUtilizacaoTcg()
    {
        return view('pages.termos-e-condicoes-gerais-de-utilizacao-tcg');
    }

    public function politicaDeEntrega()
    {
        return view('pages.politica-de-entrega');
    }

    public function politicaDeReembolso()
    {
        return view('pages.politica-de-reembolso');
    }

    public function politicaDePagamento()
    {
        return view('pages.politica-de-pagamento');
    }
    public function finalizacaoDeCompra()
    {
        return view('finalizacao-de-compra');
    }

}
