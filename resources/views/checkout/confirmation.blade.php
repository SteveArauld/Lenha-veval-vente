@extends('layouts.app')

@section('title', __('Accueil'))

@push('styles')
@endpush

@section('content')
    @include('layouts.partials.navbar.public-show')

    <div id="tbay-main-content" class="mm-page mm-slideout">
        <div class="title-not-breadcrumbs">
            <div class="container">
                <h1 class="page-title">Finalização de compra</h1>
            </div>
        </div>
        <section id="main-container" class="container">
            <div class="row ">
                <div id="main-content" class="main-page col-12">
                    <div id="main" class="site-main">
                        <div class="woocommerce">
                            <div class="woocommerce-order">


                                <p style="margin: 0;line-height: 31px;border: 1px solid var(--tb-border-color);border-bottom: 0;padding: 20px 26px;font-size: 17px;font-weight: 700;color: var(--button-color); display: flex;justify-content:space-between;"
                                    class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">
                                    ✅ Obrigado. A sua encomenda foi recebida.</p>

                                <ul style="border: 1px solid var(--tb-border-color);border-top: 0;padding: 18px 24px 26px;display: flex;justify-content: space-between;"
                                    class="woocommerce-order-overview woocommerce-thankyou-order-details order_details">

                                    <li class="woocommerce-order-overview__order order">
                                        Número de encomenda: <strong>{{ $order['order_number'] }}</strong>
                                    </li>

                                    <li class="woocommerce-order-overview__date date">
                                        Data: <strong>{{ $order['date'] }}</strong>
                                    </li>


                                    <li class="woocommerce-order-overview__total total">
                                        Total: <strong><span
                                                class="woocommerce-Price-amount amount"><bdi>{{ $order['total_price'] }}&nbsp;<span
                                                        class="woocommerce-Price-currencySymbol">€</span></bdi></span></strong>
                                    </li>

                                    <li class="woocommerce-order-overview__payment-method method">
                                        Método de pagamento: <strong>{{ $order['payment_method'] }}</strong>
                                    </li>

                                </ul>


                            </div>
                            {{-- <p>Caro cliente,</p>
                            <p>Obrigado pelo seu pedido. Para confirmar o seu pedido, transfira o valor do mesmo para o
                                conta bancária do nosso gestor de contas e envie-nos por e-mail o seu comprovativo de
                                confirmação para: contactlehnaviva@gmail.com antes da entrega.</p>
                            <p>Titular: MARIA NEVES ALVES MAIA </p>
                            <p>IBAN: PT50 0189 0006 0642 6010 0055 5</p>
                            <p>BIC: BAPAPTPL</p>
                            <p>TRANSFERÊNCIA IMEDIATA</p>
                            <p>Toda a equipa da LENHA VIVA agradece a sua confiança e deseja-lhe um bom dia.</p>
                            <section class="woocommerce-bacs-bank-details"><h2 class="wc-bacs-bank-details-heading">Os
                                    nossos dados bancários</h2>
                                <h3 class="wc-bacs-bank-details-account-name">MARIA NEVES ALVES MAIA:</h3>
                                <ul class="wc-bacs-bank-details order_details bacs_details">
                                    <li class="iban">IBAN: <strong>PT50 0189 0006 0642 6010 0055 5</strong></li>
                                    <li class="bic">BIC: <strong>BAPAPTPL</strong></li>
                                </ul>
                            </section> --}}
                            <section class="woocommerce-order-details">

                                <h2 class="woocommerce-order-details__title">Detalhes da encomenda</h2>

                                <table class="woocommerce-table woocommerce-table--order-details shop_table order_details">

                                    <style>
                                        #textr {
                                            text-align: right !important;
                                        }
                                    </style>
                                    <thead>
                                        <tr>
                                            <th class="woocommerce-table__product-name product-name">Produto</th>
                                            <th class="woocommerce-table__product-table product-total" id="textr">Total
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($order['items'] as $item)
                                            <tr class="woocommerce-table__line-item order_item">

                                                <td class="woocommerce-table__product-name product-name ">
                                                    {{ $item['title'] ?? ($item['name'] ?? 'Produto') }} <strong
                                                        class="product-quantity">×&nbsp;{{ $item['quantity'] }}</strong>
                                                </td>

                                                <td class="woocommerce-table__product-total product-total" id="textr">
                                                    <span class="woocommerce-Price-amount amount"><bdi>{{ $item['price'] * $item['quantity'] }}&nbsp;<span
                                                                class="woocommerce-Price-currencySymbol">€</span></bdi></span>
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <th scope="row">Subtotal:</th>
                                            <td id="textr"><span
                                                    class="woocommerce-Price-amount amount">{{ $order['total_price'] }}&nbsp;<span
                                                        class="woocommerce-Price-currencySymbol">€</span></span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Envio:</th>
                                            <td id="textr">Envio grátis</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Total:</th>
                                            <td id="textr"><span
                                                    class="woocommerce-Price-amount amount">{{ $order['total_price'] }}&nbsp;<span
                                                        class="woocommerce-Price-currencySymbol">€</span></span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Método de pagamento:</th>
                                            <td id="textr">{{ $order['payment_method'] }}</td>
                                        </tr>
                                        @if (!empty($order['order_comments']))
                                            <tr>
                                                <th>Nota:</th>
                                                <td id="textr">
                                                    {{ $order['order_comments'] }} </td>
                                            </tr>
                                        @endif
                                    </tfoot>
                                </table>

                            </section>

                            <section class="woocommerce-customer-details">


                                <section
                                    class="woocommerce-columns woocommerce-columns--2 woocommerce-columns--addresses col2-set addresses">
                                    <div
                                        class="woocommerce-column woocommerce-column--1 woocommerce-column--billing-address col-1">


                                        <h2 class="woocommerce-column__title">Morada de facturação</h2>

                                        <address>
                                            {{ $order['billing']['first_name'] }} {{ $order['billing']['last_name'] }}
                                            <br>{{ $order['billing']['address_1'] }}<br>
                                            @if (!empty($order['billing']['address_2']))
                                                {{ $order['billing']['address_2'] }}<br>
                                            @endif
                                            {{ $order['billing']['city'] }}<br>
                                            {{ $order['billing']['postcode'] }}<br>
                                            {{ $order['billing']['country'] }}
                                            @if (!empty($order['billing']['phone']))
                                                <p class="woocommerce-customer-details--phone">
                                                    {{ $order['billing']['phone'] }}</p>
                                            @endif

                                            <p class="woocommerce-customer-details--email">
                                                {{ $order['customer']['email'] }}</p>

                                        </address>


                                    </div><!-- /.col-1 -->

                                    <div
                                        class="woocommerce-column woocommerce-column--2 woocommerce-column--shipping-address col-2">
                                        <h2 class="woocommerce-column__title">Morada de envio</h2>
                                        <address>
                                            {{ $order['customer']['first_name'] }} {{ $order['customer']['last_name'] }}
                                            <br>{{ $order['customer']['address_1'] }}<br>
                                            @if (!empty($order['customer']['address_2']))
                                                {{ $order['customer']['address_2'] }}<br>
                                            @endif
                                            {{ $order['customer']['city'] }}<br>
                                            {{ $order['customer']['postcode'] }}<br>
                                            {{ $order['customer']['country'] }}
                                            @if (!empty($order['customer']['phone']))
                                                <p class="woocommerce-customer-details--phone">
                                                    {{ $order['customer']['phone'] }}</p>
                                            @endif
                                        </address>
                                    </div><!-- /.col-2 -->

                                </section><!-- /.col2-set -->


                            </section>


                        </div>
                    </div>
                </div><!-- .site-main -->

            </div><!-- .content-area -->
    </div>
    </section>

    </div>
    @include('layouts.partials.footer.public')

@endsection

@push('scripts')
@endpush
