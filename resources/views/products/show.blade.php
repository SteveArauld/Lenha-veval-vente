@extends('layouts.app')

@section('title', __($prevProduct['title'] . ' - ' . $product['category']))

@push('styles')

        <link rel='stylesheet' id='woof_sd_html_items_tooltip-css'
              href='{{ asset('wp-content/plugins/woocommerce-products-filter/ext/smart_designer/css/tooltip22ef.css') }}'
              type='text/css' media='all'/>


        <link rel='stylesheet' id='woof-switcher23-css'
              href='{{ asset('wp-content/plugins/woocommerce-products-filter/css/switcher22ef.css') }}'
              type='text/css' media='all'/>


        <link rel='stylesheet' id='photoswipe-css'
              href='{{ asset('wp-content/plugins/woocommerce/assets/css/photoswipe/photoswipe.mind3a6.css') }}'
              type='text/css' media='all'/>
        <link rel='stylesheet' id='photoswipe-default-skin-css'
              href='{{ asset('wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.mind3a6.css') }}'
              type='text/css' media='all'/>


        <script type="text/javascript" id="wc-single-product-js-extra">

            var wc_single_product_params = {
                "i18n_required_rating_text": "Seleccione uma classifica\u00e7\u00e3o",
                "i18n_rating_options": ["1 of 5 stars", "2 of 5 stars", "3 of 5 stars", "4 of 5 stars", "5 of 5 stars"],
                "i18n_product_gallery_trigger_text": "View full-screen image gallery",
                "review_rating_required": "yes",
                "flexslider": {
                    "rtl": false,
                    "animation": "slide",
                    "smoothHeight": true,
                    "directionNav": false,
                    "controlNav": "thumbnails",
                    "slideshow": false,
                    "animationSpeed": 500,
                    "animationLoop": false,
                    "allowOneSlide": false
                },
                "zoom_enabled": "",
                "zoom_options": [],
                "photoswipe_enabled": "1",
                "photoswipe_options": {
                    "shareEl": false,
                    "closeOnScroll": false,
                    "history": false,
                    "hideAnimationDuration": 0,
                    "showAnimationDuration": 0
                },
                "flexslider_enabled": "1"
            };

        </script>


        <script type="text/javascript"
                src="{{ asset('wp-content/plugins/woocommerce/assets/js/flexslider/jquery.flexslider.minf03a.js') }}"
                id="wc-flexslider-js" defer="defer" data-wp-strategy="defer"></script>
        <script type="text/javascript"
                src="{{ asset('wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe.min3315.js') }}"
                id="wc-photoswipe-js" defer="defer" data-wp-strategy="defer"></script>
        <script type="text/javascript"
                src="{{ asset('wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe-ui-default.min3315.js') }}"
                id="wc-photoswipe-ui-default-js" defer="defer" data-wp-strategy="defer"></script>







@endpush

