<?php

namespace App\Http\Controllers;

use App\Mail\AdminOrderNotification;
use App\Mail\OrderConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    protected $pays;

    public function __construct()
    {

        $this->pays = config('countries');

    }

    public function show()
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('carrinho')->with('error', 'Seu carrinho está vazio.');
        }

        // Calculer les totaux
        $totalItems = 0;
        $totalPrice = 0.00;

        foreach ($cart as $item) {
            $itemQuantity = (int) ($item['quantity'] ?? 0);
            $itemPrice = $this->cleanPrice($item['price'] ?? 0);

            $totalItems += $itemQuantity;
            $totalPrice += ($itemPrice * $itemQuantity);
        }

        return view('checkout', [
            'cart' => $cart,
            'totalItems' => $totalItems,
            'totalPrice' => $totalPrice,
            'formattedTotalPrice' => number_format($totalPrice, 3, ',', ' '),
            'isEmpty' => empty($cart),
            'pays' => $this->pays,
        ]);
    }

    public function confirmation()
    {
        $order = session()->get('last_order');

        if (! $order) {
            return redirect()->route('home');
        }

        return view('checkout.confirmation', [
            'order' => $order,
        ]);
    }

    public function store(Request $request)
    {

//        dd($request);
        // Valider les données du formulaire
        $validated = $request->validate([
            'shipping_method' => 'required|string|max:255',
            'payment_method' => 'required|string|max:255',
            'order_notes' => 'nullable|string|max:1000',
            'email' => 'required|email',
            'shipping-country' => 'required|string|max:100',
            'shipping-first_name' => 'required|string|max:255',
            'shipping-last_name' => 'required|string|max:255',
            'shipping-address_1' => 'required|string|max:500',
            'shipping-address_2' => 'nullable|string|max:500',
            'shipping-city' => 'required|string|max:255',
            'shipping-postcode' => 'required|string|max:20',
            'shipping-phone' => 'nullable|string|max:20',

            'billing-country' => 'required|string|max:100',
            'billing-first_name' => 'required|string|max:255',
            'billing-last_name' => 'required|string|max:255',
            'billing-address_1' => 'required|string|max:500',
            'billing-address_2' => 'nullable|string|max:500',
            'billing-city' => 'required|string|max:255',
            'billing-postcode' => 'required|string|max:20',
            'billing-phone' => 'nullable|string|max:20',
        ]);

        // Récupérer le panier
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('carrinho')->with('error', 'Seu carrinho está vazio.');
        }

        // Calculer les totaux
        $totalItems = 0;
        $totalPrice = 0.00;

        foreach ($cart as $item) {
            $itemQuantity = (int) ($item['quantity'] ?? 0);
            $itemPrice = $this->cleanPrice($item['price'] ?? 0);

            $totalItems += $itemQuantity;
            $totalPrice += ($itemPrice * $itemQuantity);
        }

        // Générer un numéro de commande
        $orderNumber = rand(1000, 9999);

        // Préparer les données de la commande avec les données du formulaire
        $orderData = [
            'order_number' => $orderNumber,
            'date' => now()->format('F d, Y'),
            'shipping_method' => $validated['shipping_method'],
            'payment_method' => 'Transferência bancária',
            'customer' => [
                'email' => $validated['email'],
                'first_name' => $validated['shipping-first_name'],
                'last_name' => $validated['shipping-last_name'],
                'address_1' => $validated['shipping-address_1'],
                'address_2' => $validated['shipping-address_2'] ?? '',
                'city' => $validated['shipping-city'],
                'postcode' => $validated['shipping-postcode'],
                'country' => $validated['shipping-country'],
                'phone' => $validated['shipping-phone'] ?? '',
            ],
            'billing' => [
                'first_name' => $validated['billing-first_name'],
                'last_name' => $validated['billing-last_name'],
                'address_1' => $validated['billing-address_1'],
                'address_2' => $validated['billing-address_2'] ?? '',
                'city' => $validated['billing-city'],
                'postcode' => $validated['billing-postcode'],
                'country' => $validated['billing-country'],
                'phone' => $validated['billing-phone'] ?? '',
            ],
            'items' => $cart,
            'total_items' => $totalItems,
            'total_price' => $totalPrice,
            'formatted_total_price' => number_format($totalPrice, 3, ',', ' '),
            'order_comments' => $validated['order_notes'] ?? '',
            'order_date' => now()->format('Y-m-d H:i:s'),
        ];

        try {
            // Envoyer l'email de confirmation au client
            Mail::to($validated['email'])->send(new OrderConfirmation($orderData));

            // Envoyer la notification à l'admin
            $adminEmail = config('mail.admin_email', 'contactlehnaviva@gmail.com');
            if ($adminEmail) {
                Mail::to($adminEmail)->send(new AdminOrderNotification($orderData));
            }

            // Sauvegarder la commande dans la session et localStorage
            session()->put('last_order', $orderData);

            // Vider le panier après la commande
            session()->forget('cart');

            // Rediriger vers la page de confirmation
            return redirect()->route('checkout.confirmation')->with([
                'order_data' => $orderData,
                'success' => 'Sua encomenda foi recebida com sucesso!',
            ]);

        } catch (\Exception $e) {
            \Log::error('Erro no checkout: '.$e->getMessage());

            return back()->with('error', 'Ocorreu um erro ao processar sua encomenda. Por favor, tente novamente.')->withInput();
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
}
