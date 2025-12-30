@extends('layouts.app')

@section('title', __('Compre a sua lenha, pellets de madeira e fogão a lenha com a'))

@push('styles')
    @vite(['resources/css/home.css'])
@endpush

@section('content')
    @include('layouts.partials.navbar.public')
    <div id="wrapper-container" class="wrapper-container">
        @include('section.slide')

        <div id="tbay-main-content">
            <section>
                <div class="row ">
                    <div id="main-content" class="main-page col-12">
                        <div id="main" class="site-main">
                            <div data-elementor-type="wp-page" data-elementor-id="145" class="elementor elementor-145">

                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-297be64 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="297be64" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7f4161d"
                                            data-id="7f4161d" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-383a96d elementor-widget__width-initial elementor-widget elementor-widget-tbay-banner"
                                                    data-id="383a96d" data-element_type="widget"
                                                    data-widget_type="tbay-banner.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="tbay-element tbay-element-banner cursor-pointer"
                                                            onclick="window.location.href=&#039;{{ route('loja') }}&#039;">
                                                            <div class="main-wrapp-img">
                                                                <div class="banner-image">
                                                                    <img loading="lazy" decoding="async" width="1248"
                                                                        height="832"
                                                                        src="{{ asset('wp-content/uploads/2025/10/765424359870807610.jpg') }}"
                                                                        class="attachment-full size-full wp-image-5734"
                                                                        alt="" />
                                                                </div>
                                                            </div>
                                                            <div class="wrapper-content-banner">
                                                                <div class="content-banner">
                                                                    <h3 class="banner-tbay-title">
                                                                        <span class="title">LENHA VIVA</span>

                                                                        <span class="subtitle">Especialista em pellets de
                                                                            madeira, lenha e toros comprimidos</span>
                                                                    </h3>


                                                                    <div class="banner-label"><span>Loja</span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1c16cf0"
                                            data-id="1c16cf0" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-d01fa10 elementor-widget elementor-widget-tbay-banner"
                                                    data-id="d01fa10" data-element_type="widget"
                                                    data-widget_type="tbay-banner.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="tbay-element tbay-element-banner cursor-pointer"
                                                            onclick="window.location.href=&#039;{{ route('contacto') }}&#039;">
                                                            <div class="main-wrapp-img">
                                                                <div class="banner-image">
                                                                    <img loading="lazy" decoding="async" width="1280"
                                                                        height="800"
                                                                        src="{{ asset('wp-content/uploads/2025/10/765424359870807621.jpg') }}"
                                                                        class="attachment-full size-full wp-image-5736"
                                                                        alt="" />
                                                                </div>
                                                            </div>
                                                            <div class="wrapper-content-banner">
                                                                <div class="content-banner">
                                                                    <h3 class="banner-tbay-title">
                                                                        <span class="title">LENHA VIVA</span>

                                                                        <span class="subtitle">A melhor experiência de
                                                                            aquecimento a lenha.</span>
                                                                    </h3>

                                                                    <div class="banner-label"><span>Contate-nos!</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>


                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-82b5d97 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="82b5d97" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e39c852"
                                            data-id="e39c852" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-b7b13ba elementor-product-v1 heading-tab-style-block elementor-widget elementor-widget-tbay-product-tabs"
                                                    data-id="b7b13ba" data-element_type="widget"
                                                    data-widget_type="tbay-product-tabs.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="tbay-element tbay-element-product-tabs ajax-active">

                                                            <div class="wrapper-heading-tab">
                                                                <ul class="product-tabs-title tabs-list nav nav-tabs"
                                                                    data-atts="{&quot;categories&quot;:[&quot;pellets-de-madeira&quot;],&quot;cat_operator&quot;:&quot;IN&quot;,&quot;limit&quot;:16,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;asc&quot;,&quot;product_style&quot;:&quot;v1&quot;,&quot;attr_row&quot;:&quot;class=\&quot;product-tabs row grid products\&quot; data-xlgdesktop=\&quot;4\&quot; data-desktop=\&quot;4\&quot; data-desktopsmall=\&quot;4\&quot; data-tablet=\&quot;3\&quot; data-landscape=\&quot;2\&quot; data-mobile=\&quot;2\&quot;&quot;}">
                                                                    <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="pill"
                                                                            data-bs-target="#best_selling-7t9jG-c11dc16"
                                                                            data-value="best_selling" class="active">PELLETS
                                                                            DE MADEIRA</a>
                                                                    </li>

                                                                </ul>
                                                            </div>

                                                            <div class="tbay-addon-content tab-content woocommerce">
                                                                <div class="tab-pane active active-content current"
                                                                    id="best_selling-7t9jG-c11dc16">


                                                                    <div class="product-tabs row grid products product-tabs products"
                                                                        data-xlgdesktop="4" data-desktop="4"
                                                                        data-desktopsmall="4" data-tablet="3"
                                                                        data-landscape="2" data-mobile="2">

                                                                        @foreach ($pelletProducts as $product)
                                                                            <div class="item">
                                                                                <div
                                                                                    class="products-grid product type-product post-{{ $product['id'] }} status-publish instock product_cat-pellets-de-madeira has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">
                                                                                    <div class="product-block grid product v1"
                                                                                        data-product-id="{{ $product['id'] }}">
                                                                                        <div class="product-content">

                                                                                            <div class="block-inner">
                                                                                                <figure class="image ">
                                                                                                    <a title="{{ $product['title'] }}"
                                                                                                        href="{{ route('product.show', ['slug' => $product['slug']]) }}"
                                                                                                        class="product-image">
                                                                                                        <img loading="lazy"
                                                                                                            decoding="async"
                                                                                                            width="480"
                                                                                                            height="480"
                                                                                                            src="{{ asset($product['images'][0]) }}"
                                                                                                            class="attachment-shop_catalog {image-effect"
                                                                                                            alt="" />
                                                                                                        @if ($product['hover_image'])
                                                                                                            <img loading="lazy"
                                                                                                                decoding="async"
                                                                                                                width="480"
                                                                                                                height="480"
                                                                                                                src="{{ asset($product['hover_image']) }}"
                                                                                                                class="image-hover"
                                                                                                                alt="" />
                                                                                                        @endif
                                                                                                    </a>
                                                                                                </figure>

                                                                                                <div class="group-buttons">
                                                                                                    <div class="add-cart"
                                                                                                        title="Adicionar">
                                                                                                        <a href="javascript:void(0);"
                                                                                                            data-product-id="{{ $product['id'] ?? '' }}"
                                                                                                            class="wp-block-button__link add_to_cart_button ajax_add_to_cart"
                                                                                                            aria-label="Adiciona ao carrinho: &ldquo;{{ $product['title'] ?? 'Produit' }}&rdquo;">
                                                                                                            <span
                                                                                                                class="title-cart">Adicionar</span>
                                                                                                            <i
                                                                                                                class="tb-icon tb-icon-bag-2"></i>
                                                                                                        </a>
                                                                                                        <span
                                                                                                            id="woocommerce_loop_add_to_cart_link_describedby_{{ $product['id'] }}"
                                                                                                            class="screen-reader-text"></span>
                                                                                                    </div>
                                                                                                    <div class="button-wishlist shown-mobile"
                                                                                                        title="Lista de desejos">
                                                                                                        <div class="yith-add-to-wishlist-button-block yith-add-to-wishlist-button-block--initialized"
                                                                                                            data-attributes="{&quot;kind&quot;:&quot;button&quot;}">
                                                                                                            <a class="yith-wcwl-add-to-wishlist-button yith-wcwl-add-to-wishlist-button--anchor wishlist-button
            {{ in_array($product['id'], array_keys(Session::get('wishlist', []))) ? 'wishlist-added' : '' }}"
                                                                                                                aria-label="Add To Wishlist: &ldquo;{{ $product['title'] }}&rdquo;"
                                                                                                                data-product-id="{{ $product['id'] }}"
                                                                                                                data-product-title="{{ $product['title'] }}"
                                                                                                                data-product-price="{{ $product['price'] }}"
                                                                                                                data-product-image="{{ asset($product['images'][0]) }}"
                                                                                                                data-product-slug="{{ $product['slug'] }}"
                                                                                                                href="#">
                                                                                                                <svg class="yith-wcwl-icon yith-wcwl-icon-svg yith-wcwl-add-to-wishlist-button-icon"
                                                                                                                    id="yith-wcwl-icon-heart-outline"
                                                                                                                    fill="{{ in_array($product['id'], array_keys(Session::get('wishlist', []))) ? 'red' : 'none' }}"
                                                                                                                    stroke-width="1.5"
                                                                                                                    stroke="currentColor"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                                    <path
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <span
                                                                                                                    class="yith-wcwl-add-to-wishlist-button__label">
                                                                                                                    {{ in_array($product['id'], array_keys(Session::get('wishlist', []))) ? 'Dans la liste' : 'Add to wishlist' }}
                                                                                                                </span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="tbay-quick-view">
                                                                                                        <a href="#"
                                                                                                            class="qview-button"
                                                                                                            title="Visualização Rápida"
                                                                                                            data-effect="mfp-move-from-top"
                                                                                                            data-product-id="{{ $product['id'] }}">
                                                                                                            <i
                                                                                                                class="tb-icon tb-icon-eye"></i>
                                                                                                            <span>Visualização
                                                                                                                Rápida</span>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>

                                                                                            <span class="onsale"><span
                                                                                                    class="saled">Sale</span></span>

                                                                                            <div class="caption">
                                                                                                <span class="price">
                                                                                                    <del
                                                                                                        aria-hidden="true">
                                                                                                        <span
                                                                                                            class="woocommerce-Price-amount amount">
                                                                                                            <bdi>{{ $product['old_price'] }}&nbsp;<span
                                                                                                                    class="woocommerce-Price-currencySymbol">&euro;</span></bdi>
                                                                                                        </span>
                                                                                                    </del>
                                                                                                    <span
                                                                                                        class="screen-reader-text">O
                                                                                                        preço original era:
                                                                                                        {{ $product['old_price'] }}&nbsp;&euro;.</span>
                                                                                                    <ins
                                                                                                        aria-hidden="true">
                                                                                                        <span
                                                                                                            class="woocommerce-Price-amount amount">
                                                                                                            <bdi>{{ $product['price'] }}&nbsp;<span
                                                                                                                    class="woocommerce-Price-currencySymbol">&euro;</span></bdi>
                                                                                                        </span>
                                                                                                    </ins>
                                                                                                    <span
                                                                                                        class="screen-reader-text">O
                                                                                                        preço atual é:
                                                                                                        {{ $product['price'] }}&nbsp;&euro;.</span>
                                                                                                    <small
                                                                                                        class="woocommerce-price-suffix">IVA
                                                                                                        incluído</small>
                                                                                                </span>

                                                                                                <h3 class="name">
                                                                                                    <a
                                                                                                        href="{{ route('product.show', ['slug' => $product['slug']]) }}">{{ $product['title'] }}</a>
                                                                                                </h3>

                                                                                                <div class="group-content">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-b6e20e7 elementor-align-center elementor-widget elementor-widget-button"
                                                    data-id="b6e20e7" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                        href="{{ route('category', ['category' => 'pellets-de-madeira']) }}">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">Ver tudo</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>


                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-231a483 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="231a483" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1164bba"
                                            data-id="1164bba" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-73dc688 elementor-product-v1 heading-tab-style-block elementor-widget elementor-widget-tbay-product-tabs"
                                                    data-id="73dc688" data-element_type="widget"
                                                    data-widget_type="tbay-product-tabs.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="tbay-element tbay-element-product-tabs ajax-active">

                                                            <div class="wrapper-heading-tab">
                                                                <ul class="product-tabs-title tabs-list nav nav-tabs"
                                                                    data-atts="{&quot;categories&quot;:[&quot;lenha&quot;],&quot;cat_operator&quot;:&quot;IN&quot;,&quot;limit&quot;:16,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;asc&quot;,&quot;product_style&quot;:&quot;v1&quot;,&quot;attr_row&quot;:&quot;class=\&quot;product-tabs row grid products\&quot; data-xlgdesktop=\&quot;4\&quot; data-desktop=\&quot;4\&quot; data-desktopsmall=\&quot;4\&quot; data-tablet=\&quot;3\&quot; data-landscape=\&quot;2\&quot; data-mobile=\&quot;2\&quot;&quot;}">
                                                                    <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="pill"
                                                                            data-bs-target="#best_selling-LkjyJ-c11dc16"
                                                                            data-value="best_selling"
                                                                            class="active">LENHA</a>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                            <div class="tbay-addon-content tab-content woocommerce">
                                                                <div class="tab-pane active active-content current"
                                                                    id="best_selling-LkjyJ-c11dc16">
                                                                    <div class="product-tabs row grid products product-tabs products"
                                                                        data-xlgdesktop="4" data-desktop="4"
                                                                        data-desktopsmall="4" data-tablet="3"
                                                                        data-landscape="2" data-mobile="2">

                                                                        @foreach ($lenhaProducts as $product)
                                                                            <div class="item">
                                                                                <div
                                                                                    class="products-grid product type-product post-{{ $product['id'] }} status-publish instock product_cat-lenha has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">
                                                                                    <div class="product-block grid product v1"
                                                                                        data-product-id="{{ $product['id'] }}">
                                                                                        <div class="product-content">
                                                                                            <div class="block-inner">
                                                                                                <figure class="image ">
                                                                                                    <a title="{{ $product['title'] }}"
                                                                                                        href="{{ route('product.show', ['slug' => $product['slug']]) }}"
                                                                                                        class="product-image">
                                                                                                        <img loading="lazy"
                                                                                                            decoding="async"
                                                                                                            width="480"
                                                                                                            height="480"
                                                                                                            src="{{ asset($product['images'][0]) }}"
                                                                                                            class="{image-effect"
                                                                                                            alt="" />
                                                                                                        @if ($product['hover_image'])
                                                                                                            <img loading="lazy"
                                                                                                                decoding="async"
                                                                                                                width="225"
                                                                                                                height="225"
                                                                                                                src="{{ asset($product['hover_image']) }}"
                                                                                                                class="image-hover"
                                                                                                                alt="" />
                                                                                                        @endif
                                                                                                    </a>
                                                                                                </figure>

                                                                                                <div class="group-buttons">
                                                                                                    <div class="add-cart"
                                                                                                        title="Adicionar">
                                                                                                        <a href="javascript:void(0);"
                                                                                                            data-product-id="{{ $product['id'] ?? '' }}"
                                                                                                            class="wp-block-button__link add_to_cart_button ajax_add_to_cart"
                                                                                                            aria-label="Adiciona ao carrinho: &ldquo;{{ $product['title'] ?? 'Produit' }}&rdquo;">
                                                                                                            <span
                                                                                                                class="title-cart">Adicionar</span>
                                                                                                            <i
                                                                                                                class="tb-icon tb-icon-bag-2"></i>
                                                                                                        </a>
                                                                                                        <span
                                                                                                            id="woocommerce_loop_add_to_cart_link_describedby_{{ $product['id'] }}"
                                                                                                            class="screen-reader-text"></span>
                                                                                                    </div>
                                                                                                    <div class="button-wishlist shown-mobile"
                                                                                                        title="Lista de desejos">
                                                                                                        <div class="yith-add-to-wishlist-button-block yith-add-to-wishlist-button-block--initialized"
                                                                                                            data-attributes="{&quot;kind&quot;:&quot;button&quot;}">
                                                                                                            <a class="yith-wcwl-add-to-wishlist-button yith-wcwl-add-to-wishlist-button--anchor wishlist-button
            {{ in_array($product['id'], array_keys(Session::get('wishlist', []))) ? 'wishlist-added' : '' }}"
                                                                                                                aria-label="Add To Wishlist: &ldquo;{{ $product['title'] }}&rdquo;"
                                                                                                                data-product-id="{{ $product['id'] }}"
                                                                                                                data-product-title="{{ $product['title'] }}"
                                                                                                                data-product-price="{{ $product['price'] }}"
                                                                                                                data-product-image="{{ asset($product['images'][0]) }}"
                                                                                                                data-product-slug="{{ $product['slug'] }}"
                                                                                                                href="#">
                                                                                                                <svg class="yith-wcwl-icon yith-wcwl-icon-svg yith-wcwl-add-to-wishlist-button-icon"
                                                                                                                    id="yith-wcwl-icon-heart-outline"
                                                                                                                    fill="{{ in_array($product['id'], array_keys(Session::get('wishlist', []))) ? 'red' : 'none' }}"
                                                                                                                    stroke-width="1.5"
                                                                                                                    stroke="currentColor"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                                    <path
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <span
                                                                                                                    class="yith-wcwl-add-to-wishlist-button__label">
                                                                                                                    {{ in_array($product['id'], array_keys(Session::get('wishlist', []))) ? 'Dans la liste' : 'Add to wishlist' }}
                                                                                                                </span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="tbay-quick-view">
                                                                                                        <a href="#"
                                                                                                            class="qview-button"
                                                                                                            title="Visualização Rápida"
                                                                                                            data-effect="mfp-move-from-top"
                                                                                                            data-product-id="{{ $product['id'] }}">
                                                                                                            <i
                                                                                                                class="tb-icon tb-icon-eye"></i>
                                                                                                            <span>Visualização
                                                                                                                Rápida</span>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <span class="onsale"><span
                                                                                                    class="saled">Sale</span></span>

                                                                                            <div class="caption">
                                                                                                <span class="price">
                                                                                                    <del
                                                                                                        aria-hidden="true">
                                                                                                        <span
                                                                                                            class="woocommerce-Price-amount amount">
                                                                                                            <bdi>{{ $product['old_price'] }}&nbsp;<span
                                                                                                                    class="woocommerce-Price-currencySymbol">&euro;</span></bdi>
                                                                                                        </span>
                                                                                                    </del>
                                                                                                    <span
                                                                                                        class="screen-reader-text">O
                                                                                                        preço original era:
                                                                                                        {{ $product['old_price'] }}&nbsp;&euro;.</span>
                                                                                                    <ins
                                                                                                        aria-hidden="true">
                                                                                                        <span
                                                                                                            class="woocommerce-Price-amount amount">
                                                                                                            <bdi>{{ $product['price'] }}&nbsp;<span
                                                                                                                    class="woocommerce-Price-currencySymbol">&euro;</span></bdi>
                                                                                                        </span>
                                                                                                    </ins>
                                                                                                    <span
                                                                                                        class="screen-reader-text">O
                                                                                                        preço atual é:
                                                                                                        {{ $product['price'] }}&nbsp;&euro;.</span>
                                                                                                    <small
                                                                                                        class="woocommerce-price-suffix">IVA
                                                                                                        incluído</small>
                                                                                                </span>

                                                                                                <h3 class="name">
                                                                                                    <a
                                                                                                        href="{{ route('product.show', ['slug' => $product['slug']]) }}">{{ $product['title'] }}</a>
                                                                                                </h3>

                                                                                                <div class="group-content">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-ec242d1 elementor-align-center elementor-widget elementor-widget-button"
                                                    data-id="ec242d1" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                        href="{{ route('category', ['category' => 'lenha']) }}">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">Ver tudo</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>


                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-5d0e347b elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="5d0e347b" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-46cfa7ea"
                                            data-id="46cfa7ea" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-184e2302 elementor-align-center elementor-widget elementor-widget-button"
                                                    data-id="184e2302" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                        href="{{ route('loja') }}">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">Loja</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>


                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-7cdc75f elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="7cdc75f" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-331df95"
                                            data-id="331df95" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-118f1cb elementor-product-v1 heading-tab-style-block elementor-widget elementor-widget-tbay-product-tabs"
                                                    data-id="118f1cb" data-element_type="widget"
                                                    data-widget_type="tbay-product-tabs.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="tbay-element tbay-element-product-tabs ajax-active">

                                                            <div class="wrapper-heading-tab">
                                                                <ul class="product-tabs-title tabs-list nav nav-tabs"
                                                                    data-atts="{&quot;categories&quot;:[&quot;chef-de-madeira&quot;],&quot;cat_operator&quot;:&quot;IN&quot;,&quot;limit&quot;:12,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;asc&quot;,&quot;product_style&quot;:&quot;v1&quot;,&quot;attr_row&quot;:&quot;class=\&quot;product-tabs row grid products\&quot; data-xlgdesktop=\&quot;4\&quot; data-desktop=\&quot;4\&quot; data-desktopsmall=\&quot;4\&quot; data-tablet=\&quot;3\&quot; data-landscape=\&quot;2\&quot; data-mobile=\&quot;2\&quot;&quot;}">
                                                                    <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="pill"
                                                                            data-bs-target="#best_selling-kAljt-c11dc16"
                                                                            data-value="best_selling" class="active">CHEF
                                                                            DE MADEIRA</a>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                            <div class="tbay-addon-content tab-content woocommerce">
                                                                <div class="tab-pane active active-content current"
                                                                    id="best_selling-kAljt-c11dc16">
                                                                    <div class="product-tabs row grid products product-tabs products"
                                                                        data-xlgdesktop="4" data-desktop="4"
                                                                        data-desktopsmall="4" data-tablet="3"
                                                                        data-landscape="2" data-mobile="2">

                                                                        @foreach ($chefProducts as $product)
                                                                            <div class="item">
                                                                                <div
                                                                                    class="products-grid product type-product post-{{ $product['id'] }} status-publish instock product_cat-chef-de-madeira has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">
                                                                                    <div class="product-block grid product v1"
                                                                                        data-product-id="{{ $product['id'] }}">
                                                                                        <div class="product-content">
                                                                                            <div class="block-inner">
                                                                                                <figure class="image ">
                                                                                                    <a title="{{ $product['title'] }}"
                                                                                                        href="{{ route('product.show', ['slug' => $product['slug']]) }}"
                                                                                                        class="product-image">
                                                                                                        <img loading="lazy"
                                                                                                            decoding="async"
                                                                                                            width="480"
                                                                                                            height="480"
                                                                                                            src="{{ asset($product['images'][0]) }}"
                                                                                                            class="attachment-shop_catalog {image-effect"
                                                                                                            alt="" />
                                                                                                        @if ($product['hover_image'])
                                                                                                            <img loading="lazy"
                                                                                                                decoding="async"
                                                                                                                width="480"
                                                                                                                height="480"
                                                                                                                src="{{ asset($product['hover_image']) }}"
                                                                                                                class="image-hover"
                                                                                                                alt="" />
                                                                                                        @endif
                                                                                                    </a>
                                                                                                </figure>

                                                                                                <div class="group-buttons">
                                                                                                    <div class="add-cart"
                                                                                                        title="Adicionar">
                                                                                                        <a href="javascript:void(0);"
                                                                                                            data-product-id="{{ $product['id'] ?? '' }}"
                                                                                                            class="wp-block-button__link add_to_cart_button ajax_add_to_cart"
                                                                                                            aria-label="Adiciona ao carrinho: &ldquo;{{ $product['title'] ?? 'Produit' }}&rdquo;">
                                                                                                            <span
                                                                                                                class="title-cart">Adicionar</span>
                                                                                                            <i
                                                                                                                class="tb-icon tb-icon-bag-2"></i>
                                                                                                        </a>
                                                                                                        <span
                                                                                                            id="woocommerce_loop_add_to_cart_link_describedby_{{ $product['id'] }}"
                                                                                                            class="screen-reader-text"></span>
                                                                                                    </div>
                                                                                                    <div class="button-wishlist shown-mobile"
                                                                                                        title="Lista de desejos">
                                                                                                        <div class="yith-add-to-wishlist-button-block yith-add-to-wishlist-button-block--initialized"
                                                                                                            data-attributes="{&quot;kind&quot;:&quot;button&quot;}">
                                                                                                            <a class="yith-wcwl-add-to-wishlist-button yith-wcwl-add-to-wishlist-button--anchor wishlist-button
            {{ in_array($product['id'], array_keys(Session::get('wishlist', []))) ? 'wishlist-added' : '' }}"
                                                                                                                aria-label="Add To Wishlist: &ldquo;{{ $product['title'] }}&rdquo;"
                                                                                                                data-product-id="{{ $product['id'] }}"
                                                                                                                data-product-title="{{ $product['title'] }}"
                                                                                                                data-product-price="{{ $product['price'] }}"
                                                                                                                data-product-image="{{ asset($product['images'][0]) }}"
                                                                                                                data-product-slug="{{ $product['slug'] }}"
                                                                                                                href="#">
                                                                                                                <svg class="yith-wcwl-icon yith-wcwl-icon-svg yith-wcwl-add-to-wishlist-button-icon"
                                                                                                                    id="yith-wcwl-icon-heart-outline"
                                                                                                                    fill="{{ in_array($product['id'], array_keys(Session::get('wishlist', []))) ? 'red' : 'none' }}"
                                                                                                                    stroke-width="1.5"
                                                                                                                    stroke="currentColor"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                                    <path
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <span
                                                                                                                    class="yith-wcwl-add-to-wishlist-button__label">
                                                                                                                    {{ in_array($product['id'], array_keys(Session::get('wishlist', []))) ? 'Dans la liste' : 'Add to wishlist' }}
                                                                                                                </span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="tbay-quick-view">
                                                                                                        <a href="#"
                                                                                                            class="qview-button"
                                                                                                            title="Visualização Rápida"
                                                                                                            data-effect="mfp-move-from-top"
                                                                                                            data-product-id="{{ $product['id'] }}">
                                                                                                            <i
                                                                                                                class="tb-icon tb-icon-eye"></i>
                                                                                                            <span>Visualização
                                                                                                                Rápida</span>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <span class="onsale"><span
                                                                                                    class="saled">Sale</span></span>

                                                                                            <div class="caption">
                                                                                                <span class="price">
                                                                                                    <del
                                                                                                        aria-hidden="true">
                                                                                                        <span
                                                                                                            class="woocommerce-Price-amount amount">
                                                                                                            <bdi>{{ $product['old_price'] }}&nbsp;<span
                                                                                                                    class="woocommerce-Price-currencySymbol">&euro;</span></bdi>
                                                                                                        </span>
                                                                                                    </del>
                                                                                                    <span
                                                                                                        class="screen-reader-text">O
                                                                                                        preço original era:
                                                                                                        {{ $product['old_price'] }}&nbsp;&euro;.</span>
                                                                                                    <ins
                                                                                                        aria-hidden="true">
                                                                                                        <span
                                                                                                            class="woocommerce-Price-amount amount">
                                                                                                            <bdi>{{ $product['price'] }}&nbsp;<span
                                                                                                                    class="woocommerce-Price-currencySymbol">&euro;</span></bdi>
                                                                                                        </span>
                                                                                                    </ins>
                                                                                                    <span
                                                                                                        class="screen-reader-text">O
                                                                                                        preço atual é:
                                                                                                        {{ $product['price'] }}&nbsp;&euro;.</span>
                                                                                                    <small
                                                                                                        class="woocommerce-price-suffix">IVA
                                                                                                        incluído</small>
                                                                                                </span>

                                                                                                <h3 class="name">
                                                                                                    <a
                                                                                                        href="{{ route('product.show', ['slug' => $product['slug']]) }}">{{ $product['title'] }}</a>
                                                                                                </h3>

                                                                                                <div class="group-content">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4a52e6d elementor-align-center elementor-widget elementor-widget-button"
                                                    data-id="4a52e6d" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                        href="{{ route('category', ['category' => 'chef-de-madeira']) }}">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">Ver tudo</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>


                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-8b9e869 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default"
                                    data-id="8b9e869" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-65ed9c0"
                                            data-id="65ed9c0" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-1e44416 elementor-widget elementor-widget-text-editor"
                                                    data-id="1e44416" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <p>Estamos aqui para si</p>
                                                </div>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-fea20bc elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="fea20bc" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-9be4837"
                                                            data-id="9be4837" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-5b0472d elementor-widget elementor-widget-tbay-banner"
                                                                    data-id="5b0472d" data-element_type="widget"
                                                                    data-widget_type="tbay-banner.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="tbay-element tbay-element-banner cursor-pointer"
                                                                            onclick="window.location.href=&#039;{{ route('contacto') }}m//&#039;">
                                                                            <div class="main-wrapp-img">
                                                                                <div class="banner-image">
                                                                                    <img loading="lazy" decoding="async"
                                                                                        width="1280" height="800"
                                                                                        src="wp-content/uploads/2025/10/765424359870807617.jpg"
                                                                                        class="attachment-full size-full wp-image-5738"
                                                                                        alt="" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="wrapper-content-banner">
                                                                                <div class="content-banner">
                                                                                    <h3 class="banner-tbay-title">
                                                                                        <span class="title">TUGAS
                                                                                            LENHA</span>

                                                                                        <span class="subtitle">Procura um
                                                                                            fornecedor de PELLETS?</span>
                                                                                    </h3>


                                                                                    <div class="banner-label">
                                                                                        <span>CONTACTE-NOS!</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </section>


                                <div class="elementor-element elementor-element-4406292 e-flex e-con-boxed e-con e-parent"
                                    data-id="4406292" data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-535d3b6 elementor-widget elementor-widget-spacer"
                                            data-id="535d3b6" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-a01035d elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="a01035d" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5191e22"
                                            data-id="5191e22" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-98a464d elementor-product-v1 heading-tab-style-block elementor-widget elementor-widget-tbay-product-tabs"
                                                    data-id="98a464d" data-element_type="widget"
                                                    data-widget_type="tbay-product-tabs.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="tbay-element tbay-element-product-tabs ajax-active">

                                                            <div class="wrapper-heading-tab">
                                                                <ul class="product-tabs-title tabs-list nav nav-tabs"
                                                                    data-atts="{&quot;categories&quot;:[&quot;madeira-compactada&quot;],&quot;cat_operator&quot;:&quot;IN&quot;,&quot;limit&quot;:4,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;asc&quot;,&quot;product_style&quot;:&quot;v1&quot;,&quot;attr_row&quot;:&quot;class=\&quot;product-tabs row grid products\&quot; data-xlgdesktop=\&quot;4\&quot; data-desktop=\&quot;4\&quot; data-desktopsmall=\&quot;4\&quot; data-tablet=\&quot;3\&quot; data-landscape=\&quot;2\&quot; data-mobile=\&quot;2\&quot;&quot;}">
                                                                    <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="pill"
                                                                            data-bs-target="#best_selling-ktTFY-c11dc16"
                                                                            data-value="best_selling"
                                                                            class="active">MADEIRA
                                                                            COMPACTADA</a>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                            <div class="tbay-addon-content tab-content woocommerce">
                                                                <div class="tab-pane active active-content current"
                                                                    id="best_selling-ktTFY-c11dc16">
                                                                    <div class="product-tabs row grid products product-tabs products"
                                                                        data-xlgdesktop="4" data-desktop="4"
                                                                        data-desktopsmall="4" data-tablet="3"
                                                                        data-landscape="2" data-mobile="2">

                                                                        @foreach ($compactadaProducts as $product)
                                                                            <div class="item">
                                                                                <div
                                                                                    class="products-grid product type-product post-{{ $product['id'] }} status-publish instock product_cat-madeira-compactada has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">
                                                                                    <div class="product-block grid product v1"
                                                                                        data-product-id="{{ $product['id'] }}">
                                                                                        <div class="product-content">
                                                                                            <div class="block-inner">
                                                                                                <figure class="image ">
                                                                                                    <a title="{{ html_entity_decode($product['title'], ENT_QUOTES, 'UTF-8') }}"
                                                                                                        href="{{ route('product.show', ['slug' => $product['slug']]) }}"
                                                                                                        class="product-image">
                                                                                                        <img loading="lazy"
                                                                                                            decoding="async"
                                                                                                            width="480"
                                                                                                            height="480"
                                                                                                            src="{{ asset($product['images'][0]) }}"
                                                                                                            class="attachment-shop_catalog {image-effect"
                                                                                                            alt="" />
                                                                                                        @if ($product['hover_image'])
                                                                                                            <img loading="lazy"
                                                                                                                decoding="async"
                                                                                                                width="480"
                                                                                                                height="480"
                                                                                                                src="{{ asset($product['hover_image']) }}"
                                                                                                                class="image-hover"
                                                                                                                alt="" />
                                                                                                        @endif
                                                                                                    </a>
                                                                                                </figure>

                                                                                                <div class="group-buttons">
                                                                                                    <div class="add-cart"
                                                                                                        title="Adicionar">
                                                                                                        <a href="javascript:void(0);"
                                                                                                            data-product-id="{{ $product['id'] ?? '' }}"
                                                                                                            class="wp-block-button__link add_to_cart_button ajax_add_to_cart"
                                                                                                            aria-label="Adiciona ao carrinho: &ldquo;{{ $product['title'] ?? 'Produit' }}&rdquo;">
                                                                                                            <span
                                                                                                                class="title-cart">Adicionar</span>
                                                                                                            <i
                                                                                                                class="tb-icon tb-icon-bag-2"></i>
                                                                                                        </a>
                                                                                                        <span
                                                                                                            id="woocommerce_loop_add_to_cart_link_describedby_{{ $product['id'] }}"
                                                                                                            class="screen-reader-text"></span>
                                                                                                    </div>
                                                                                                    <div class="button-wishlist shown-mobile"
                                                                                                        title="Lista de desejos">
                                                                                                        <div class="yith-add-to-wishlist-button-block yith-add-to-wishlist-button-block--initialized"
                                                                                                            data-attributes="{&quot;kind&quot;:&quot;button&quot;}">
                                                                                                            <a class="yith-wcwl-add-to-wishlist-button yith-wcwl-add-to-wishlist-button--anchor wishlist-button
            {{ in_array($product['id'], array_keys(Session::get('wishlist', []))) ? 'wishlist-added' : '' }}"
                                                                                                                aria-label="Add To Wishlist: &ldquo;{{ $product['title'] }}&rdquo;"
                                                                                                                data-product-id="{{ $product['id'] }}"
                                                                                                                data-product-title="{{ $product['title'] }}"
                                                                                                                data-product-price="{{ $product['price'] }}"
                                                                                                                data-product-image="{{ asset($product['images'][0]) }}"
                                                                                                                data-product-slug="{{ $product['slug'] }}"
                                                                                                                href="#">
                                                                                                                <svg class="yith-wcwl-icon yith-wcwl-icon-svg yith-wcwl-add-to-wishlist-button-icon"
                                                                                                                    id="yith-wcwl-icon-heart-outline"
                                                                                                                    fill="{{ in_array($product['id'], array_keys(Session::get('wishlist', []))) ? 'red' : 'none' }}"
                                                                                                                    stroke-width="1.5"
                                                                                                                    stroke="currentColor"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                                    <path
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <span
                                                                                                                    class="yith-wcwl-add-to-wishlist-button__label">
                                                                                                                    {{ in_array($product['id'], array_keys(Session::get('wishlist', []))) ? 'Dans la liste' : 'Add to wishlist' }}
                                                                                                                </span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="tbay-quick-view">
                                                                                                        <a href="#"
                                                                                                            class="qview-button"
                                                                                                            title="Visualização Rápida"
                                                                                                            data-effect="mfp-move-from-top"
                                                                                                            data-product-id="{{ $product['id'] }}">
                                                                                                            <i
                                                                                                                class="tb-icon tb-icon-eye"></i>
                                                                                                            <span>Visualização
                                                                                                                Rápida</span>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <span class="onsale"><span
                                                                                                    class="saled">Sale</span></span>

                                                                                            <div class="caption">
                                                                                                <span class="price">
                                                                                                    <del
                                                                                                        aria-hidden="true">
                                                                                                        <span
                                                                                                            class="woocommerce-Price-amount amount">
                                                                                                            <bdi>{{ $product['old_price'] }}&nbsp;<span
                                                                                                                    class="woocommerce-Price-currencySymbol">&euro;</span></bdi>
                                                                                                        </span>
                                                                                                    </del>
                                                                                                    <span
                                                                                                        class="screen-reader-text">O
                                                                                                        preço original era:
                                                                                                        {{ $product['old_price'] }}&nbsp;&euro;.</span>
                                                                                                    <ins
                                                                                                        aria-hidden="true">
                                                                                                        <span
                                                                                                            class="woocommerce-Price-amount amount">
                                                                                                            <bdi>{{ $product['price'] }}&nbsp;<span
                                                                                                                    class="woocommerce-Price-currencySymbol">&euro;</span></bdi>
                                                                                                        </span>
                                                                                                    </ins>
                                                                                                    <span
                                                                                                        class="screen-reader-text">O
                                                                                                        preço atual é:
                                                                                                        {{ $product['price'] }}&nbsp;&euro;.</span>
                                                                                                    <small
                                                                                                        class="woocommerce-price-suffix">IVA
                                                                                                        incluído</small>
                                                                                                </span>

                                                                                                <h3 class="name">
                                                                                                    <a
                                                                                                        href="{{ route('product.show', ['slug' => $product['slug']]) }}">{{ html_entity_decode($product['title'], ENT_QUOTES, 'UTF-8') }}</a>
                                                                                                </h3>

                                                                                                <div class="group-content">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-cb12240 elementor-align-center elementor-widget elementor-widget-button"
                                                    data-id="cb12240" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                        href="{{ route('category', ['category' => 'madeira-compactada']) }}">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">Ver tudo</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-5f22068 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="5f22068" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-edf00f8"
                                            data-id="edf00f8" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-1a64f95 elementor-product-v1 heading-tab-style-block elementor-widget elementor-widget-tbay-product-tabs"
                                                    data-id="1a64f95" data-element_type="widget"
                                                    data-widget_type="tbay-product-tabs.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="tbay-element tbay-element-product-tabs ajax-active">

                                                            <div class="wrapper-heading-tab">
                                                                <ul class="product-tabs-title tabs-list nav nav-tabs"
                                                                    data-atts="{&quot;categories&quot;:[&quot;caldeira-de-lenha&quot;],&quot;cat_operator&quot;:&quot;IN&quot;,&quot;limit&quot;:4,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;asc&quot;,&quot;product_style&quot;:&quot;v1&quot;,&quot;attr_row&quot;:&quot;class=\&quot;product-tabs row grid products\&quot; data-xlgdesktop=\&quot;4\&quot; data-desktop=\&quot;4\&quot; data-desktopsmall=\&quot;4\&quot; data-tablet=\&quot;3\&quot; data-landscape=\&quot;2\&quot; data-mobile=\&quot;2\&quot;&quot;}">
                                                                    <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="pill"
                                                                            data-bs-target="#best_selling-P94n5-c11dc16"
                                                                            data-value="best_selling"
                                                                            class="active">CALDEIRA
                                                                            DE LENHA</a>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                            <div class="tbay-addon-content tab-content woocommerce">
                                                                <div class="tab-pane active active-content current"
                                                                    id="best_selling-P94n5-c11dc16">
                                                                    <div class="product-tabs row grid products product-tabs products"
                                                                        data-xlgdesktop="4" data-desktop="4"
                                                                        data-desktopsmall="4" data-tablet="3"
                                                                        data-landscape="2" data-mobile="2">

                                                                        @foreach ($caldeiraProducts as $product)
                                                                            <div class="item">
                                                                                <div
                                                                                    class="products-grid product type-product post-{{ $product['id'] }} status-publish instock product_cat-caldeira-de-lenha has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">
                                                                                    <div class="product-block grid product v1"
                                                                                        data-product-id="{{ $product['id'] }}">
                                                                                        <div class="product-content">
                                                                                            <div class="block-inner">
                                                                                                <figure class="image ">
                                                                                                    <a title="{{ $product['title'] }}"
                                                                                                        href="{{ route('product.show', ['slug' => $product['slug']]) }}"
                                                                                                        class="product-image">
                                                                                                        <img loading="lazy"
                                                                                                            decoding="async"
                                                                                                            width="480"
                                                                                                            height="480"
                                                                                                            src="{{ asset($product['images'][0]) }}"
                                                                                                            class="attachment-shop_catalog {image-effect"
                                                                                                            alt="" />
                                                                                                        @if ($product['hover_image'])
                                                                                                            <img loading="lazy"
                                                                                                                decoding="async"
                                                                                                                width="480"
                                                                                                                height="480"
                                                                                                                src="{{ asset($product['hover_image']) }}"
                                                                                                                class="image-hover"
                                                                                                                alt="" />
                                                                                                        @endif
                                                                                                    </a>
                                                                                                </figure>

                                                                                                <div class="group-buttons">
                                                                                                    <div class="add-cart"
                                                                                                        title="Adicionar">
                                                                                                        <a href="javascript:void(0);"
                                                                                                            data-product-id="{{ $product['id'] ?? '' }}"
                                                                                                            class="wp-block-button__link add_to_cart_button ajax_add_to_cart"
                                                                                                            aria-label="Adiciona ao carrinho: &ldquo;{{ $product['title'] ?? 'Produit' }}&rdquo;">
                                                                                                            <span
                                                                                                                class="title-cart">Adicionar</span>
                                                                                                            <i
                                                                                                                class="tb-icon tb-icon-bag-2"></i>
                                                                                                        </a>
                                                                                                        <span
                                                                                                            id="woocommerce_loop_add_to_cart_link_describedby_{{ $product['id'] }}"
                                                                                                            class="screen-reader-text"></span>
                                                                                                    </div>
                                                                                                    <div class="button-wishlist shown-mobile"
                                                                                                        title="Lista de desejos">
                                                                                                        <div class="yith-add-to-wishlist-button-block yith-add-to-wishlist-button-block--initialized"
                                                                                                            data-attributes="{&quot;kind&quot;:&quot;button&quot;}">
                                                                                                            <a class="yith-wcwl-add-to-wishlist-button yith-wcwl-add-to-wishlist-button--anchor wishlist-button
            {{ in_array($product['id'], array_keys(Session::get('wishlist', []))) ? 'wishlist-added' : '' }}"
                                                                                                                aria-label="Add To Wishlist: &ldquo;{{ $product['title'] }}&rdquo;"
                                                                                                                data-product-id="{{ $product['id'] }}"
                                                                                                                data-product-title="{{ $product['title'] }}"
                                                                                                                data-product-price="{{ $product['price'] }}"
                                                                                                                data-product-image="{{ asset($product['images'][0]) }}"
                                                                                                                data-product-slug="{{ $product['slug'] }}"
                                                                                                                href="#">
                                                                                                                <svg class="yith-wcwl-icon yith-wcwl-icon-svg yith-wcwl-add-to-wishlist-button-icon"
                                                                                                                    id="yith-wcwl-icon-heart-outline"
                                                                                                                    fill="{{ in_array($product['id'], array_keys(Session::get('wishlist', []))) ? 'red' : 'none' }}"
                                                                                                                    stroke-width="1.5"
                                                                                                                    stroke="currentColor"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                                    <path
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <span
                                                                                                                    class="yith-wcwl-add-to-wishlist-button__label">
                                                                                                                    {{ in_array($product['id'], array_keys(Session::get('wishlist', []))) ? 'Dans la liste' : 'Add to wishlist' }}
                                                                                                                </span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="tbay-quick-view">
                                                                                                        <a href="#"
                                                                                                            class="qview-button"
                                                                                                            title="Visualização Rápida"
                                                                                                            data-effect="mfp-move-from-top"
                                                                                                            data-product-id="{{ $product['id'] }}">
                                                                                                            <i
                                                                                                                class="tb-icon tb-icon-eye"></i>
                                                                                                            <span>Visualização
                                                                                                                Rápida</span>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <span class="onsale"><span
                                                                                                    class="saled">Sale</span></span>

                                                                                            <div class="caption">
                                                                                                <span class="price">
                                                                                                    <del
                                                                                                        aria-hidden="true">
                                                                                                        <span
                                                                                                            class="woocommerce-Price-amount amount">
                                                                                                            <bdi>{{ $product['old_price'] }}&nbsp;<span
                                                                                                                    class="woocommerce-Price-currencySymbol">&euro;</span></bdi>
                                                                                                        </span>
                                                                                                    </del>
                                                                                                    <span
                                                                                                        class="screen-reader-text">O
                                                                                                        preço original era:
                                                                                                        {{ $product['old_price'] }}&nbsp;&euro;.</span>
                                                                                                    <ins
                                                                                                        aria-hidden="true">
                                                                                                        <span
                                                                                                            class="woocommerce-Price-amount amount">
                                                                                                            <bdi>{{ $product['price'] }}&nbsp;<span
                                                                                                                    class="woocommerce-Price-currencySymbol">&euro;</span></bdi>
                                                                                                        </span>
                                                                                                    </ins>
                                                                                                    <span
                                                                                                        class="screen-reader-text">O
                                                                                                        preço atual é:
                                                                                                        {{ $product['price'] }}&nbsp;&euro;.</span>
                                                                                                    <small
                                                                                                        class="woocommerce-price-suffix">IVA
                                                                                                        incluído</small>
                                                                                                </span>

                                                                                                <h3 class="name">
                                                                                                    <a
                                                                                                        href="{{ route('product.show', ['slug' => $product['slug']]) }}">{{ $product['title'] }}</a>
                                                                                                </h3>

                                                                                                <div class="group-content">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-6f53353 elementor-align-center elementor-widget elementor-widget-button"
                                                    data-id="6f53353" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                        href="{{ route('category', ['category' => 'caldeira-de-lenha']) }}">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">Ver tudo</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>


                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-cbfc30e elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="cbfc30e" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-104d36d"
                                            data-id="104d36d" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-1d0cd78 elementor-product-v1 heading-tab-style-block elementor-widget elementor-widget-tbay-product-tabs"
                                                    data-id="1d0cd78" data-element_type="widget"
                                                    data-widget_type="tbay-product-tabs.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="tbay-element tbay-element-product-tabs ajax-active">

                                                            <div class="wrapper-heading-tab">
                                                                <ul class="product-tabs-title tabs-list nav nav-tabs"
                                                                    data-atts="{&quot;categories&quot;:[&quot;a-granel&quot;],&quot;cat_operator&quot;:&quot;IN&quot;,&quot;limit&quot;:8,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;asc&quot;,&quot;product_style&quot;:&quot;v1&quot;,&quot;attr_row&quot;:&quot;class=\&quot;product-tabs row grid products\&quot; data-xlgdesktop=\&quot;4\&quot; data-desktop=\&quot;4\&quot; data-desktopsmall=\&quot;4\&quot; data-tablet=\&quot;3\&quot; data-landscape=\&quot;2\&quot; data-mobile=\&quot;2\&quot;&quot;}">
                                                                    <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="pill"
                                                                            data-bs-target="#best_selling-VEIMf-c11dc16"
                                                                            data-value="best_selling" class="active">A
                                                                            GRANEL</a>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                            <div class="tbay-addon-content tab-content woocommerce">
                                                                <div class="tab-pane active active-content current"
                                                                    id="best_selling-VEIMf-c11dc16">
                                                                    <div class="product-tabs row grid products product-tabs products"
                                                                        data-xlgdesktop="4" data-desktop="4"
                                                                        data-desktopsmall="4" data-tablet="3"
                                                                        data-landscape="2" data-mobile="2">

                                                                        @foreach ($granelProducts as $product)
                                                                            <div class="item">
                                                                                <div
                                                                                    class="products-grid product type-product post-{{ $product['id'] }} status-publish instock product_cat-a-granel has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">
                                                                                    <div class="product-block grid product v1"
                                                                                        data-product-id="{{ $product['id'] }}">
                                                                                        <div class="product-content">
                                                                                            <div class="block-inner">
                                                                                                <figure class="image ">
                                                                                                    <a title="{{ html_entity_decode($product['title'], ENT_QUOTES, 'UTF-8') }}"
                                                                                                        href="{{ route('product.show', ['slug' => $product['slug']]) }}"
                                                                                                        class="product-image">
                                                                                                        <img loading="lazy"
                                                                                                            decoding="async"
                                                                                                            width="480"
                                                                                                            height="480"
                                                                                                            src="{{ asset($product['images'][0]) }}"
                                                                                                            class="attachment-shop_catalog {image-effect"
                                                                                                            alt="" />
                                                                                                        @if ($product['hover_image'])
                                                                                                            <img loading="lazy"
                                                                                                                decoding="async"
                                                                                                                width="480"
                                                                                                                height="480"
                                                                                                                src="{{ assset($product['hover_image']) }}"
                                                                                                                class="image-hover"
                                                                                                                alt="" />
                                                                                                        @endif
                                                                                                    </a>
                                                                                                </figure>

                                                                                                <div class="group-buttons">
                                                                                                    <div class="add-cart"
                                                                                                        title="Adicionar">
                                                                                                        <a href="javascript:void(0);"
                                                                                                            data-product-id="{{ $product['id'] ?? '' }}"
                                                                                                            class="wp-block-button__link add_to_cart_button ajax_add_to_cart"
                                                                                                            aria-label="Adiciona ao carrinho: &ldquo;{{ $product['title'] ?? 'Produit' }}&rdquo;">
                                                                                                            <span
                                                                                                                class="title-cart">Adicionar</span>
                                                                                                            <i
                                                                                                                class="tb-icon tb-icon-bag-2"></i>
                                                                                                        </a>
                                                                                                        <span
                                                                                                            id="woocommerce_loop_add_to_cart_link_describedby_{{ $product['id'] }}"
                                                                                                            class="screen-reader-text"></span>
                                                                                                    </div>
                                                                                                    <div class="button-wishlist shown-mobile"
                                                                                                        title="Lista de desejos">
                                                                                                        <div class="yith-add-to-wishlist-button-block yith-add-to-wishlist-button-block--initialized"
                                                                                                            data-attributes="{&quot;kind&quot;:&quot;button&quot;}">
                                                                                                            <a class="yith-wcwl-add-to-wishlist-button yith-wcwl-add-to-wishlist-button--anchor wishlist-button
            {{ in_array($product['id'], array_keys(Session::get('wishlist', []))) ? 'wishlist-added' : '' }}"
                                                                                                                aria-label="Add To Wishlist: &ldquo;{{ $product['title'] }}&rdquo;"
                                                                                                                data-product-id="{{ $product['id'] }}"
                                                                                                                data-product-title="{{ $product['title'] }}"
                                                                                                                data-product-price="{{ $product['price'] }}"
                                                                                                                data-product-image="{{ asset($product['images'][0]) }}"
                                                                                                                data-product-slug="{{ $product['slug'] }}"
                                                                                                                href="#">
                                                                                                                <svg class="yith-wcwl-icon yith-wcwl-icon-svg yith-wcwl-add-to-wishlist-button-icon"
                                                                                                                    id="yith-wcwl-icon-heart-outline"
                                                                                                                    fill="{{ in_array($product['id'], array_keys(Session::get('wishlist', []))) ? 'red' : 'none' }}"
                                                                                                                    stroke-width="1.5"
                                                                                                                    stroke="currentColor"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                                    <path
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <span
                                                                                                                    class="yith-wcwl-add-to-wishlist-button__label">
                                                                                                                    {{ in_array($product['id'], array_keys(Session::get('wishlist', []))) ? 'Dans la liste' : 'Add to wishlist' }}
                                                                                                                </span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="tbay-quick-view">
                                                                                                        <a href="#"
                                                                                                            class="qview-button"
                                                                                                            title="Visualização Rápida"
                                                                                                            data-effect="mfp-move-from-top"
                                                                                                            data-product-id="{{ $product['id'] }}">
                                                                                                            <i
                                                                                                                class="tb-icon tb-icon-eye"></i>
                                                                                                            <span>Visualização
                                                                                                                Rápida</span>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <span class="onsale"><span
                                                                                                    class="saled">Sale</span></span>

                                                                                            <div class="caption">
                                                                                                <span class="price">
                                                                                                    <del
                                                                                                        aria-hidden="true">
                                                                                                        <span
                                                                                                            class="woocommerce-Price-amount amount">
                                                                                                            <bdi>{{ $product['old_price'] }}&nbsp;<span
                                                                                                                    class="woocommerce-Price-currencySymbol">&euro;</span></bdi>
                                                                                                        </span>
                                                                                                    </del>
                                                                                                    <span
                                                                                                        class="screen-reader-text">O
                                                                                                        preço original era:
                                                                                                        {{ $product['old_price'] }}&nbsp;&euro;.</span>
                                                                                                    <ins
                                                                                                        aria-hidden="true">
                                                                                                        <span
                                                                                                            class="woocommerce-Price-amount amount">
                                                                                                            <bdi>{{ $product['price'] }}&nbsp;<span
                                                                                                                    class="woocommerce-Price-currencySymbol">&euro;</span></bdi>
                                                                                                        </span>
                                                                                                    </ins>
                                                                                                    <span
                                                                                                        class="screen-reader-text">O
                                                                                                        preço atual é:
                                                                                                        {{ $product['price'] }}&nbsp;&euro;.</span>
                                                                                                    <small
                                                                                                        class="woocommerce-price-suffix">IVA
                                                                                                        incluído</small>
                                                                                                </span>

                                                                                                <h3 class="name">
                                                                                                    <a
                                                                                                        href="{{ route('product.show', ['slug' => $product['slug']]) }}">{{ html_entity_decode($product['title'], ENT_QUOTES, 'UTF-8') }}</a>
                                                                                                </h3>

                                                                                                <div class="group-content">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-e19d51d elementor-align-center elementor-widget elementor-widget-button"
                                                    data-id="e19d51d" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                        href="{{ route('category', ['category' => 'a-granel']) }}">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">Ver tudo</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>


                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-8a52b07 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="8a52b07" data-element_type="section"
                                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-06d766a"
                                            data-id="06d766a" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-119a993 elementor-product-v1 heading-tab-style-block elementor-widget elementor-widget-tbay-product-tabs"
                                                    data-id="119a993" data-element_type="widget"
                                                    data-widget_type="tbay-product-tabs.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="tbay-element tbay-element-product-tabs ajax-active">

                                                            <div class="wrapper-heading-tab">
                                                                <ul class="product-tabs-title tabs-list nav nav-tabs"
                                                                    data-atts="{&quot;categories&quot;:[&quot;madeira-de-fogo&quot;],&quot;cat_operator&quot;:&quot;IN&quot;,&quot;limit&quot;:8,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;asc&quot;,&quot;product_style&quot;:&quot;v1&quot;,&quot;attr_row&quot;:&quot;class=\&quot;product-tabs row grid products\&quot; data-xlgdesktop=\&quot;4\&quot; data-desktop=\&quot;4\&quot; data-desktopsmall=\&quot;4\&quot; data-tablet=\&quot;3\&quot; data-landscape=\&quot;2\&quot; data-mobile=\&quot;2\&quot;&quot;}">
                                                                    <li>
                                                                        <a href="javascript:void(0)" data-bs-toggle="pill"
                                                                            data-bs-target="#best_selling-2Rht9-c11dc16"
                                                                            data-value="best_selling"
                                                                            class="active">MADEIRA
                                                                            DE FOGO</a>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                            <div class="tbay-addon-content tab-content woocommerce">
                                                                <div class="tab-pane active active-content current"
                                                                    id="best_selling-2Rht9-c11dc16">
                                                                    <div class="product-tabs row grid products product-tabs products"
                                                                        data-xlgdesktop="4" data-desktop="4"
                                                                        data-desktopsmall="4" data-tablet="3"
                                                                        data-landscape="2" data-mobile="2">

                                                                        @foreach ($madeiraFogoProducts as $product)
                                                                            <div class="item">
                                                                                <div
                                                                                    class="products-grid product type-product post-{{ $product['id'] }} status-publish instock product_cat-madeira-de-fogo has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">
                                                                                    <div class="product-block grid product v1"
                                                                                        data-product-id="{{ $product['id'] }}">
                                                                                        <div class="product-content">
                                                                                            <div class="block-inner">
                                                                                                <figure class="image ">
                                                                                                    <a title="{{ html_entity_decode($product['title'], ENT_QUOTES, 'UTF-8') }}"
                                                                                                        href="{{ route('product.show', ['slug' => $product['slug']]) }}"
                                                                                                        class="product-image">
                                                                                                        <img loading="lazy"
                                                                                                            decoding="async"
                                                                                                            width="480"
                                                                                                            height="480"
                                                                                                            src="{{ asset($product['images'][0]) }}"
                                                                                                            class="attachment-shop_catalog {image-effect"
                                                                                                            alt="" />
                                                                                                        @if ($product['hover_image'])
                                                                                                            <img loading="lazy"
                                                                                                                decoding="async"
                                                                                                                width="480"
                                                                                                                height="480"
                                                                                                                src="{{ asset($product['hover_image']) }}"
                                                                                                                class="image-hover"
                                                                                                                alt="" />
                                                                                                        @endif
                                                                                                    </a>
                                                                                                </figure>

                                                                                                <div class="group-buttons">
                                                                                                    <div class="add-cart"
                                                                                                        title="Adicionar">
                                                                                                        <a href="javascript:void(0);"
                                                                                                            data-product-id="{{ $product['id'] ?? '' }}"
                                                                                                            class="wp-block-button__link add_to_cart_button ajax_add_to_cart"
                                                                                                            aria-label="Adiciona ao carrinho: &ldquo;{{ $product['title'] ?? 'Produit' }}&rdquo;">
                                                                                                            <span
                                                                                                                class="title-cart">Adicionar</span>
                                                                                                            <i
                                                                                                                class="tb-icon tb-icon-bag-2"></i>
                                                                                                        </a>
                                                                                                        <span
                                                                                                            id="woocommerce_loop_add_to_cart_link_describedby_{{ $product['id'] }}"
                                                                                                            class="screen-reader-text"></span>
                                                                                                    </div>
                                                                                                    <div class="button-wishlist shown-mobile"
                                                                                                        title="Lista de desejos">
                                                                                                        <div class="yith-add-to-wishlist-button-block yith-add-to-wishlist-button-block--initialized"
                                                                                                            data-attributes="{&quot;kind&quot;:&quot;button&quot;}">
                                                                                                            <a class="yith-wcwl-add-to-wishlist-button yith-wcwl-add-to-wishlist-button--anchor wishlist-button
            {{ in_array($product['id'], array_keys(Session::get('wishlist', []))) ? 'wishlist-added' : '' }}"
                                                                                                                aria-label="Add To Wishlist: &ldquo;{{ $product['title'] }}&rdquo;"
                                                                                                                data-product-id="{{ $product['id'] }}"
                                                                                                                data-product-title="{{ $product['title'] }}"
                                                                                                                data-product-price="{{ $product['price'] }}"
                                                                                                                data-product-image="{{ asset($product['images'][0]) }}"
                                                                                                                data-product-slug="{{ $product['slug'] }}"
                                                                                                                href="#">
                                                                                                                <svg class="yith-wcwl-icon yith-wcwl-icon-svg yith-wcwl-add-to-wishlist-button-icon"
                                                                                                                    id="yith-wcwl-icon-heart-outline"
                                                                                                                    fill="{{ in_array($product['id'], array_keys(Session::get('wishlist', []))) ? 'red' : 'none' }}"
                                                                                                                    stroke-width="1.5"
                                                                                                                    stroke="currentColor"
                                                                                                                    viewBox="0 0 24 24"
                                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                                    <path
                                                                                                                        stroke-linecap="round"
                                                                                                                        stroke-linejoin="round"
                                                                                                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z">
                                                                                                                    </path>
                                                                                                                </svg>
                                                                                                                <span
                                                                                                                    class="yith-wcwl-add-to-wishlist-button__label">
                                                                                                                    {{ in_array($product['id'], array_keys(Session::get('wishlist', []))) ? 'Dans la liste' : 'Add to wishlist' }}
                                                                                                                </span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="tbay-quick-view">
                                                                                                        <a href="#"
                                                                                                            class="qview-button"
                                                                                                            title="Visualização Rápida"
                                                                                                            data-effect="mfp-move-from-top"
                                                                                                            data-product-id="{{ $product['id'] }}">
                                                                                                            <i
                                                                                                                class="tb-icon tb-icon-eye"></i>
                                                                                                            <span>Visualização
                                                                                                                Rápida</span>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <span class="onsale"><span
                                                                                                    class="saled">Sale</span></span>

                                                                                            <div class="caption">
                                                                                                <span class="price">
                                                                                                    <del
                                                                                                        aria-hidden="true">
                                                                                                        <span
                                                                                                            class="woocommerce-Price-amount amount">
                                                                                                            <bdi>{{ $product['old_price'] }}&nbsp;<span
                                                                                                                    class="woocommerce-Price-currencySymbol">&euro;</span></bdi>
                                                                                                        </span>
                                                                                                    </del>
                                                                                                    <span
                                                                                                        class="screen-reader-text">O
                                                                                                        preço original era:
                                                                                                        {{ $product['old_price'] }}&nbsp;&euro;.</span>
                                                                                                    <ins
                                                                                                        aria-hidden="true">
                                                                                                        <span
                                                                                                            class="woocommerce-Price-amount amount">
                                                                                                            <bdi>{{ $product['price'] }}&nbsp;<span
                                                                                                                    class="woocommerce-Price-currencySymbol">&euro;</span></bdi>
                                                                                                        </span>
                                                                                                    </ins>
                                                                                                    <span
                                                                                                        class="screen-reader-text">O
                                                                                                        preço atual é:
                                                                                                        {{ $product['price'] }}&nbsp;&euro;.</span>
                                                                                                    <small
                                                                                                        class="woocommerce-price-suffix">IVA
                                                                                                        incluído</small>
                                                                                                </span>

                                                                                                <h3 class="name">
                                                                                                    <a
                                                                                                        href="{{ route('product.show', ['slug' => $product['slug']]) }}">{{ html_entity_decode($product['title'], ENT_QUOTES, 'UTF-8') }}</a>
                                                                                                </h3>

                                                                                                <div class="group-content">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-deef3b9 elementor-align-center elementor-widget elementor-widget-button"
                                                    data-id="deef3b9" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                        href="{{ route('category', ['category' => 'madeira-de-fogo']) }}">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">Ver tudo</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>


                                @include('section.avant-footer')
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </div>

    </div>

    @include('layouts.partials.footer.public')

@endsection

@push('scripts')
    @include('section.modeldetail');
@endpush