@section('content')
    @include('layouts.partials.navbar.public-show')


    <div class="wp-singular product-template-default single single-product postid-5625 wp-theme-maia wp-child-theme-maia-child theme-maia woocommerce woocommerce-page woocommerce-no-js woo-variation-swatches wvs-behavior-blur wvs-theme-maia-child wvs-show-label
     wvs-tooltip tbay-body-menu-bar tbay-wc-gallery-lightbox form-cart-popup tbay-show-cart-mobile tbay-body-mobile-product-two
      elementor-default elementor-kit-7 woocommerce tbay-variation-free ajax_cart_popup mobile-show-footer-desktop mobile-show-footer-icon">


        <div id="wrapper-container" class="wrapper-container">

            <div id="tbay-main-content">

                <div id="main-wrapper" class="vertical main-wrapper ">
                    <section id="tbay-breadcrumb" class="tbay-breadcrumb  breadcrumbs-text active-nav-icon">
                        <div class="container ">
                            <div class="breadscrumb-inner">
                                <ol class="tbay-woocommerce-breadcrumb breadcrumb">
                                    <li><a href="{{ route('home') }}">Início</a></li>
                                    <li>
                                        <a href="{{ route('category', ['category' => $product['category']]) }}">{{ strtoupper(str_replace('-', ' ', $product['category'])) }}</a>
                                    </li>
                                </ol>
                                @if($prevProduct || $nextProduct)
                                    <div class="product-nav-icon pull-right">
                                        <div class="link-icons">
                                            @if($prevProduct)
                                                <div class='left-icon icon-wrapper'>
                                                    <div class='text'>
                                                        <a class='img-link left'
                                                           href="{{ route('product.show', $prevProduct['slug']) }}">
                                                            <span class='product-btn-icon'></span>Anterior
                                                        </a>
                                                    </div>
                                                    <div class='image psnav'>
                                                        <a class='img-link'
                                                           href="{{ route('product.show', $prevProduct['slug']) }}">
                                                            <img loading="lazy" width="100" height="100"
                                                                 src="{{ asset($prevProduct['images'][0]) }}"
                                                                 class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail wp-post-image"
                                                                 alt="{{ $prevProduct['title'] }}" decoding="async"/>
                                                        </a>
                                                        <div class='product_single_nav_inner single_nav'>
                                                            <a href="{{ route('product.show', $prevProduct['slug']) }}">
                                                                <span class='name-pr'>{{ $prevProduct['title'] }}</span>
                                                                <span class='price'>
                                                @if($prevProduct['old_price'] && floatval($prevProduct['old_price']) > floatval($prevProduct['price']))
                                                                        <del aria-hidden="true">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi>{{($prevProduct['old_price']) }}&nbsp;<span
                                                                class="woocommerce-Price-currencySymbol">&euro;</span></bdi>
                                                    </span>
                                                </del>
                                                                        <span class="screen-reader-text">O preço original era: {{($prevProduct['old_price']) }}&nbsp;&euro;.</span>
                                                                    @endif
                                                <ins aria-hidden="true">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi>{{($prevProduct['price']) }}&nbsp;<span
                                                                class="woocommerce-Price-currencySymbol">&euro;</span></bdi>
                                                    </span>
                                                </ins>
                                                <span class="screen-reader-text">O preço atual é: {{($prevProduct['price']) }}&nbsp;&euro;.</span>
                                                <small class="woocommerce-price-suffix">IVA incluído</small>
                                            </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif

                                            @if($nextProduct)
                                                <div class='right-icon icon-wrapper'>
                                                    <div class='text'>
                                                        <a class='img-link right'
                                                           href="{{ route('product.show', $nextProduct['slug']) }}">
                                                            Próximo<span class='product-btn-icon'></span>
                                                        </a>
                                                    </div>
                                                    <div class='image psnav'>
                                                        <div class='product_single_nav_inner single_nav'>
                                                            <a href="{{ route('product.show', $nextProduct['slug']) }}">
                                                                <span class='name-pr'>{{ $nextProduct['title'] }}</span>
                                                                <span class='price'>
                                                @if($nextProduct['old_price'] && floatval($nextProduct['old_price']) > floatval($nextProduct['price']))
                                                                        <del aria-hidden="true">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi>{{($nextProduct['old_price']) }}&nbsp;<span
                                                                class="woocommerce-Price-currencySymbol">&euro;</span></bdi>
                                                    </span>
                                                </del>
                                                                        <span class="screen-reader-text">O preço original era: {{($nextProduct['old_price']) }}&nbsp;&euro;.</span>
                                                                    @endif
                                                <ins aria-hidden="true">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi>{{($nextProduct['price']) }}&nbsp;<span
                                                                class="woocommerce-Price-currencySymbol">&euro;</span></bdi>
                                                    </span>
                                                </ins>
                                                <span class="screen-reader-text">O preço atual é: {{($nextProduct['price']) }}&nbsp;&euro;.</span>
                                                <small class="woocommerce-price-suffix">IVA incluído</small>
                                            </span>
                                                            </a>
                                                        </div>
                                                        <a class='img-link'
                                                           href="{{ route('product.show', $nextProduct['slug']) }}">
                                                            <img loading="lazy" width="100" height="100"
                                                                 src="{{ asset($nextProduct['images'][0]) }}"
                                                                 class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail wp-post-image"
                                                                 alt="{{ $nextProduct['title'] }}" decoding="async"/>
                                                        </a>

                                                        </a>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </section>
                    <div id="main-container" class="container">


                        <div class="row ">
                            <div id="main" class="singular-shop archive-full content col-12"><!-- .content -->


                                <div class="woocommerce-notices-wrapper"></div>
                                <div id="sticky-menu-bar">
                                    <div class="container">
                                        <div class="row">
                                            <div class="menu-bar-left col-lg-7">
                                                <div class="media">
                                                    <div class="media-left media-top pull-left">
                                                        <img loading="lazy" width="50" height="50"
                                                             src="{{ asset($product['hover_image'] ?? $product['images'][0]) }}"
                                                             class="attachment-50x50 size-50x50 wp-post-image"
                                                             alt="{{ $product['title'] }}"
                                                             decoding="async"/></div>
                                                    <div class="media-body">
                                                        <h2 class="product_title entry-title">{{ $product['title'] }}</h2>
                                                        <div class="woocommerce-product-rating">
                                                            <div class="star-rating"></div>
                                                            <a href="#reviews" class="woocommerce-review-link">
                                                                <span class="count">0</span> comentários de clientes
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="menu-bar-right product col-lg-5">
                                                <p class="price">
                                                    @if($product['old_price'] && floatval($product['old_price']) > floatval($product['price']))
                                                        <del aria-hidden="true">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi>{{($product['old_price']) }}&nbsp;<span
                                                                class="woocommerce-Price-currencySymbol">&euro;</span></bdi>
                                                    </span>
                                                                            </del>
                                                                            <span class="screen-reader-text">O preço original era: {{($product['old_price']) }}&nbsp;&euro;.</span>
                                                                        @endif
                                                                        <ins aria-hidden="true">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi>{{($product['price']) }}&nbsp;<span
                                                                class="woocommerce-Price-currencySymbol">&euro;</span></bdi>
                                                    </span>
                                                    </ins>
                                                    <span class="screen-reader-text">O preço atual é: {{($product['price']) }}&nbsp;&euro;.</span>
                                                    <small class="woocommerce-price-suffix">IVA incluído</small>
                                                </p>
                                                <a id="sticky-custom-add-to-cart" href="javascript:void(0);"
                                                   onclick="document.querySelector('.single_add_to_cart_button').click()">Adicionar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="product-{{ $product['id'] }}"
                                     class="style-vertical product type-product post-{{ $product['id'] }} status-publish first {{ $product['in_stock'] ? 'instock' : 'outofstock' }} product_cat-{{ $product['category'] }} has-post-thumbnail {{ $product['old_price'] && floatval($product['old_price']) > floatval($product['price']) ? 'sale' : '' }} taxable shipping-taxable purchasable product-type-simple">

                                    <div class="single-main-content">

                                        <div class="row">
                                            <div class="image-mains col-lg-6 ">

                                                <span class="onsale"><span class="saled">Sale</span></span>
                                                <div
                                                    class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images has-gallery"
                                                    data-columns="4" data-rtl="no" data-layout=vertical
                                                    style="opacity: 0; transition: opacity .25s ease-in-out;">

                                                    <div class="woocommerce-product-gallery__wrapper">
                                                        @foreach($product['images'] as $index => $image)
                                                            <div data-thumb="{{ asset($image) }}"
                                                                 data-thumb-alt="{{ $product['title'] }} @if($index > 0)- Image {{ $index + 1 }}@endif"
                                                                 class="woocommerce-product-gallery__image">
                                                                <a href="{{ asset($image) }}">
                                                                    <img loading="lazy" width="800" height="800"
                                                                         src="{{ asset($image) }}"
                                                                         class="{{ $index === 0 ? 'wp-post-image' : '' }}"
                                                                         alt="{{ $product['title'] }} @if($index > 0)- Image {{ $index + 1 }}@endif"
                                                                         data-caption=""
                                                                         data-src="{{ asset($image) }}"
                                                                         data-large_image="{{ asset($image) }}"
                                                                         data-large_image_width="800"
                                                                         data-large_image_height="800"
                                                                         decoding="async"/>
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="details-btn-wrapper">
                                                        <a class="view-details-btn"
                                                                                        href="{{ route('home') }}l">Ver detalhes</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="information col-lg-6">
                                                <div class="summary entry-summary">
                                                    <div class="top-single-product">
                                                        <p class="price">

                                                            <del aria-hidden="true">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi>{{$product['old_price'] }}&nbsp;<span
                                                                class="woocommerce-Price-currencySymbol">&euro;</span></bdi>
                                                    </span>
                                                            </del>
                                                            <span class="screen-reader-text">O preço original era: {{ $product['old_price'] }}&nbsp;&euro;.</span>

                                                            <ins aria-hidden="true">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi>{{ $product['price'] }}&nbsp;<span
                                                                class="woocommerce-Price-currencySymbol">&euro;</span></bdi>
                                                    </span>
                                                            </ins>
                                                            <span class="screen-reader-text">O preço atual é: {{ $product['price']}}&nbsp;&euro;.</span>
                                                            <small class="woocommerce-price-suffix">IVA incluído</small>
                                                        </p>

                                                        <h1 class="product_title entry-title">{{ $product['title'] }}</h1>

                                                        <div class="woocommerce-product-rating">
                                                            <div class="star-rating"></div>
                                                            <a href="#reviews" class="woocommerce-review-link">
                                                                <span class="count">0</span> comentários de clientes
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="woocommerce-product-details__short-description">
                                                        <p>{{ $product['short_description'] }}</p>
                                                    </div>

                                                    <form class="cart" action="{{ route('cart.add') }}" method="post"
                                                          enctype='multipart/form-data'>
                                                        @csrf
                                                        <input type="hidden" name="product_id"
                                                               value="{{ $product['id'] }}">

                                                        <div id="mobile-close-infor"><i
                                                                class="tb-icon tb-icon-close-01"></i></div>

                                                        <div class="mobile-infor-wrapper">
                                                            <div class="d-flex">
                                                                <div class="me-3">
                                                                    <img loading="lazy" width="100" height="100"
                                                                         src="{{ asset($product['images'][0]) }}"
                                                                         class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail"
                                                                         alt="{{ $product['title'] }}"
                                                                         decoding="async"/>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="infor-body">
                                                                        <p class="price">
                                                                            @if($product['old_price'] && floatval($product['old_price']) > floatval($product['price']))
                                                                                <del aria-hidden="true">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <bdi>{{($product['old_price']) }}&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&euro;</span></bdi>
                                                                    </span>
                                                                                </del>
                                                                                <span class="screen-reader-text">O preço original era: {{($product['old_price']) }}&nbsp;&euro;.</span>
                                                                            @endif
                                                                            <ins aria-hidden="true">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <bdi>{{($product['price']) }}&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&euro;</span></bdi>
                                                                    </span>
                                                                            </ins>
                                                                            <span class="screen-reader-text">O preço atual é: {{($product['price']) }}&nbsp;&euro;.</span>
                                                                            <small class="woocommerce-price-suffix">IVA
                                                                                incluído</small>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div id="shop-now" class="shop-now has-buy-now has-wishlist">
                                                            <div class="quantity">
                                                                <label class="screen-reader-text"
                                                                       for="quantity_{{ $product['id'] }}">
                                                                    Quantidade de {{ $product['title'] }}
                                                                </label>
                                                                <div class="quantity-selector">
                                                                    <button type="button" class="quantity-m" >−
                                                                    </button>
                                                                    <input type="number" class="quantity-add"

                                                                           value="1"
                                                                           aria-label="Quantidade do produto"
                                                                    >

                                                                    <button type="button" class="quantity-p" >＋
                                                                    </button>
                                                                </div>

                                                                <script>
                                                                    document.addEventListener('DOMContentLoaded', function () {
                                                                        const selector = document.querySelector('.quantity-selector');
                                                                        const input = selector.querySelector('.quantity-add');
                                                                        const minusBtn = selector.querySelector('.quantity-m');
                                                                        const plusBtn = selector.querySelector('.quantity-p');

                                                                        plusBtn.addEventListener('click', function () {
                                                                            let value = parseInt(input.value, 10) || 1;
                                                                            input.value = value + 1;
                                                                        });

                                                                        minusBtn.addEventListener('click', function () {
                                                                            let value = parseInt(input.value, 10) || 1;
                                                                            if (value > 1) {
                                                                                input.value = value - 1;
                                                                            } else {
                                                                                input.value = 1; // reste toujours à 1 minimum
                                                                            }
                                                                        });

                                                                        // Sécurité si l'utilisateur tape manuellement
                                                                        input.addEventListener('input', function () {
                                                                            let value = parseInt(input.value, 10);
                                                                            if (isNaN(value) || value < 1) {
                                                                                input.value = 1;
                                                                            }
                                                                        });
                                                                    });
                                                                </script>



                                                            </div>

                                                            <a href="javascript:void(0);" name="add-to-cart"
                                                               data-product-id="{{ $product['id'] ?? '' }}"
                                                               aria-label="Adiciona ao carrinho: &ldquo;{{ $product['title'] ?? 'Produit' }}&rdquo;"
                                                                    class="single_add_to_cart_button ajax_add_to_cart button alt {{ !$product['in_stock'] ? 'disabled' : '' }}"
                                                                {{ !$product['in_stock'] ? 'disabled' : '' }}>
                                                                {{ $product['in_stock'] ? 'Adicionar' : 'Fora de stock' }}

                                                            </a>

                                                            @if($product['in_stock'])
                                                                <a href="{{ route("checkout") }}" class="tbay-buy-now button"
                                                                        onclick="buyNow()">Comprar Agora
                                                                </a>
                                                            @endif

                                                            <div class="maia-custom-fields d-none">
                                                                <input type="hidden" name="maia-enable-addtocart-ajax"
                                                                       value="0"/>
                                                                <input type="hidden" name="data-product_id"
                                                                       value="{{ $product['id'] }}"/>
                                                                <input type="hidden" name="data-type" value="simple"/>
                                                            </div>
                                                        </div>
                                                        <div class="group-button">

                                                            <div class="tbay-wishlist">
                                                                <div class="button-wishlist shown-mobile"
                                                                     title="Lista de desejos">
                                                                    <div
                                                                        class="yith-add-to-wishlist-button-block yith-add-to-wishlist-button-block--single yith-add-to-wishlist-button-block--initialized"
                                                                        data-product-id="5518"
                                                                        data-attributes="{&quot;is_single&quot;:true,&quot;kind&quot;:&quot;button&quot;,&quot;show_view&quot;:true}">
                                                                        <a href="{{ route('wishlist.add', $product['id']) }}"
                                                                           class="yith-wcwl-add-to-wishlist-button yith-wcwl-add-to-wishlist-button--anchor yith-wcwl-add-to-wishlist-button--single">
                                                                            <svg
                                                                                class="yith-wcwl-icon yith-wcwl-icon-svg yith-wcwl-add-to-wishlist-button-icon"
                                                                                id="yith-wcwl-icon-heart-outline"
                                                                                fill="none" stroke-width="1.5"
                                                                                stroke="currentColor"
                                                                                viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path stroke-linecap="round"
                                                                                      stroke-linejoin="round"
                                                                                      d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"></path>
                                                                            </svg>
                                                                            <span
                                                                                class="yith-wcwl-add-to-wishlist-button__label">Add to wishlist</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </form>

                                                    <div class="product_meta">
                                                        <span class="sku_wrapper">REF: <span
                                                                class="sku">{{ $product['ref'] }}</span></span>
                                                        <span class="posted_in">Categoria:
                                                            <a href="{{ route('category', ['category' => $product['category']]) }}"
                                                               rel="tag">
                                                                {{ strtoupper(str_replace('-', ' ', $product['category'])) }}
                                                            </a>
                                                        </span>
                                                    </div>
                                                    <style
                                                        id="elementor-post-3068">.elementor-3068 .elementor-element.elementor-element-29ff4f4 {
                                                            border-style: solid;
                                                            border-width: 1px 1px 1px 1px;
                                                            border-color: #F55F1E;
                                                            margin-top: 37px;
                                                            margin-bottom: 0px;
                                                        }

                                                        .elementor-3068 .elementor-element.elementor-element-29ff4f4, .elementor-3068 .elementor-element.elementor-element-29ff4f4 > .elementor-background-overlay {
                                                            border-radius: 5px 5px 5px 5px;
                                                        }

                                                        .elementor-3068 .elementor-element.elementor-element-7114f96 .elementor-button {
                                                            background-color: #F55F1E;
                                                            font-size: 16px;
                                                            font-weight: 500;
                                                            line-height: 24px;
                                                            border-radius: 3px 3px 3px 3px;
                                                            padding: 3px 8px 3px 8px;
                                                        }

                                                        .elementor-3068 .elementor-element.elementor-element-7114f96 {
                                                            margin: -16px 0px calc(var(--kit-widget-spacing, 0px) + 0px) 0px;
                                                        }

                                                        .elementor-3068 .elementor-element.elementor-element-48884e7:not(.elementor-motion-effects-element-type-background), .elementor-3068 .elementor-element.elementor-element-48884e7 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
                                                            background-color: #9E5033;
                                                        }

                                                        .elementor-3068 .elementor-element.elementor-element-48884e7 {
                                                            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                                                            padding: 16px 40px 17px 40px;
                                                        }

                                                        .elementor-3068 .elementor-element.elementor-element-48884e7 > .elementor-background-overlay {
                                                            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
                                                        }

                                                        .elementor-3068 .elementor-element.elementor-element-3e43a0e > div.elementor-element-populated {
                                                            padding: 0px 30px 0px 30px !important;
                                                        }

                                                        .elementor-3068 .elementor-element.elementor-element-b333598 .elementor-icon-box-title {
                                                            margin-block-end: 7px;
                                                            color: #FFFFFF;
                                                        }

                                                        .elementor-3068 .elementor-element.elementor-element-b333598 .elementor-icon-box-title, .elementor-3068 .elementor-element.elementor-element-b333598 .elementor-icon-box-title a {
                                                            font-size: 24px;
                                                            font-weight: 700;
                                                            line-height: 36px;
                                                        }

                                                        .elementor-3068 .elementor-element.elementor-element-b333598 .elementor-icon-box-description {
                                                            font-size: 16px;
                                                            line-height: 24px;
                                                            color: #FFFFFF;
                                                        }

                                                        .elementor-3068 .elementor-element.elementor-element-73ccedf > div.elementor-element-populated {
                                                            padding: 0px 30px 0px 30px !important;
                                                        }

                                                        .elementor-3068 .elementor-element.elementor-element-9f71d2b .elementor-icon-box-title {
                                                            margin-block-end: 7px;
                                                            color: #FFFFFF;
                                                        }

                                                        .elementor-3068 .elementor-element.elementor-element-9f71d2b .elementor-icon-box-title, .elementor-3068 .elementor-element.elementor-element-9f71d2b .elementor-icon-box-title a {
                                                            font-size: 24px;
                                                            font-weight: 700;
                                                            line-height: 36px;
                                                        }

                                                        .elementor-3068 .elementor-element.elementor-element-9f71d2b .elementor-icon-box-description {
                                                            font-size: 16px;
                                                            line-height: 24px;
                                                            color: #FFFFFF;
                                                        }

                                                        .elementor-3068 .elementor-element.elementor-element-6b1e690 > div.elementor-element-populated {
                                                            padding: 0px 30px 0px 30px !important;
                                                        }

                                                        .elementor-3068 .elementor-element.elementor-element-4aed4d7 .elementor-icon-box-title {
                                                            margin-block-end: 7px;
                                                            color: #FFFFFF;
                                                        }

                                                        .elementor-3068 .elementor-element.elementor-element-4aed4d7 .elementor-icon-box-title, .elementor-3068 .elementor-element.elementor-element-4aed4d7 .elementor-icon-box-title a {
                                                            font-size: 24px;
                                                            font-weight: 700;
                                                            line-height: 36px;
                                                        }

                                                        .elementor-3068 .elementor-element.elementor-element-4aed4d7 .elementor-icon-box-description {
                                                            font-size: 16px;
                                                            line-height: 24px;
                                                            color: #FFFFFF;
                                                        }

                                                        @media (max-width: 1024px) {
                                                            .elementor-3068 .elementor-element.elementor-element-48884e7 {
                                                                padding: 16px 0px 16px 0px;
                                                            }

                                                            .elementor-3068 .elementor-element.elementor-element-3e43a0e > div.elementor-element-populated {
                                                                padding: 0px 15px 0px 15px !important;
                                                            }

                                                            .elementor-3068 .elementor-element.elementor-element-73ccedf > div.elementor-element-populated {
                                                                padding: 0px 15px 0px 15px !important;
                                                            }

                                                            .elementor-3068 .elementor-element.elementor-element-6b1e690 > div.elementor-element-populated {
                                                                padding: 0px 15px 0px 15px !important;
                                                            }
                                                        }

                                                        @media (max-width: 767px) {
                                                            .elementor-3068 .elementor-element.elementor-element-3e43a0e > div.elementor-element-populated {
                                                                padding: 15px 15px 15px 15px !important;
                                                            }

                                                            .elementor-3068 .elementor-element.elementor-element-b333598 .elementor-icon-box-title {
                                                                margin-block-end: 0px;
                                                            }

                                                            .elementor-3068 .elementor-element.elementor-element-b333598 .elementor-icon-box-title, .elementor-3068 .elementor-element.elementor-element-b333598 .elementor-icon-box-title a {
                                                                font-size: 20px;
                                                                line-height: 32px;
                                                            }

                                                            .elementor-3068 .elementor-element.elementor-element-73ccedf > .elementor-element-populated {
                                                                margin: 0px 0px 15px 0px;
                                                                --e-column-margin-right: 0px;
                                                                --e-column-margin-left: 0px;
                                                            }

                                                            .elementor-3068 .elementor-element.elementor-element-9f71d2b .elementor-icon-box-title {
                                                                margin-block-end: 0px;
                                                            }

                                                            .elementor-3068 .elementor-element.elementor-element-9f71d2b .elementor-icon-box-title, .elementor-3068 .elementor-element.elementor-element-9f71d2b .elementor-icon-box-title a {
                                                                font-size: 20px;
                                                                line-height: 32px;
                                                            }

                                                            .elementor-3068 .elementor-element.elementor-element-6b1e690 > div.elementor-element-populated {
                                                                padding: 0px 15px 15px 15px !important;
                                                            }

                                                            .elementor-3068 .elementor-element.elementor-element-4aed4d7 .elementor-icon-box-title {
                                                                margin-block-end: 0px;
                                                            }

                                                            .elementor-3068 .elementor-element.elementor-element-4aed4d7 .elementor-icon-box-title, .elementor-3068 .elementor-element.elementor-element-4aed4d7 .elementor-icon-box-title a {
                                                                font-size: 20px;
                                                            }
                                                        }</style>
                                                    <!-- Section informations de livraison -->
                                                    <div class="tbay-after-inner-product-summary">
                                                        <div data-elementor-type="wp-post" data-elementor-id="3068"
                                                             class="elementor elementor-3068">
                                                            <section
                                                                class="elementor-section elementor-top-section elementor-element elementor-element-29ff4f4 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                data-id="29ff4f4" data-element_type="section">
                                                                <div
                                                                    class="elementor-container elementor-column-gap-no">
                                                                    <div
                                                                        class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-eb17651"
                                                                        data-id="eb17651" data-element_type="column">
                                                                        <div
                                                                            class="elementor-widget-wrap elementor-element-populated">
                                                                            <div
                                                                                class="elementor-element elementor-element-7114f96 elementor-align-center elementor-widget elementor-widget-button"
                                                                                data-id="7114f96"
                                                                                data-element_type="widget"
                                                                                data-widget_type="button.default">
                                                                                <a class="elementor-button elementor-size-sm"
                                                                                   role="button">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Pagamento SEGURO garantido</span>
					</span>
                                                                                </a>
                                                                            </div>
                                                                            <section
                                                                                class="elementor-section elementor-inner-section elementor-element elementor-element-48884e7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                                data-id="48884e7"
                                                                                data-element_type="section"
                                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                <div
                                                                                    class="elementor-container elementor-column-gap-no">
                                                                                    <div
                                                                                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3e43a0e"
                                                                                        data-id="3e43a0e"
                                                                                        data-element_type="column">
                                                                                        <div
                                                                                            class="elementor-widget-wrap elementor-element-populated">
                                                                                            <div
                                                                                                class="elementor-element elementor-element-b333598 elementor-widget elementor-widget-icon-box"
                                                                                                data-id="b333598"
                                                                                                data-element_type="widget"
                                                                                                data-widget_type="icon-box.default">
                                                                                                <div
                                                                                                    class="elementor-icon-box-wrapper">


                                                                                                    <div
                                                                                                        class="elementor-icon-box-content">

                                                                                                        <h3 class="elementor-icon-box-title">
						<span>
							Livraison						</span>
                                                                                                        </h3>

                                                                                                        <p class="elementor-icon-box-description">
                                                                                                            🚚 Entrega
                                                                                                            gratuita: 3
                                                                                                            a 5 dias
                                                                                                            úteis </p>

                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-73ccedf"
                                                                                        data-id="73ccedf"
                                                                                        data-element_type="column">
                                                                                        <div
                                                                                            class="elementor-widget-wrap elementor-element-populated">
                                                                                            <div
                                                                                                class="elementor-element elementor-element-9f71d2b elementor-widget elementor-widget-icon-box"
                                                                                                data-id="9f71d2b"
                                                                                                data-element_type="widget"
                                                                                                data-widget_type="icon-box.default">
                                                                                                <div
                                                                                                    class="elementor-icon-box-wrapper">


                                                                                                    <div
                                                                                                        class="elementor-icon-box-content">

                                                                                                        <h3 class="elementor-icon-box-title">
						<span>
							100%						</span>
                                                                                                        </h3>

                                                                                                        <p class="elementor-icon-box-description">
                                                                                                            🔒 Pagamento
                                                                                                            100%
                                                                                                            seguro </p>

                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6b1e690"
                                                                                        data-id="6b1e690"
                                                                                        data-element_type="column">
                                                                                        <div
                                                                                            class="elementor-widget-wrap elementor-element-populated">
                                                                                            <div
                                                                                                class="elementor-element elementor-element-4aed4d7 elementor-widget elementor-widget-icon-box"
                                                                                                data-id="4aed4d7"
                                                                                                data-element_type="widget"
                                                                                                data-widget_type="icon-box.default">
                                                                                                <div
                                                                                                    class="elementor-icon-box-wrapper">


                                                                                                    <div
                                                                                                        class="elementor-icon-box-content">

                                                                                                        <h3 class="elementor-icon-box-title">
						<span>
							Pedido seguro						</span>
                                                                                                        </h3>

                                                                                                        <p class="elementor-icon-box-description">
                                                                                                            📦 Produto
                                                                                                            em
                                                                                                            stock </p>

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
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="woocommerce-tabs" class="woocommerce-tabs wc-tabs-wrapper">
                                        <ul class="tabs wc-tabs nav nav-tabs" role="tablist">
                                            <li role="presentation" class="description_tab" id="tbay-wc-tab-description">
                                                <a href="#tab-description" role="tab" aria-controls="tab-description">Descrição</a>
                                            </li>
                                         {{--   <li role="presentation" class="reviews_tab" id="tbay-wc-tab-reviews">
                                                <a href="#tab-reviews" role="tab" aria-controls="tab-reviews">Avaliações
                                                    (0)</a>
                                            </li>--}}
                                        </ul>
                                        <div
                                            class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab tab-pane active"
                                            id="tab-description" role="tabpanel"
                                            aria-labelledby="tbay-wc-tab-description">
                                            <div class="product-description">
                                                {!! nl2br(e($product['description'])) !!}
                                            </div>
                                        </div>
                                   {{--     <div
                                            class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab"
                                            id="tab-reviews" role="tabpanel" aria-labelledby="tbay-wc-tab-reviews">
                                            <div id="reviews" class="woocommerce-Reviews">
                                                <div id="comments">
                                                    <h2 class="woocommerce-Reviews-title">
                                                        Avaliações </h2>

                                                    <p class="woocommerce-noreviews">Ainda não existem avaliações.</p>
                                                </div>

                                                <div id="review_form_wrapper">
                                                    <div id="review_form">
                                                        <div id="respond" class="comment-respond">
                                                            <span id="reply-title" class="comment-reply-title"
                                                                  role="heading" aria-level="3">Seja o primeiro a avaliar &ldquo;Ardenforest Pellets – Paletes de 70 sacos de 15 kg&rdquo; <small><a
                                                                        rel="nofollow" id="cancel-comment-reply-link"
                                                                        href="" style="display:none;">Cancelar resposta</a></small></span>
                                                            <form action=""
                                                                  method="post" id="commentform" class="comment-form"><p
                                                                    class="comment-notes"><span id="email-notes">O seu endereço de email não será publicado.</span>
                                                                    <span class="required-field-message">Campos obrigatórios marcados com <span
                                                                            class="required">*</span></span></p>
                                                                <div class="comment-form-fields-wrapper"><p
                                                                        class="comment-form-author"><label for="author">Nome&nbsp;<span
                                                                                class="required">*</span></label><input
                                                                            id="author" name="author" type="text"
                                                                            autocomplete="name" value="" size="30"
                                                                            required/></p>
                                                                    <p class="comment-form-email"><label for="email">Email&nbsp;<span
                                                                                class="required">*</span></label><input
                                                                            id="email" name="email" type="email"
                                                                            autocomplete="email" value="" size="30"
                                                                            required/></p>
                                                                    <div class="comment-form-rating"><label for="rating"
                                                                                                            id="comment-form-rating-label">A
                                                                            sua classificação&nbsp;<span
                                                                                class="required">*</span></label><select
                                                                            name="rating" id="rating" required>
                                                                            <option value="">Taxa&hellip;</option>
                                                                            <option value="5">Perfeito</option>
                                                                            <option value="4">Bom</option>
                                                                            <option value="3">Razoável</option>
                                                                            <option value="2">Nada mal</option>
                                                                            <option value="1">Muito fraca</option>
                                                                        </select></div>
                                                                    <p class="comment-form-comment"><label for="comment">A
                                                                            sua avaliação sobre o produto&nbsp;<span
                                                                                class="required">*</span></label><textarea
                                                                            id="comment" name="comment" cols="45" rows="8"
                                                                            required></textarea></p>
                                                                    <p class="comment-form-cookies-consent"><input
                                                                            id="wp-comment-cookies-consent"
                                                                            name="wp-comment-cookies-consent"
                                                                            type="checkbox" value="yes"/> <label
                                                                            for="wp-comment-cookies-consent">Guardar o meu
                                                                            nome, email e site neste navegador para a
                                                                            próxima vez que eu comentar.</label></p>
                                                                </div>
                                                                <p class="form-submit"><input name="submit" type="submit"
                                                                                              id="submit" class="submit"
                                                                                              value="Enviar"/> <input
                                                                        type='hidden' name='comment_post_ID' value='5625'
                                                                        id='comment_post_ID'/>
                                                                    <input type='hidden' name='comment_parent'
                                                                           id='comment_parent' value='0'/>
                                                                </p></form>
                                                        </div><!-- #respond -->
                                                    </div>
                                                </div>

                                                <div class="clear"></div>
                                            </div>
                                        </div>--}}

                                    </div>

                                    @if($relatedProducts->count() > 0)
                                        <div class="related products tbay-element tbay-element-product" id="product-related">
                                        <h3 class="heading-tbay-title"><span>Produtos relacionados</span></h3>
                                        <div class="tbay-element-content woocommerce">
                                            <div class="owl-carousel products related rows-1 " data-items="4"
                                                 data-desktopslick="4" data-desktopsmallslick="4" data-tabletslick="3"
                                                 data-landscapeslick="3" data-mobileslick="2" data-carousel="owl"
                                                 data-rows="1" data-nav="1" data-pagination="" data-loop="" data-auto=""
                                                 data-unslick="">
                                                @foreach($relatedProducts as $relatedProduct)
                                                 <div class="item">
                                                    <div
                                                        class="products-grid product type-product post-5642 status-publish instock product_cat-pellets-de-madeira has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">

                                                        <div
                                                            class="product type-product post-5642 status-publish instock product_cat-pellets-de-madeira has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">
                                                            <div class="product-block grid product v1"
                                                                 data-product-id="5642">
                                                                <div class="product-content">

                                                                    <div class="block-inner">
                                                                        <figure class="image ">
                                                                            <a title="Vimasol Pellet – Palete de 72 sacos"
                                                                               href="{{ route('product.show', $relatedProduct['slug']) }}"
                                                                               class="product-image">

                                                                                <img width="480" height="480"
                                                                                     src="{{ asset($relatedProduct['images'][0]) }}"
                                                                                     class="attachment-shop_catalog {{ count($relatedProduct['images']) > 1 ? 'image-effect' : '' }}"
                                                                                     alt="{{ $relatedProduct['title'] ?? '' }}"
                                                                                     decoding="async"/>

                                                                                @if(count($relatedProduct['images']) > 1 && isset($relatedProduct['images'][1]))
                                                                                    <img width="480" height="480"
                                                                                         src="{{ asset($relatedProduct['images'][1]) }}"
                                                                                         class="image-hover"
                                                                                         alt="{{ $relatedProduct['title'] ?? '' }}"
                                                                                         decoding="async"/>
                                                                                @endif

                                                                            </a>



                                                                        </figure>


                                                                        <div class="group-buttons">
                                                                            <div class="add-cart" title="Adicionar"><a
                                                                                    href="javascript:void(0);"
                                                                                    aria-describedby="woocommerce_loop_add_to_cart_link_describedby_5642"
                                                                                    data-quantity="1"
                                                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                    data-product_id="{{ $relatedProduct['id'] }}"
                                                                                    data-product_sku="{{ $relatedProduct['ref'] }}"
                                                                                    aria-label="Adiciona ao carrinho: &ldquo;Vimasol Pellet – Palete de 72 sacos&rdquo;"
                                                                                    rel="nofollow"
                                                                                    data-success_message="&ldquo;Vimasol Pellet – Palete de 72 sacos&rdquo; foi adicionado ao seu carrinho"><span
                                                                                        class="title-cart">Adicionar</span><i
                                                                                        class="tb-icon tb-icon-bag-2"></i></a>
                                                                                <span
                                                                                    id="woocommerce_loop_add_to_cart_link_describedby_5642"
                                                                                    class="screen-reader-text">
                        </span>
                                                                            </div>
                                                                            <div class="button-wishlist shown-mobile"
                                                                                 title="Lista de desejos">
                                                                                <div
                                                                                    class="yith-add-to-wishlist-button-block"
                                                                                    data-product-id="5642"
                                                                                    data-attributes="{&quot;kind&quot;:&quot;button&quot;}"></div>
                                                                            </div>
                                                                            <div class="tbay-quick-view">
                                                                                <a href="#" class="qview-button"
                                                                                   title="Visualização Rápida"
                                                                                   data-effect="mfp-move-from-top"
                                                                                   data-product_id="{{ $relatedProduct['id'] }}">
                                                                                    <i class="tb-icon tb-icon-eye"></i>
                                                                                    <span>Visualização Rápida</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>

                                                                    </div>


                                                                    <span class="onsale"><span
                                                                            class="saled">Sale</span></span>


                                                                    <div class="caption">


                                                                        <span class="price"><del aria-hidden="true"><span
                                                                                    class="woocommerce-Price-amount amount"><bdi>448.00&nbsp;<span
                                                                                            class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></del> <span
                                                                                class="screen-reader-text">O preço original era: 448.00&nbsp;&euro;.</span><ins
                                                                                aria-hidden="true"><span
                                                                                    class="woocommerce-Price-amount amount"><bdi>358.00&nbsp;<span
                                                                                            class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></ins><span
                                                                                class="screen-reader-text">O preço atual é: 358.00&nbsp;&euro;.</span> <small
                                                                                class="woocommerce-price-suffix">IVA incluído</small></span>

                                                                        <h3 class="name "><a
                                                                                href="{{ route('product.show', $relatedProduct['slug']) }}">{{$relatedProduct['title']}}</a></h3>


                                                                        <div class="group-content">

                                                                        </div>


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
                                    @endif

                                </div><!-- #product-5625 -->



                            </div><!-- .content -->

                        </div> <!-- .row -->
                    </div> <!-- container -->
                </div> <!-- main wrapper-->

            </div>

        </div>

        <div id="photoswipe-fullscreen-dialog" class="pswp" tabindex="-1" role="dialog" aria-modal="true" aria-hidden="true"
         aria-label="Imagem de ecrã inteiro">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--zoom" aria-label="Aumentar/Diminuir"></button>
                    <button class="pswp__button pswp__button--fs" aria-label="Alternar ecrã inteiro"></button>
                    <button class="pswp__button pswp__button--share" aria-label="Partilhar"></button>
                    <button class="pswp__button pswp__button--close" aria-label="Fechar (Esc)"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left"
                        aria-label="Anterior (seta para a esquerda)"></button>
                <button class="pswp__button pswp__button--arrow--right"
                        aria-label="Seguinte (seta para a direita)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>

    </div>


    @include('layouts.partials.footer.public')


