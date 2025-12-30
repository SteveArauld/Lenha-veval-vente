@extends('layouts.app')

@section('title', __('Finalização de Compra'))

@push('styles')
    <link rel='stylesheet' id='wc-blocks-style-checkout-css'
        href='{{ asset('wp-content/plugins/woocommerce/assets/client/blocks/checkoutff9f.css') }}' type='text/css'
        media='all' />
    <style>
        .wc-block-components-text-input label {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            background-color: white;
            padding: 0 5px;
            transition: all 0.2s ease;
            color: #666;
            pointer-events: none;
            z-index: 1;
            font-size: 14px;
        }

        .wc-block-components-text-input input:focus+label,
        .wc-block-components-text-input input:not(:placeholder-shown)+label,
        .wc-block-components-text-input input.has-value+label {
            top: 0;
            transform: translateY(-50%) scale(0.85);
            color: #007cba;
            font-size: 12px;
        }

        .wc-block-components-text-input input {
            padding: 15px 10px 5px 10px;
            height: 50px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 100%;
            font-size: 16px;
            background-color: transparent;
            position: relative;
        }

        .wc-block-components-text-input input:focus {
            outline: none;
            border-color: #007cba;
            box-shadow: 0 0 0 1px #007cba;
        }

        /* Pour les selects */
        .wc-blocks-components-select {
            position: relative;
            margin-bottom: 20px;
        }

        .wc-blocks-components-select__label {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            background-color: white;
            padding: 0 5px;
            transition: all 0.2s ease;
            color: #666;
            pointer-events: none;
            z-index: 1;
            font-size: 14px;
        }

        .wc-blocks-components-select__select:focus+.wc-blocks-components-select__label,
        .wc-blocks-components-select__select:not([value=""])+.wc-blocks-components-select__label,
        .wc-blocks-components-select__select.has-value+.wc-blocks-components-select__label {
            top: 0;
            transform: translateY(-50%) scale(0.85);
            color: #007cba;
            font-size: 12px;
        }

        .wc-blocks-components-select__select {
            padding: 15px 10px 5px 10px;
            height: 50px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 100%;
            font-size: 16px;
            background-color: transparent;
            position: relative;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        .wc-blocks-components-select__container {
            position: relative;
        }

        .wc-blocks-components-select__expand {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
            z-index: 2;
        }

        /* Styles d'erreur */
        .error-field {
            border-color: #dc3545 !important;
            background-color: #fff8f8 !important;
        }

        .error-field:focus {
            border-color: #dc3545 !important;
            box-shadow: 0 0 0 1px #dc3545 !important;
        }

        .field-error {
            color: #dc3545;
            font-size: 12px;
            display: block;
            margin-top: 5px;
            font-weight: normal;
        }

        .checkout-alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            font-size: 16px;
        }

        .checkout-alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .checkout-alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .checkout-alert-error ul {
            margin: 0;
            padding-left: 20px;
        }

        .cart-empty-checkout {
            text-align: center;
            padding: 50px 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            margin: 30px 0;
        }

        .cart-empty-checkout h2 {
            color: #333;
            margin-bottom: 15px;
        }

        .cart-empty-checkout p {
            color: #666;
            margin-bottom: 20px;
        }

        .btn-continue-shopping {
            display: inline-block;
            background-color: #007cba;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 20px;
            transition: background-color 0.3s;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-continue-shopping:hover {
            background-color: #005a87;
            color: white;
            text-decoration: none;
        }

        /* Style pour le textarea des notes */
        .wc-block-checkout__add-note textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-top: 10px;
            resize: vertical;
            font-family: inherit;
        }

        /* Pour le champ email spécifique */
        .wc-block-components-address-form__email input {
            padding: 15px 10px 5px 10px;
            height: 50px;
        }

        /* Animation pour les champs d'erreur */
        @keyframes shake {

            0%,
            100% {
                transform: translateX(0);
            }

            10%,
            30%,
            50%,
            70%,
            90% {
                transform: translateX(-5px);
            }

            20%,
            40%,
            60%,
            80% {
                transform: translateX(5px);
            }
        }

        .error-field {
            animation: shake 0.5s ease-in-out;
        }
    </style>
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
            <div class="row">
                <div id="main-content" class="main-page col-12">
                    <div id="main" class="site-main">

                        @if (session('success'))
                            <div class="checkout-alert checkout-alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="checkout-alert checkout-alert-error">
                                {{ session('error') }}
                            </div>
                        @endif

                        <!-- Afficher les erreurs de validation -->
                        @if ($errors->any())
                            <div class="checkout-alert checkout-alert-error">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if ($isEmpty)
                            <div class="cart-empty-checkout">
                                <h2>Seu carrinho está vazio</h2>
                                <p>Adicione produtos ao seu carrinho antes de finalizar a compra.</p>
                                <a href="{{ route('home') }}" class="btn-continue-shopping">
                                    Continuar a comprar
                                </a>
                            </div>
                        @else
                            <!-- Le contenu original de votre formulaire checkout -->
                            <div data-block-name="woocommerce/checkout"
                                class="wp-block-woocommerce-checkout alignwide wc-block-checkout">
                                <div class="with-scroll-to-top__scroll-point" aria-hidden="true"></div>
                                <div class="wc-block-components-notices"></div>
                                <div class="wc-block-components-notices__snackbar wc-block-components-notice-snackbar-list"
                                    tabindex="-1">
                                    <div></div>
                                </div>
                                <div class="wc-block-components-sidebar-layout wc-block-checkout is-large">
                                    <div aria-hidden="true"
                                        style="position: absolute; inset: 0px; pointer-events: none; opacity: 0; overflow: hidden; z-index: -1;">
                                    </div>
                                    <div
                                        class="wc-block-components-main wc-block-checkout__main wp-block-woocommerce-checkout-fields-block">
                                        <form method="POST" action="{{ route('checkout.store') }}"
                                            aria-label="Finalizar compras"
                                            class="wc-block-components-form wc-block-checkout__form" id="checkout-form">
                                            @csrf

                                            <!-- Champs cachés pour les méthodes -->
                                            <input type="hidden" name="shipping_method" id="shipping_method"
                                                value="free_shipping:3">
                                            <input type="hidden" name="payment_method" id="payment_method" value="bacs">
                                            <input type="hidden" name="order_notes" id="order_notes">

                                            <div></div>

                                            <fieldset
                                                class="wc-block-checkout__contact-fields wp-block-woocommerce-checkout-contact-information-block wc-block-components-checkout-step"
                                                id="contact-fields">
                                                <legend class="screen-reader-text">Informação de contacto</legend>
                                                <div class="wc-block-components-checkout-step__heading">
                                                    <h2
                                                        class="wc-block-components-title wc-block-components-checkout-step__title">
                                                        Informação de contacto</h2><span
                                                        class="wc-block-components-checkout-step__heading-content"></span>
                                                </div>
                                                <div class="wc-block-components-checkout-step__container">
                                                    <p class="wc-block-components-checkout-step__description">Usaremos
                                                        esta conta de email para lhe enviar detalhes e actualizações
                                                        relacionadas com a sua encomenda.</p>
                                                    <div class="wc-block-components-checkout-step__content">
                                                        <div class="wc-block-components-notices"></div>
                                                        <div class="wc-block-components-notices__snackbar wc-block-components-notice-snackbar-list"
                                                            tabindex="-1">
                                                            <div></div>
                                                        </div>
                                                        <div id="contact" class="wc-block-components-address-form">
                                                            <div
                                                                class="wc-block-components-text-input wc-block-components-address-form__email">
                                                                <input type="email" id="email" name="email"
                                                                    autocapitalize="none" autocomplete="email"
                                                                    aria-label="Endereço de email"
                                                                    aria-describedby="wc-guest-checkout-notice"
                                                                    required="" aria-invalid="false" title=""
                                                                    value="{{ old('email') }}" placeholder=" ">
                                                                <label for="email">Endereço de email</label>
                                                                @error('email')
                                                                    <span class="field-error">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <p id="wc-guest-checkout-notice"
                                                                class="wc-block-checkout__guest-checkout-notice">
                                                                Actualmente está a finalizar a encomenda como
                                                                convidado.</p>
                                                            <div
                                                                class="wc-block-components-checkbox wc-block-checkout__create-account">
                                                                <label for="checkbox-control-0"><input
                                                                        id="checkbox-control-0"
                                                                        class="wc-block-components-checkbox__input"
                                                                        type="checkbox" aria-invalid="false" value="">
                                                                    <svg class="wc-block-components-checkbox__mark"
                                                                        aria-hidden="true"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 20">
                                                                        <path
                                                                            d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z">
                                                                        </path>
                                                                    </svg>
                                                                    <span class="wc-block-components-checkbox__label">Criar
                                                                        uma conta com Lenha Viva</span></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <div data-block-name="woocommerce/checkout-shipping-method-block"
                                                class="wp-block-woocommerce-checkout-shipping-method-block"></div>

                                            <div data-block-name="woocommerce/checkout-pickup-options-block"
                                                class="wp-block-woocommerce-checkout-pickup-options-block"></div>

                                            <fieldset
                                                class="wc-block-checkout__shipping-fields wp-block-woocommerce-checkout-shipping-address-block wc-block-components-checkout-step"
                                                id="shipping-fields">
                                                <legend class="screen-reader-text">Morada de envio</legend>
                                                <div class="wc-block-components-checkout-step__heading">
                                                    <h2
                                                        class="wc-block-components-title wc-block-components-checkout-step__title">
                                                        Morada de envio</h2>
                                                </div>
                                                <div class="wc-block-components-checkout-step__container">
                                                    <p class="wc-block-components-checkout-step__description">Introduza
                                                        a morada onde deseja que a encomenda seja entregue.</p>
                                                    <div class="wc-block-components-checkout-step__content">
                                                        <div class="wc-block-components-notices"></div>
                                                        <div class="wc-block-components-notices__snackbar wc-block-components-notice-snackbar-list"
                                                            tabindex="-1">
                                                            <div></div>
                                                        </div>
                                                        <div
                                                            class="wc-block-components-address-address-wrapper is-editing">
                                                            <div class="wc-block-components-address-card-wrapper">
                                                                <div class="wc-block-components-address-card">
                                                                    <address><span
                                                                            class="wc-block-components-address-card__address-section"></span>
                                                                        <div
                                                                            class="wc-block-components-address-card__address-section">
                                                                            <span> </span><span>Portugal</span>
                                                                        </div>
                                                                    </address>
                                                                    <span type="button"
                                                                        class="wc-block-components-address-card__edit"
                                                                        aria-controls="shipping" aria-expanded="true"
                                                                        aria-label="Edit shipping address" tabindex="0"
                                                                        role="button">Editar</span>
                                                                </div>
                                                            </div>
                                                            <div class="wc-block-components-address-form-wrapper">
                                                                <div id="shipping"
                                                                    class="wc-block-components-address-form">
                                                                    <div
                                                                        class="wc-block-components-address-form__country wc-block-components-country-input">
                                                                        <div class="wc-blocks-components-select">
                                                                            <div
                                                                                class="wc-blocks-components-select__container">
                                                                                <select size="1"
                                                                                    class="wc-blocks-components-select__select"
                                                                                    id="shipping-country"
                                                                                    name="shipping-country"
                                                                                    aria-invalid="false"
                                                                                    autocomplete="country">
                                                                                    <option value=""
                                                                                        data-alternate-values="[Selecione um país/região]"
                                                                                        disabled="">Selecione um
                                                                                        país/região
                                                                                    </option>
                                                                                    @foreach ($pays as $code => $nom)
                                                                                        <option value="{{ $code }}"
                                                                                            {{ old('shipping-country') == $code ? 'selected' : '' }}>
                                                                                            {{ $nom }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                                <label for="shipping-country"
                                                                                    class="wc-blocks-components-select__label">País/Região</label>
                                                                                <svg viewBox="0 0 24 24"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    class="wc-blocks-components-select__expand"
                                                                                    aria-hidden="true" focusable="false">
                                                                                    <path
                                                                                        d="M17.5 11.6L12 16l-5.5-4.4.9-1.2L12 14l4.5-3.6 1 1.2z">
                                                                                    </path>
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="wc-block-components-text-input wc-block-components-address-form__first_name">
                                                                        <input type="text" id="shipping-first_name"
                                                                            name="shipping-first_name"
                                                                            autocapitalize="sentences"
                                                                            autocomplete="given-name" aria-label="Nome"
                                                                            aria-describedby="" required=""
                                                                            aria-invalid="false" title=""
                                                                            value="{{ old('shipping-first_name') }}"
                                                                            placeholder=" ">
                                                                        <label for="shipping-first_name">Nome</label>
                                                                        @error('shipping-first_name')
                                                                            <span
                                                                                class="field-error">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                    <div
                                                                        class="wc-block-components-text-input wc-block-components-address-form__last_name">
                                                                        <input type="text" id="shipping-last_name"
                                                                            name="shipping-last_name"
                                                                            autocapitalize="sentences"
                                                                            autocomplete="family-name"
                                                                            aria-label="Apelido" aria-describedby=""
                                                                            required="" aria-invalid="false"
                                                                            title=""
                                                                            value="{{ old('shipping-last_name') }}"
                                                                            placeholder=" ">
                                                                        <label for="shipping-last_name">Apelido</label>
                                                                        @error('shipping-last_name')
                                                                            <span
                                                                                class="field-error">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                    <div
                                                                        class="wc-block-components-text-input wc-block-components-address-form__address_1">
                                                                        <input type="text" id="shipping-address_1"
                                                                            name="shipping-address_1"
                                                                            autocapitalize="sentences"
                                                                            autocomplete="address-line1"
                                                                            aria-label="Endereço" aria-describedby=""
                                                                            required="" aria-invalid="false"
                                                                            title=""
                                                                            value="{{ old('shipping-address_1') }}"
                                                                            placeholder=" ">
                                                                        <label for="shipping-address_1">Endereço</label>
                                                                        @error('shipping-address_1')
                                                                            <span
                                                                                class="field-error">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>

                                                                    <div
                                                                        class="wc-block-components-text-input wc-block-components-address-form__address_2">
                                                                        <input type="text" id="shipping-address_2"
                                                                            name="shipping-address_2"
                                                                            autocapitalize="sentences"
                                                                            autocomplete="address-line2"
                                                                            aria-label="Morada (linha 2, opcional)"
                                                                            aria-describedby="" aria-invalid="false"
                                                                            title=""
                                                                            value="{{ old('shipping-address_2') }}"
                                                                            placeholder=" ">
                                                                        <label for="shipping-address_2">Morada (linha 2,
                                                                            opcional)</label>
                                                                    </div>
                                                                    <div
                                                                        class="wc-block-components-text-input wc-block-components-address-form__city">
                                                                        <input type="text" id="shipping-city"
                                                                            name="shipping-city"
                                                                            autocapitalize="sentences"
                                                                            autocomplete="address-level2"
                                                                            aria-label="Cidade" aria-describedby=""
                                                                            required="" aria-invalid="false"
                                                                            title=""
                                                                            value="{{ old('shipping-city') }}"
                                                                            placeholder=" ">
                                                                        <label for="shipping-city">Cidade</label>
                                                                        @error('shipping-city')
                                                                            <span
                                                                                class="field-error">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                    <div
                                                                        class="wc-block-components-text-input wc-block-components-address-form__postcode">
                                                                        <input type="text" id="shipping-postcode"
                                                                            name="shipping-postcode"
                                                                            autocapitalize="characters"
                                                                            autocomplete="postal-code"
                                                                            aria-label="Código postal" aria-describedby=""
                                                                            required="" aria-invalid="false"
                                                                            title=""
                                                                            value="{{ old('shipping-postcode') }}"
                                                                            placeholder=" ">
                                                                        <label for="shipping-postcode">Código
                                                                            postal</label>
                                                                        @error('shipping-postcode')
                                                                            <span
                                                                                class="field-error">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                    <div
                                                                        class="wc-block-components-text-input wc-block-components-address-form__phone">
                                                                        <input type="tel" id="shipping-phone"
                                                                            name="shipping-phone"
                                                                            autocapitalize="characters" autocomplete="tel"
                                                                            aria-label="Telefone (opcional)"
                                                                            aria-describedby="" aria-invalid="false"
                                                                            title=""
                                                                            value="{{ old('shipping-phone') }}"
                                                                            placeholder=" ">
                                                                        <label for="shipping-phone">Telefone
                                                                            (opcional)</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="wc-block-components-checkbox wc-block-checkout__use-address-for-billing">
                                                            <label for="checkbox-control-1"><input id="checkbox-control-1"
                                                                    class="wc-block-components-checkbox__input"
                                                                    type="checkbox" aria-invalid="false" value=""
                                                                    checked="">
                                                                <svg class="wc-block-components-checkbox__mark"
                                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 24 20">
                                                                    <path
                                                                        d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z">
                                                                    </path>
                                                                </svg>
                                                                <span class="wc-block-components-checkbox__label">Usar o
                                                                    mesmo endereço para facturação</span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <fieldset
                                                class="wc-block-checkout__billing-fields wp-block-woocommerce-checkout-billing-address-block wc-block-components-checkout-step"
                                                id="billing-fields">
                                                <legend class="screen-reader-text">Morada de facturação</legend>
                                                <div class="wc-block-components-checkout-step__heading">
                                                    <h2
                                                        class="wc-block-components-title wc-block-components-checkout-step__title">
                                                        Morada de facturação</h2>
                                                </div>
                                                <div class="wc-block-components-checkout-step__container">
                                                    <p class="wc-block-components-checkout-step__description">Digite o
                                                        endereço de facturação que corresponde ao seu método de
                                                        pagamento.</p>
                                                    <div class="wc-block-components-checkout-step__content">
                                                        <div class="wc-block-components-notices"></div>
                                                        <div class="wc-block-components-notices__snackbar wc-block-components-notice-snackbar-list"
                                                            tabindex="-1">
                                                            <div></div>
                                                        </div>
                                                        <div
                                                            class="wc-block-components-address-address-wrapper is-editing">
                                                            <div class="wc-block-components-address-card-wrapper">
                                                                <div class="wc-block-components-address-card">
                                                                    <address><span
                                                                            class="wc-block-components-address-card__address-section"></span>
                                                                        <div
                                                                            class="wc-block-components-address-card__address-section">
                                                                            <span> </span><span>Portugal</span>
                                                                        </div>
                                                                    </address>
                                                                    <span type="button"
                                                                        class="wc-block-components-address-card__edit"
                                                                        aria-controls="billing" aria-expanded="true"
                                                                        aria-label="Edit billing address" tabindex="0"
                                                                        role="button">Editar</span>
                                                                </div>
                                                            </div>
                                                            <div class="wc-block-components-address-form-wrapper">
                                                                <div id="billing"
                                                                    class="wc-block-components-address-form">
                                                                    <div
                                                                        class="wc-block-components-address-form__country wc-block-components-country-input">
                                                                        <div class="wc-blocks-components-select">
                                                                            <div
                                                                                class="wc-blocks-components-select__container">
                                                                                <select size="1"
                                                                                    class="wc-blocks-components-select__select"
                                                                                    id="billing-country"
                                                                                    name="billing-country"
                                                                                    aria-invalid="false"
                                                                                    autocomplete="country">
                                                                                    <option value=""
                                                                                        data-alternate-values="[Selecione um país/região]"
                                                                                        disabled="">Selecione um
                                                                                        país/região
                                                                                    </option>
                                                                                    @foreach ($pays as $code => $nom)
                                                                                        <option
                                                                                            value="{{ $code }}"
                                                                                            {{ old('billing-country') == $code ? 'selected' : '' }}>
                                                                                            {{ $nom }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                                <label for="billing-country"
                                                                                    class="wc-blocks-components-select__label">País/Região</label>
                                                                                <svg viewBox="0 0 24 24"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    class="wc-blocks-components-select__expand"
                                                                                    aria-hidden="true" focusable="false">
                                                                                    <path
                                                                                        d="M17.5 11.6L12 16l-5.5-4.4.9-1.2L12 14l4.5-3.6 1 1.2z">
                                                                                    </path>
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="wc-block-components-text-input wc-block-components-address-form__first_name">
                                                                        <input type="text" id="billing-first_name"
                                                                            name="billing-first_name"
                                                                            autocapitalize="sentences"
                                                                            autocomplete="given-name" aria-label="Nome"
                                                                            aria-describedby="" required=""
                                                                            aria-invalid="false" title=""
                                                                            value="{{ old('billing-first_name') }}"
                                                                            placeholder=" ">
                                                                        <label for="billing-first_name">Nome</label>
                                                                        @error('billing-first_name')
                                                                            <span
                                                                                class="field-error">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                    <div
                                                                        class="wc-block-components-text-input wc-block-components-address-form__last_name">
                                                                        <input type="text" id="billing-last_name"
                                                                            name="billing-last_name"
                                                                            autocapitalize="sentences"
                                                                            autocomplete="family-name"
                                                                            aria-label="Apelido" aria-describedby=""
                                                                            required="" aria-invalid="false"
                                                                            title=""
                                                                            value="{{ old('billing-last_name') }}"
                                                                            placeholder=" ">
                                                                        <label for="billing-last_name">Apelido</label>
                                                                        @error('billing-last_name')
                                                                            <span
                                                                                class="field-error">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                    <div
                                                                        class="wc-block-components-text-input wc-block-components-address-form__address_1">
                                                                        <input type="text" id="billing-address_1"
                                                                            name="billing-address_1"
                                                                            autocapitalize="sentences"
                                                                            autocomplete="address-line1"
                                                                            aria-label="Endereço" aria-describedby=""
                                                                            required="" aria-invalid="false"
                                                                            title=""
                                                                            value="{{ old('billing-address_1') }}"
                                                                            placeholder=" ">
                                                                        <label for="billing-address_1">Endereço</label>
                                                                        @error('billing-address_1')
                                                                            <span
                                                                                class="field-error">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>

                                                                    <div
                                                                        class="wc-block-components-text-input wc-block-components-address-form__city">
                                                                        <input type="text" id="billing-city"
                                                                            name="billing-city" autocapitalize="sentences"
                                                                            autocomplete="address-level2"
                                                                            aria-label="Cidade" aria-describedby=""
                                                                            required="" aria-invalid="false"
                                                                            title=""
                                                                            value="{{ old('billing-city') }}"
                                                                            placeholder=" ">
                                                                        <label for="billing-city">Cidade</label>
                                                                        @error('billing-city')
                                                                            <span
                                                                                class="field-error">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                    <div
                                                                        class="wc-block-components-text-input wc-block-components-address-form__postcode">
                                                                        <input type="text" id="billing-postcode"
                                                                            name="billing-postcode"
                                                                            autocapitalize="characters"
                                                                            autocomplete="postal-code"
                                                                            aria-label="Código postal" aria-describedby=""
                                                                            required="" aria-invalid="false"
                                                                            title=""
                                                                            value="{{ old('billing-postcode') }}"
                                                                            placeholder=" ">
                                                                        <label for="billing-postcode">Código postal</label>
                                                                        @error('billing-postcode')
                                                                            <span
                                                                                class="field-error">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                    <div
                                                                        class="wc-block-components-text-input wc-block-components-address-form__phone">
                                                                        <input type="tel" id="billing-phone"
                                                                            name="billing-phone"
                                                                            autocapitalize="characters" autocomplete="tel"
                                                                            aria-label="Telefone (opcional)"
                                                                            aria-describedby="" aria-invalid="false"
                                                                            title=""
                                                                            value="{{ old('billing-phone') }}"
                                                                            placeholder=" ">
                                                                        <label for="billing-phone">Telefone
                                                                            (opcional)</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <fieldset
                                                class="wc-block-checkout__shipping-option wp-block-woocommerce-checkout-shipping-methods-block wc-block-components-checkout-step"
                                                id="shipping-option">
                                                <legend class="screen-reader-text">Opções de entrega</legend>
                                                <div class="wc-block-components-checkout-step__heading">
                                                    <h2
                                                        class="wc-block-components-title wc-block-components-checkout-step__title">
                                                        Opções de entrega</h2>
                                                </div>
                                                <div class="wc-block-components-checkout-step__container">
                                                    <div class="wc-block-components-checkout-step__content">
                                                        <div class="wc-block-components-notices"></div>
                                                        <div class="wc-block-components-notices__snackbar wc-block-components-notice-snackbar-list"
                                                            tabindex="-1">
                                                            <div></div>
                                                        </div>
                                                        <div class="">
                                                            <div class="" aria-hidden="false">
                                                                <div
                                                                    class="wc-block-components-shipping-rates-control css-0 e19lxcc00">
                                                                    <div
                                                                        class="wc-block-components-shipping-rates-control__package">
                                                                        <div
                                                                            class="wc-block-components-radio-control wc-block-components-radio-control--highlight-checked--first-selected wc-block-components-radio-control--highlight-checked--last-selected wc-block-components-radio-control--highlight-checked">
                                                                            <label
                                                                                class="wc-block-components-radio-control__option wc-block-components-radio-control__option-checked wc-block-components-radio-control__option--checked-option-highlighted"
                                                                                for="radio-control-0-free_shipping:3"><input
                                                                                    id="radio-control-0-free_shipping:3"
                                                                                    class="wc-block-components-radio-control__input"
                                                                                    type="radio" name="radio-control-0"
                                                                                    aria-describedby="radio-control-0-free_shipping:3__secondary-label"
                                                                                    aria-disabled="false"
                                                                                    value="free_shipping:3"
                                                                                    checked="">
                                                                                <div
                                                                                    class="wc-block-components-radio-control__option-layout">
                                                                                    <div
                                                                                        class="wc-block-components-radio-control__label-group">
                                                                                        <span
                                                                                            id="radio-control-0-free_shipping:3__label"
                                                                                            class="wc-block-components-radio-control__label">Envio
                                                                                            grátis</span><span
                                                                                            id="radio-control-0-free_shipping:3__secondary-label"
                                                                                            class="wc-block-components-radio-control__secondary-label"><span
                                                                                                class="wc-block-checkout__shipping-option--free">Grátis</span></span>
                                                                                    </div>
                                                                                </div>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <fieldset
                                                class="wc-block-checkout__payment-method wp-block-woocommerce-checkout-payment-block wc-block-components-checkout-step"
                                                id="payment-method">
                                                <legend class="screen-reader-text">Opções de pagamento</legend>
                                                <div class="wc-block-components-checkout-step__heading">
                                                    <h2
                                                        class="wc-block-components-title wc-block-components-checkout-step__title">
                                                        Opções de pagamento</h2>
                                                </div>
                                                <div class="wc-block-components-checkout-step__container">
                                                    <div class="wc-block-components-checkout-step__content">
                                                        <div class="wc-block-components-notices"></div>
                                                        <div class="wc-block-components-notices__snackbar wc-block-components-notice-snackbar-list"
                                                            tabindex="-1">
                                                            <div></div>
                                                        </div>
                                                        <div
                                                            class="wc-block-components-radio-control wc-block-components-radio-control--highlight-checked wc-block-components-radio-control--highlight-checked--first-selected wc-block-components-radio-control--highlight-checked--last-selected disable-radio-control">
                                                            <div
                                                                class="wc-block-components-radio-control-accordion-option wc-block-components-radio-control-accordion-option--checked-option-highlighted">
                                                                <label
                                                                    class="wc-block-components-radio-control__option wc-block-components-radio-control__option-checked"
                                                                    for="radio-control-wc-payment-method-options-bacs"><input
                                                                        id="radio-control-wc-payment-method-options-bacs"
                                                                        class="wc-block-components-radio-control__input"
                                                                        type="radio"
                                                                        name="radio-control-wc-payment-method-options"
                                                                        aria-describedby="radio-control-wc-payment-method-options-bacs__content"
                                                                        aria-disabled="false" value="bacs"
                                                                        checked="">
                                                                    <div
                                                                        class="wc-block-components-radio-control__option-layout">
                                                                        <div
                                                                            class="wc-block-components-radio-control__label-group">
                                                                            <span
                                                                                id="radio-control-wc-payment-method-options-bacs__label"
                                                                                class="wc-block-components-radio-control__label"><span
                                                                                    class="wc-block-components-payment-method-label">Transferência
                                                                                    bancária</span></span>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                                <div id="radio-control-wc-payment-method-options-bacs__content"
                                                                    class="wc-block-components-radio-control-accordion-content">
                                                                    <div>Efetue o pagamento diretamente da sua conta
                                                                        bancária. Utilize o seu NIF como referência do
                                                                        pagamento. O seu pedido não será enviado até que
                                                                        os fundos sejam recebidos.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <div class="wc-block-checkout__order-notes wp-block-woocommerce-checkout-order-note-block wc-block-components-checkout-step"
                                                id="order-notes">
                                                <div class="wc-block-components-checkout-step__container">
                                                    <div class="wc-block-components-checkout-step__content">
                                                        <div class="wc-block-checkout__add-note">
                                                            <div class="wc-block-components-checkbox"><label
                                                                    for="checkbox-control-2"><input
                                                                        id="checkbox-control-2"
                                                                        class="wc-block-components-checkbox__input"
                                                                        type="checkbox" aria-invalid="false"
                                                                        value="">
                                                                    <svg class="wc-block-components-checkbox__mark"
                                                                        aria-hidden="true"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 20">
                                                                        <path
                                                                            d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z">
                                                                        </path>
                                                                    </svg>
                                                                    <span
                                                                        class="wc-block-components-checkbox__label">Adicione
                                                                        uma nota à sua encomenda</span></label>

                                                                <textarea class="wc-block-components-textarea"
                                                                    placeholder="Notas sobre a sua encomenda (por exemplo, informações especiais sobre a entrega)." rows="2">{{ old('order_notes') }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="wc-block-checkout__terms wc-block-checkout__terms--with-separator wp-block-woocommerce-checkout-terms-block">
                                                <div class="wc-block-components-checkbox">
                                                    <label for="terms-checkbox">
                                                        <input type="checkbox" id="terms-checkbox"
                                                            class="wc-block-components-checkbox__input"
                                                            name="terms_checkbox"
                                                            {{ old('terms_checkbox') ? 'checked' : '' }}>
                                                        <svg class="wc-block-components-checkbox__mark" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 20">
                                                            <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z">
                                                            </path>
                                                        </svg>
                                                        <span class="wc-block-components-checkbox__label">
                                                            Ao continuar com a compra concorda com os nossos
                                                            <a href="{{ route('condicoes-gerais-de-venda-cgv') }}"
                                                                target="_blank">Termos e condições</a>
                                                            e
                                                            <a href="{{ route('politica-de-privacidade') }}"
                                                                target="_blank">Política de privacidade</a>
                                                        </span>
                                                    </label>
                                                    @error('terms')
                                                        <span class="field-error">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div
                                                class="wc-block-checkout__actions wp-block-woocommerce-checkout-actions-block">
                                                <div class="css-0 e19lxcc00"></div>
                                                <div class="wc-block-components-notices"></div>
                                                <div class="wc-block-components-notices__snackbar wc-block-components-notice-snackbar-list"
                                                    tabindex="-1">
                                                    <div></div>
                                                </div>
                                                <div class="wc-block-checkout__actions_row">
                                                    <a href="{{ route('carrinho') ?: '#' }}"
                                                        class="wc-block-components-checkout-return-to-cart-button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            width="24" height="24" aria-hidden="true"
                                                            focusable="false">
                                                            <path
                                                                d="M20 11.2H6.8l3.7-3.7-1-1L3.9 12l5.6 5.5 1-1-3.7-3.7H20z">
                                                            </path>
                                                        </svg>
                                                        Voltar ao carrinho
                                                    </a>
                                                    <button
                                                        class="wc-block-components-button wp-element-button wc-block-components-checkout-place-order-button contained"
                                                        style="" type="submit" id="submit-order">
                                                        <div class="wc-block-components-button__text">
                                                            <div
                                                                class="wc-block-components-checkout-place-order-button__text">
                                                                Finalizar encomenda
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Resumo da encomenda -->
                                    <div
                                        class="wc-block-components-sidebar wc-block-checkout__sidebar wp-block-woocommerce-checkout-totals-block is-sticky is-large">
                                        <div class="wc-block-components-notices"></div>
                                        <div class="wc-block-components-notices__snackbar wc-block-components-notice-snackbar-list"
                                            tabindex="-1">
                                            <div></div>
                                        </div>

                                        <div class="wp-block-woocommerce-checkout-order-summary-block">
                                            <div class="wc-block-components-checkout-order-summary__title">
                                                <p class="wc-block-components-checkout-order-summary__title-text"
                                                    role="heading">Resumo da encomenda</p>
                                                <span
                                                    class="wc-block-formatted-money-amount wc-block-components-formatted-money-amount wc-block-components-checkout-order-summary__title-price">{{ $formattedTotalPrice }}
                                                    €</span>
                                                <span class="wc-block-components-checkout-order-summary__title-icon">
                                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" aria-hidden="true"
                                                        focusable="false">
                                                        <path d="M17.5 11.6L12 16l-5.5-4.4.9-1.2L12 14l4.5-3.6 1 1.2z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </div>

                                            <div class="wc-block-components-checkout-order-summary__content"
                                                id=":r1:">
                                                <div
                                                    class="wp-block-woocommerce-checkout-order-summary-cart-items-block wc-block-components-totals-wrapper">
                                                    <div class="wc-block-components-order-summary is-large">

                                                        <div class="wc-block-components-order-summary__content">
                                                            @foreach ($cart as $productId => $item)
                                                                @php
                                                                    $itemPrice = $item['price'] ?? 0;
                                                                    $itemQuantity = (int) ($item['quantity'] ?? 0);
                                                                    $itemTotal = $itemPrice * $itemQuantity;
                                                                    $formattedItemPrice = number_format(
                                                                        $itemPrice,
                                                                        3,
                                                                        ',',
                                                                        ' ',
                                                                    );
                                                                    $formattedItemTotal = number_format(
                                                                        $itemTotal,
                                                                        3,
                                                                        ',',
                                                                        ' ',
                                                                    );
                                                                @endphp
                                                                <div class="wc-block-components-order-summary-item">
                                                                    <div
                                                                        class="wc-block-components-order-summary-item__image">
                                                                        <div
                                                                            class="wc-block-components-order-summary-item__quantity">
                                                                            <span
                                                                                aria-hidden="true">{{ $itemQuantity }}</span><span
                                                                                class="screen-reader-text">{{ $itemQuantity }}
                                                                                item item</span>
                                                                        </div>
                                                                        @if (!empty($item['image']))
                                                                            <img src="{{ asset($item['image']) }}"
                                                                                alt="{{ $item['title'] }}" width="48"
                                                                                height="48">
                                                                        @else
                                                                            <div
                                                                                style="width: 48px; height: 48px; background: #f5f5f5; display: flex; align-items: center; justify-content: center;">
                                                                                <span
                                                                                    style="color: #999; font-size: 12px;">Sem
                                                                                    imagem</span>
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                    <div
                                                                        class="wc-block-components-order-summary-item__description">
                                                                        <h3 class="wc-block-components-product-name">
                                                                            {{ $item['title'] }}</h3><span
                                                                            class="wc-block-components-order-summary-item__individual-prices price wc-block-components-product-price"><span
                                                                                class="screen-reader-text">Preço
                                                                                anterior:</span><del
                                                                                class="wc-block-components-product-price__regular wc-block-components-order-summary-item__regular-individual-price">{{ $item['old_price'] }}
                                                                                €</del><span
                                                                                class="screen-reader-text">Preço com
                                                                                desconto:</span><ins
                                                                                class="wc-block-components-product-price__value is-discounted wc-block-components-order-summary-item__individual-price">{{ $item['price'] }}
                                                                                €</ins></span>
                                                                        <div class="wc-block-components-product-metadata">
                                                                            <div
                                                                                class="wc-block-components-product-metadata__description">
                                                                                <p>{{ Str::limit($item['short_description'], 70) }}
                                                                                </p>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        class="screen-reader-text">{{ $item['old_price'] }}
                                                                        €</span>
                                                                    <div class="wc-block-components-order-summary-item__total-price"
                                                                        aria-hidden="true"><span
                                                                            class="price wc-block-components-product-price"><span
                                                                                class="wc-block-formatted-money-amount wc-block-components-formatted-money-amount wc-block-components-product-price__value">{{ $itemTotal }}€</span></span>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Totais -->
                                                <div class="wp-block-woocommerce-checkout-order-summary-totals-block">
                                                    <div
                                                        class="wp-block-woocommerce-checkout-order-summary-subtotal-block wc-block-components-totals-wrapper">
                                                        <div class="wc-block-components-totals-item">
                                                            <span
                                                                class="wc-block-components-totals-item__label">Subtotal</span>
                                                            <span
                                                                class="wc-block-formatted-money-amount wc-block-components-formatted-money-amount wc-block-components-totals-item__value">{{ number_format($totalPrice, 3, ',', ' ') }}
                                                                €</span>
                                                            <div class="wc-block-components-totals-item__description">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="wp-block-woocommerce-checkout-order-summary-shipping-block wc-block-components-totals-wrapper">
                                                        <div class="wc-block-components-totals-shipping">
                                                            <div class="wc-block-components-totals-item">
                                                                <span class="wc-block-components-totals-item__label">Envio
                                                                    grátis</span>
                                                                <div class="wc-block-components-totals-item__value">
                                                                    <strong>Grátis</strong>
                                                                </div>
                                                                <div class="wc-block-components-totals-item__description">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Total final -->
                                                <div class="wc-block-components-totals-wrapper">
                                                    <div
                                                        class="wc-block-components-totals-item wc-block-components-totals-footer-item">
                                                        <span class="wc-block-components-totals-item__label">Total</span>
                                                        <div class="wc-block-components-totals-item__value">
                                                            <span
                                                                class="wc-block-formatted-money-amount wc-block-components-formatted-money-amount wc-block-components-totals-footer-item-tax-value">{{ $formattedTotalPrice }}
                                                                €</span>
                                                        </div>
                                                        <div class="wc-block-components-totals-item__description"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="display: none;"></div>
                            </div>
                        @endif

                    </div><!-- .site-main -->
                </div><!-- .content-area -->
            </div>
        </section>
    </div>

    @include('layouts.partials.footer.public')
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Initialiser les labels flottants
            function initFloatingLabels() {
                // Pour les inputs texte
                $('.wc-block-components-text-input input').each(function() {
                    const $input = $(this);
                    const $label = $input.siblings('label');

                    if ($input.val().trim() !== '') {
                        $input.addClass('has-value');
                        $label.css({
                            'top': '0',
                            'transform': 'translateY(-50%) scale(0.85)',
                            'color': '#007cba',
                            'font-size': '12px'
                        });
                    }

                    $input.on('focus', function() {
                        $label.css({
                            'top': '0',
                            'transform': 'translateY(-50%) scale(0.85)',
                            'color': '#007cba',
                            'font-size': '12px'
                        });
                        $input.addClass('has-value');
                    });

                    $input.on('blur', function() {
                        if ($input.val().trim() === '') {
                            $label.css({
                                'top': '50%',
                                'transform': 'translateY(-50%)',
                                'color': '#666',
                                'font-size': '14px'
                            });
                            $input.removeClass('has-value');
                        }
                    });

                    $input.on('input', function() {
                        if ($input.val().trim() !== '') {
                            $input.addClass('has-value');
                            $label.css({
                                'top': '0',
                                'transform': 'translateY(-50%) scale(0.85)',
                                'color': '#007cba',
                                'font-size': '12px'
                            });
                        }
                    });
                });

                // Pour les selects
                $('.wc-blocks-components-select__select').each(function() {
                    const $select = $(this);
                    const $label = $select.siblings('.wc-blocks-components-select__label');

                    if ($select.val() !== '') {
                        $select.addClass('has-value');
                        $label.css({
                            'top': '0',
                            'transform': 'translateY(-50%) scale(0.85)',
                            'color': '#007cba',
                            'font-size': '12px'
                        });
                    }

                    $select.on('focus', function() {
                        $label.css({
                            'top': '0',
                            'transform': 'translateY(-50%) scale(0.85)',
                            'color': '#007cba',
                            'font-size': '12px'
                        });
                        $select.addClass('has-value');
                    });

                    $select.on('blur', function() {
                        if ($select.val() === '') {
                            $label.css({
                                'top': '50%',
                                'transform': 'translateY(-50%)',
                                'color': '#666',
                                'font-size': '14px'
                            });
                            $select.removeClass('has-value');
                        }
                    });

                    $select.on('change', function() {
                        if ($select.val() !== '') {
                            $select.addClass('has-value');
                            $label.css({
                                'top': '0',
                                'transform': 'translateY(-50%) scale(0.85)',
                                'color': '#007cba',
                                'font-size': '12px'
                            });
                        } else {
                            $select.removeClass('has-value');
                            $label.css({
                                'top': '50%',
                                'transform': 'translateY(-50%)',
                                'color': '#666',
                                'font-size': '14px'
                            });
                        }
                    });
                });
            }

            // Initialiser les labels flottants
            initFloatingLabels();

            // Initialiser les textarea pour les notes
            const notesTextarea = $('.wc-block-components-textarea');
            const notesCheckbox = $('#checkbox-control-2');

            // Cacher le textarea au départ
            notesTextarea.hide();

            // Afficher/masquer le textarea selon l'état de la checkbox
            notesCheckbox.on('change', function() {
                if ($(this).is(':checked')) {
                    notesTextarea.slideDown();
                } else {
                    notesTextarea.slideUp();
                }
            });

            // Restaurer l'état de la checkbox notes si des données existent
            if (notesTextarea.val().trim() !== '') {
                notesCheckbox.prop('checked', true);
                notesTextarea.show();
            }

            // Gestion de la checkbox "même adresse de facturation"
            const sameAddressCheckbox = $('#checkbox-control-1');
            sameAddressCheckbox.on('change', function() {
                if ($(this).is(':checked')) {
                    // Copier les données de livraison vers la facturation
                    copyShippingToBilling();
                }
            });

            // Fonction pour copier l'adresse de livraison vers la facturation
            function copyShippingToBilling() {
                const fields = ['first_name', 'last_name', 'address_1', 'address_2', 'city', 'postcode', 'country',
                    'phone'
                ];
                fields.forEach(field => {
                    const shippingValue = $(`#shipping-${field}`).val();
                    const billingInput = $(`#billing-${field}`);

                    billingInput.val(shippingValue);

                    if (shippingValue !== '') {
                        billingInput.addClass('has-value').trigger('focus').trigger('blur');
                    } else {
                        billingInput.removeClass('has-value').trigger('blur');
                    }

                    billingInput.trigger('change');
                });

                // Mettre à jour les labels flottants
                initFloatingLabels();

                // Sauvegarder après copie
                saveFormData();
            }

            // Valider le formulaire avant soumission
            $('#checkout-form').on('submit', function(e) {
                // Désactiver le bouton pour éviter les doubles soumissions
                const submitBtn = $('#submit-order');
                submitBtn.prop('disabled', true);
                submitBtn.find('.wc-block-components-checkout-place-order-button__text').text(
                    'Processando...');

                // Valider les champs obligatoires
                let isValid = true;
                const requiredFields = [
                    'email',
                    'shipping-first_name',
                    'shipping-last_name',
                    'shipping-address_1',
                    'shipping-city',
                    'shipping-postcode',
                    'shipping-country',
                    'billing-first_name',
                    'billing-last_name',
                    'billing-address_1',
                    'billing-city',
                    'billing-postcode',
                    'billing-country'
                ];

                // Nettoyer les erreurs précédentes
                $('.field-error').remove();
                $('.error-field').removeClass('error-field');

                requiredFields.forEach(field => {
                    const element = $(`[name="${field}"]`);
                    if (element.length && !element.val().trim()) {
                        isValid = false;
                        element.addClass('error-field');

                        const errorMessage = 'Este campo é obrigatório';
                        element.closest(
                                '.wc-block-components-text-input, .wc-blocks-components-select')
                            .append(
                                `<span class="field-error">${errorMessage}</span>`
                            );
                    }
                });

                // Vérifier l'email
                const email = $('#email').val();
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (email && !emailRegex.test(email)) {
                    isValid = false;
                    $('#email').addClass('error-field');
                    if (!$('#email').closest('.wc-block-components-text-input').find('.field-error')
                        .length) {
                        $('#email').closest('.wc-block-components-text-input').append(
                            `<span class="field-error">Por favor, insira um email válido</span>`
                        );
                    }
                }

                // Vérifier les termes
                if (!$('#terms-checkbox').is(':checked')) {
                    isValid = false;
                    $('#terms-checkbox').addClass('error-field');
                    if (!$('#terms-checkbox').closest('.wc-block-components-checkbox').find('.field-error')
                        .length) {
                        $('#terms-checkbox').closest('.wc-block-components-checkbox').append(
                            `<span class="field-error">Você deve aceitar os termos e condições</span>`
                        );
                    }
                }

                if (!isValid) {
                    // Réactiver le bouton et annuler la soumission
                    e.preventDefault();
                    submitBtn.prop('disabled', false);
                    submitBtn.find('.wc-block-components-checkout-place-order-button__text').text(
                        'Finalizar encomenda');

                    // Faire défiler jusqu'à la première erreur
                    $('html, body').animate({
                        scrollTop: $('.error-field').first().offset().top - 100
                    }, 500);

                    return false;
                }

                // Mettre à jour les champs cachés
                $('#order_notes').val(notesCheckbox.is(':checked') ? notesTextarea.val() : '');

                // Nettoyer le localStorage avant soumission réussie
                localStorage.removeItem('checkout_form_data');
            });

            // Fonction pour sauvegarder les données du formulaire (EXCLURE LE TOKEN CSRF)
            function saveFormData() {
                const formData = {};
                const excludedFields = ['_token', 'csrf-token',
                '__token']; // Exclure tous les noms possibles de token

                $('#checkout-form input, #checkout-form select, #checkout-form textarea').each(function() {
                    const name = $(this).attr('name');

                    // Exclure le token CSRF et les champs vides
                    if (name && !excludedFields.includes(name)) {
                        if ($(this).attr('type') === 'checkbox') {
                            formData[name] = $(this).is(':checked') ? '1' : '0';
                        } else if ($(this).attr('type') === 'radio') {
                            if ($(this).is(':checked')) {
                                formData[name] = $(this).val();
                            }
                        } else if ($(this).attr('type') === 'hidden' && name.includes('method')) {
                            // Inclure les méthodes de shipping/payment même si hidden
                            formData[name] = $(this).val();
                        } else if ($(this).is(
                                'select, input[type="text"], input[type="email"], input[type="tel"], textarea'
                                )) {
                            // Ne sauvegarder que si non vide
                            const value = $(this).val();
                            if (value && value.trim() !== '') {
                                formData[name] = value;
                            }
                        }
                    }
                });

                // Vérifier qu'on a des données avant de sauvegarder
                if (Object.keys(formData).length > 0) {
                    localStorage.setItem('checkout_form_data', JSON.stringify(formData));
                }
            }

            // Fonction pour charger les données sauvegardées (EXCLURE LE TOKEN)
            function loadSavedData() {
                const savedData = localStorage.getItem('checkout_form_data');
                if (savedData) {
                    try {
                        const data = JSON.parse(savedData);

                        // Ne jamais écraser les données old() de Laravel
                        const hasOldData = @json(old() ? true : false);

                        Object.keys(data).forEach(key => {
                            const element = $(`[name="${key}"]`);

                            // Ne charger que si l'élément existe ET qu'il n'y a pas de données old()
                            if (element.length && !hasOldData) {
                                if (element.attr('type') === 'checkbox') {
                                    element.prop('checked', data[key] === '1');
                                    element.trigger('change');
                                } else if (element.attr('type') === 'radio') {
                                    element.filter(`[value="${data[key]}"]`).prop('checked', true);
                                } else {
                                    // Ne pas écraser si déjà une valeur
                                    if (!element.val()) {
                                        element.val(data[key]);
                                    }
                                }
                            }
                        });

                        // Réinitialiser les labels flottants après le chargement
                        setTimeout(initFloatingLabels, 100);

                        // Déclencher la copie d'adresse si nécessaire
                        if (sameAddressCheckbox.is(':checked')) {
                            copyShippingToBilling();
                        }

                    } catch (e) {
                        console.error('Erreur lors du chargement des données:', e);
                        // En cas d'erreur, nettoyer
                        localStorage.removeItem('checkout_form_data');
                    }
                }
            }

            // Charger les données sauvegardées au chargement de la page
            loadSavedData();

            // Sauvegarder automatiquement les données lors de la saisie (avec délai)
            let saveTimeout;
            $('#checkout-form input, #checkout-form select, #checkout-form textarea').on('input change',
        function() {
                // Utiliser un délai pour éviter trop de sauvegardes
                clearTimeout(saveTimeout);
                saveTimeout = setTimeout(saveFormData, 500);
            });

            // Gestion des onglets d'adresse (boutons Editar)
            $('.wc-block-components-address-card__edit').on('click', function() {
                const target = $(this).attr('aria-controls');
                const formWrapper = $(`#${target} .wc-block-components-address-form-wrapper`);
                formWrapper.slideToggle();
            });

            // Nettoyer le localStorage si la commande est réussie
            @if (session('success'))
                localStorage.removeItem('checkout_form_data');
            @endif

            // Restaurer les valeurs old() de Laravel si elles existent
            @if (old())
                // Réinitialiser les labels flottants après le chargement des old()
                setTimeout(function() {
                    initFloatingLabels();
                    sameAddressCheckbox.trigger('change');
                    notesCheckbox.trigger('change');

                    // Nettoyer localStorage quand on a des old() (formulaire soumis avec erreur)
                    localStorage.removeItem('checkout_form_data');
                }, 300);
            @endif

            // Rafraîchir automatiquement le token CSRF toutes les 30 minutes
            setInterval(function() {
                // Ne pas rafraîchir si formulaire en cours de soumission
                if (!$('#submit-order').prop('disabled')) {
                    $.ajax({
                        url: '{{ route('refresh') }}',
                        method: 'GET',
                        success: function(data) {
                            // Mettre à jour le token dans le formulaire
                            $('input[name="_token"]').val(data.token);
                            $('meta[name="csrf-token"]').attr('content', data.token);
                        }
                    });
                }
            }, 10000); // 30 minutes
        });
    </script>
@endpush
