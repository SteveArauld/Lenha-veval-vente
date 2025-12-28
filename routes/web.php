<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\HomeController::class,'index'])->name('home');


Route::get('/loja',[App\Http\Controllers\HomeController::class,'loja'])->name('loja');
Route::get('/carrinho',[App\Http\Controllers\HomeController::class,'carrinho'])->name('carrinho');
Route::get('/lista-de-desejos',[App\Http\Controllers\HomeController::class,'listaDeDesejos'])->name('lista-de-desejos');

//Route::get('/contacto',[App\Http\Controllers\HomeController::class,'contacto'])->name('contacto');
//Route::get('/finalizacao-de-compra',[App\Http\Controllers\HomeController::class,'finalizacaoDeCompra'])->name('finalizacao-de-compra');
//Route::get('finalizacao-de-compra/order-received',[App\Http\Controllers\HomeController::class,'orderReceived'])->name('order-received');


Route::get('/product/{slug}', [HomeController::class, 'show'])->name('product.show');
Route::get('/category/product-category/{category}', [HomeController::class, 'category'])->name('category');
//Route::get('/lista-desejos/adicionar/{productId}', [HomeController::class, 'addToWishlist'])->name('wishlist.add');



Route::get('/debug/products', [HomeController::class, 'debugProducts']);

Route::get('/sobre-nos',[App\Http\Controllers\HomeController::class,'sobreNos'])->name('sobre-nos');
Route::get('/avisos-legais',[App\Http\Controllers\HomeController::class,'avisosLegais'])->name('avisos-legais');
Route::get('/contacto',[App\Http\Controllers\HomeController::class,'contacto'])->name('contacto');
Route::get('/politica-de-privacidade',[App\Http\Controllers\HomeController::class,'politicaDePrivacidade'])->name('politica-de-privacidade');
Route::get('/condicoes-gerais-de-venda-cgv',[App\Http\Controllers\HomeController::class,'condicoesGeraisGeVendaCgv'])->name('condicoes-gerais-de-venda-cgv');
Route::get('/termos-e-condicoes-gerais-de-utilizacao-tcg',[App\Http\Controllers\HomeController::class,'termosCondicoesGeraisDeUtilizacaoTcg'])->name('termos-e-condicoes-gerais-de-utilizacao-tcg');
Route::get('/politica-de-entrega',[App\Http\Controllers\HomeController::class,'politicaDeEntrega'])->name('politicaDeEntrega');
Route::get('/politica-de-reembolso',[App\Http\Controllers\HomeController::class,'politicaDeReembolso'])->name('politicaDeReembolso');
Route::get('/politica-de-pagamento',[App\Http\Controllers\HomeController::class,'politicaDePagamento'])->name('politicaDePagamento');



Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');




Route::post('/carrinho/adicionar', [HomeController::class, 'addToCart'])->name('cart.add');
Route::get('/carrinho/conteudo', [HomeController::class, 'getCartContent'])->name('cart.content');

Route::post('/carrinho/atualizar', [HomeController::class, 'updateCart'])->name('cart.update');
Route::post('/carrinho/remover', [HomeController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/carrinho/limpar', [HomeController::class, 'clearCart'])->name('cart.clear');

Route::get('/carrinho/mini-cart-html', [HomeController::class, 'getMiniCartHtml'])->name('cart.mini.html');




// Checkout routes
Route::get('/finalizacao-de-compra', [CheckoutController::class, 'show'])->name('checkout');
Route::post('/finalizacao-de-compra/processar', [CheckoutController::class, 'process'])->name('checkout.process');
Route::get('/finalizacao-de-compra/confirmacao', [CheckoutController::class, 'confirmation'])->name('checkout.confirmation');



Route::prefix('lista-desejos')->group(function () {
    Route::get('/', [WishlistController::class, 'index'])->name('wishlist.index');
    Route::post('/adicionar', [WishlistController::class, 'add'])->name('wishlist.add');
    Route::post('/remover', [WishlistController::class, 'remove'])->name('wishlist.remove');
  //  Route::get('/contador', [WishlistController::class, 'getCount'])->name('wishlist.count');
});


Route::get('/product/quick-view/{id}', [App\Http\Controllers\HomeController::class, 'quickView'])->name('product.quickview');


// Ajoutez cette ligne dans vos routes
Route::get('/refresh-csrf-token', function() {
    return response()->json([
        'token' => csrf_token()
    ]);
})->middleware('web')->name('refresh');

Route::get('/debug/session', function () {
    echo '<h1>Session Debug</h1>';

    echo '<h2>Toutes les données de session :</h2>';
    echo '<pre>';
    print_r(session()->all());
    echo '</pre>';

    echo '<h2>Panier :</h2>';
    echo '<pre>';
    print_r(session('cart', []));
    echo '</pre>';

    echo '<h2>Infos session :</h2>';
    echo '<ul>';
    echo '<li>Session ID: ' . session()->getId() . '</li>';
    echo '<li>CSRF Token: ' . csrf_token() . '</li>';
    echo '<li>Durée de vie: ' . config('session.lifetime') . ' minutes</li>';
    echo '</ul>';

    echo '<h2>Cookies :</h2>';
    echo '<pre>';
    print_r($_COOKIE);
    echo '</pre>';
});