@endsection

@push('scripts')

    <script type="text/javascript" id="maia-script-js-extra">

        var maia_settings = {
            "storage_key": "maia_f450d35ceaa94f3ab7cf20a9fa5496f0",
            "quantity_minus": "\u003Ci class=\"tb-icon tb-icon-minus\"\u003E\u003C/i\u003E",
            "quantity_plus": "\u003Ci class=\"tb-icon tb-icon-plus\"\u003E\u003C/i\u003E",
            "ajaxurl": "#",
            "cancel": "cancelar",
            "close": "\u003Ci class=\"tb-icon tb-icon-close-01\"\u003E\u003C/i\u003E",
            "show_all_text": "Visualizar todas as",
            "search": "Procura",
            "wp_searchnonce": "c68c8a6a45",
            "wp_megamenunonce": "088c4915db",
            "wp_menuclicknonce": "cc7a2dc087",
            "wp_templateclicknonce": "024d1600bd",
            "posts": "{\"page\":0,\"product\":\"ardenforest-pellets-paletes-de-70-sacos-de-15-kg\",\"post_type\":\"product\",\"name\":\"ardenforest-pellets-paletes-de-70-sacos-de-15-kg\",\"error\":\"\",\"m\":\"\",\"p\":0,\"post_parent\":\"\",\"subpost\":\"\",\"subpost_id\":\"\",\"attachment\":\"\",\"attachment_id\":0,\"pagename\":\"\",\"page_id\":0,\"second\":\"\",\"minute\":\"\",\"hour\":\"\",\"day\":0,\"monthnum\":0,\"year\":0,\"w\":0,\"category_name\":\"\",\"tag\":\"\",\"cat\":\"\",\"tag_id\":\"\",\"author\":\"\",\"author_name\":\"\",\"feed\":\"\",\"tb\":\"\",\"paged\":0,\"meta_key\":\"\",\"meta_value\":\"\",\"preview\":\"\",\"s\":\"\",\"sentence\":\"\",\"title\":\"\",\"fields\":\"all\",\"menu_order\":\"\",\"embed\":\"\",\"category__in\":[],\"category__not_in\":[],\"category__and\":[],\"post__in\":[],\"post__not_in\":[],\"post_name__in\":[],\"tag__in\":[],\"tag__not_in\":[],\"tag__and\":[],\"tag_slug__in\":[],\"tag_slug__and\":[],\"post_parent__in\":[],\"post_parent__not_in\":[],\"author__in\":[],\"author__not_in\":[],\"search_columns\":[],\"ignore_sticky_posts\":false,\"suppress_filters\":false,\"cache_results\":true,\"update_post_term_cache\":true,\"update_menu_item_cache\":false,\"lazy_load_term_meta\":true,\"update_post_meta_cache\":true,\"posts_per_page\":10,\"nopaging\":false,\"comments_per_page\":\"50\",\"no_found_rows\":false,\"order\":\"DESC\"}",
            "mobile": "",
            "slick_prev": "\u003Ci class=\"tb-icon tb-icon-angle-left\"\u003E\u003C/i\u003E",
            "slick_next": "\u003Ci class=\"tb-icon tb-icon-angle-right\"\u003E\u003C/i\u003E\u003C/button\u003E",
            "elements_ready": {
                "slick": ["brands", "products", "posts-grid", "our-team", "product-category", "product-tabs", "testimonials", "product-categories-tabs", "list-categories-product", "custom-image-list-categories", "custom-image-list-tags", "product-recently-viewed", "product-flash-sales", "product-list-tags", "product-count-down"],
                "products": ["products", "single-product-home", "product-category", "product-tabs", "product-categories-tabs"],
                "ajax_tabs": ["product-categories-tabs", "product-tabs"],
                "countdowntimer": ["product-flash-sales", "product-count-down"],
                "navmenu": ["nav-menu"],
                "autocomplete": ["search-form", "search-canvas"],
                "customfonts": ["list-custom-fonts"]
            },
            "combined_css": "1",
            "popup_cart_icon": "\u003Ci class=\"tb-icon tb-icon tb-icon-tick-circle\"\u003E\u003C/i\u003E",
            "popup_cart_noti": "foi adicionado ao carrinho de compras.",
            "cart_position": "popup",
            "ajax_update_quantity": "1",
            "display_mode": "grid",
            "quantity_mode": "",
            "loader": "/wp-content/themes/maia/images/ajax-loader-alt.svg",
            "is_checkout": "",
            "ajax_popup_quick": "1",
            "wc_ajax_url": "/?wc-ajax=%%endpoint%%",
            "checkout_url": "#",
            "i18n_checkout": "Checkout",
            "img_class_container": ".woocommerce-product-gallery__image",
            "thumbnail_gallery_class_element": ".flex-control-nav.flex-control-thumbs li",
            "wp_minicartquantitynonce": "6e5c365135",
            "wp_productremovenonce": "8f139c8c71",
            "wp_productscategoriestabnonce": "3c69c382ff",
            "wp_productstabnonce": "6655b89d66",
            "wp_productslistnonce": "a9f754759c",
            "wp_productsgridnonce": "411b98ec16",
            "wp_singleaddtocartnonce": "916bde19aa",
            "wp_popupvariationnamenonce": "8fcc8e9d12",
            "wp_wishlistcountnonce": "c9151119ff",
            "wp_quickviewproductnonce": "00bd06f294"
        };

    </script>

@endpush
