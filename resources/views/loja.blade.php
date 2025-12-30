@extends('layouts.app')

@section('title', __('Loja'))
@push('styles')
    <style>
        /* MODE LISTE */
        .display-products.products-list .row {
            display: flex;
            flex-direction: column;
        }

        .display-products.products-list .product {
            width: 100% !important;
            margin-bottom: 20px;
        }

        .display-products.products-list .product-block {
            display: flex;
        }

        .display-products.products-list .product-content {
            display: flex;
            flex-direction: row;
        }

        .display-products.products-list .block-inner {
            width: 30%;
        }

        .display-products.products-list .caption {
            width: 70%;
            padding-left: 20px;
            text-align: left;
            display: block;
        }

        /* cacher éléments inutiles en liste si besoin */
        .display-products.products-list .group-buttons {
            justify-content: flex-start;
        }

        /* boutons actifs */
        .display-mode-btn.active {
            color: #000;
            font-weight: bold;
        }

        /* cacher la short description par défaut (mode grille) */
        .display-products.products-grid .woocommerce-product-details__short-description {
            display: none;
        }

        /* afficher en mode liste */
        .display-products.products-list .woocommerce-product-details__short-description {
            display: block;
            margin-top: 10px;
            color: #555;
            line-height: 1.6;
        }

    </style>
@endpush

@section('content')
    @include('layouts.partials.navbar.public-show')
    <div id="wrapper-container" class="wrapper-container">
        <div id="tbay-main-content">
            <div id="main-wrapper" class="shop-left main-wrapper ">
                <section id="tbay-breadcrumb" style="background-color:#f4f9fc"
                         class="tbay-breadcrumb  breadcrumbs-color">
                    <div class="container ">
                        <div class="breadscrumb-inner">
                            <ol class="tbay-woocommerce-breadcrumb breadcrumb">
                                <li><a href="{{ route('home') }}">Início</a></li>
                                <li>Loja</li>
                            </ol>
                        </div>
                    </div>
                </section>
                <div id="main-container" class="container">
                    <div class="woof_products_top_panel_content"></div>
                    <div class="woof_products_top_panel"></div>
                    <div class="tbay-filter">
                        <div class="woocommerce-notices-wrapper"></div>
                        <div class="main-filter d-flex justify-content-end filter-vendor">
                            @php
                                $totalProducts = $lojaProducts->total();
                                $perPage = $lojaProducts->perPage();
                                $currentPage = $lojaProducts->currentPage();
                                $start = (($currentPage - 1) * $perPage) + 1;
                                $end = min($currentPage * $perPage, $totalProducts);
                            @endphp

                            <p class="woocommerce-result-count" role="alert" aria-relevant="all">
                                @if($totalProducts > 0)
                                    A mostrar {{ $start }}&ndash;{{ $end }} de {{ $totalProducts }} resultados
                                @else
                                    Nenhum resultado encontrado
                                @endif
                            </p>
                            <div class="filter-btn-wrapper d-xl-none">
                                <button id="button-filter-btn"
                                        class="button-filter-btn hidden-lg hidden-md" type="submit"><i
                                        class="tb-icon tb-icon-filter" aria-hidden="true"></i>Filtro
                                </button>
                            </div>
                            <div id="filter-close"></div>
                            <div class="tbay-ordering" style="display: flex; align-items: center; gap: 10px;">
                                <span style="white-space: nowrap;">Ordenar por:</span>
                                <form class="woocommerce-ordering" id="woof_form" method="get" style="margin: 0;">
                                    <select name="orderby" class="orderby" aria-label="Ordem da loja"
                                            onchange="document.getElementById('woof_form').submit()"
                                            style="border: none; background: transparent; cursor: pointer; padding: 0; margin: 0; font: inherit; color: inherit;">
                                        <option value="menu_order" {{ request('orderby', 'menu_order') == 'menu_order' ? 'selected' : '' }}>
                                            Ordenação padrão
                                        </option>
                                        <option value="title" {{ request('orderby') == 'title' ? 'selected' : '' }}>
                                            Ordenar por nome
                                        </option>
                                        <option value="price" {{ request('orderby') == 'price' ? 'selected' : '' }}>
                                            Ordenar por preço: menor para maior
                                        </option>
                                        <option value="price-desc" {{ request('orderby') == 'price-desc' ? 'selected' : '' }}>
                                            Ordenar por preço: maior para menor
                                        </option>
                                    </select>
                                </form>
                            </div>
                            <div class="display-mode-warpper">
                                <a href="javascript:void(0);" id="display-mode-list" class="display-mode-btn list "
                                   title="Lista"><i class="tb-icon tb-icon-task-square"></i></a>
                                <a href="javascript:void(0);" id="display-mode-grid" class="display-mode-btn active"
                                   title="Grade"><i class="tb-icon tb-icon-grid-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row  row-shop-sidebar">
                        @include('section.aside-filtter')

                        <div id="main" class="archive-shop col-12 col-xl-9 content col-12">
                            <header class="woocommerce-products-header">
                                <h1 class="woocommerce-products-header__title page-title">Loja</h1>
                            </header>

                            <div class="display-products products products-grid">
                                @if($lojaProducts->isEmpty())
                                    <div class="woocommerce-no-products-found">
                                        <div class="woocommerce-info" role="status">
                                            Não foram encontrados produtos correspondentes à sua pesquisa.
                                        </div>
                                    </div>
                                @else
                                    <div class="row" data-xlgdesktop=3 data-desktop=3 data-desktopsmall=3 data-tablet=3
                                         data-landscape=3 data-mobile=2>
                                        @foreach($lojaProducts as $index => $product)
                                            @php
                                                $positionClasses = '';
                                                if ($index === 0) {
                                                    $positionClasses = 'first';
                                                } elseif ($index % 3 === 2) {
                                                    $positionClasses = 'last';
                                                } elseif ($index % 3 === 0 && $index > 0) {
                                                    $positionClasses = 'first';
                                                }
                                            @endphp

                                            <div
                                                class="product type-product post-{{ $product['id'] }} status-publish {{ $positionClasses }} instock {{ $product['category'] }} has-post-thumbnail sale taxable shipping-taxable purchasable product-type-simple">
                                                <div class="product-block grid product v1"
                                                     data-product-id="{{ $product['id'] }}">
                                                    <div class="product-content">
                                                        <div class="block-inner">
                                                            <figure class="image ">
                                                                <a title="{{ $product['title'] }}"
                                                                   href="{{ route('product.show',['slug' => $product['slug']]) }}"
                                                                   class="product-image">
                                                                    <img loading="lazy"
                                                                         width="480"
                                                                         height="480"
                                                                         src="{{ asset($product['images'][0]) }}"
                                                                         class="@if(empty($product['hover_image'])) image-no-effect @else image-effect attachment-shop_catalog @endif"
                                                                         alt=""
                                                                         decoding="async"/>
                                                                    @if(!empty($product['hover_image']))
                                                                        <img loading="lazy"
                                                                             width="480"
                                                                             height="480"
                                                                             src="{{ asset($product['hover_image']) }}"
                                                                             class="image-hover"
                                                                             alt=""
                                                                             decoding="async"/>
                                                                    @endif
                                                                </a>
                                                            </figure>

                                                            <div class="group-buttons">
                                                                {{-- add-to-cart-mobile.blade.php --}}



                                                                <div class="add-cart mobile-visible" title="Adicionar">
                                                                    <a href="javascript:void(0);"
                                                                       data-product-id="{{ $product['id'] }}"
                                                                       data-product-title="{{ $product['title'] }}"
                                                                       data-product-price="{{ $product['price'] }}"
                                                                       data-product-image="{{ asset($product['images'][0]) }}"
                                                                       data-product-slug="{{ $product['slug'] }}"
                                                                       class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                       aria-label="Adiciona ao carrinho: &ldquo;{{ $product['title'] }}&rdquo;">
                                                                        <span class="title-cart">Adicionar</span>
                                                                        <i class="tb-icon tb-icon-bag-2"></i>
                                                                    </a>
                                                                </div>



                                                                <div class="button-wishlist shown-mobile"
                                                                     title="Lista de desejos">
                                                                    <div
                                                                        class="yith-add-to-wishlist-button-block yith-add-to-wishlist-button-block--initialized"
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
                                                                            <svg
                                                                                class="yith-wcwl-icon yith-wcwl-icon-svg yith-wcwl-add-to-wishlist-button-icon"
                                                                                id="yith-wcwl-icon-heart-outline"
                                                                                fill="{{ in_array($product['id'], array_keys(Session::get('wishlist', []))) ? 'red' : 'none' }}"
                                                                                stroke-width="1.5"
                                                                                stroke="currentColor"
                                                                                viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path stroke-linecap="round"
                                                                                      stroke-linejoin="round"
                                                                                      d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"></path>
                                                                            </svg>
                                                                            <span
                                                                                class="yith-wcwl-add-to-wishlist-button__label">
                {{ in_array($product['id'], array_keys(Session::get('wishlist', []))) ? 'Dans la liste' : 'Add to wishlist' }}
            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="tbay-quick-view">
                                                                    <a href="#" class="qview-button"
                                                                       title="Visualização Rápida"
                                                                       data-effect="mfp-move-from-top"
                                                                       data-product-id="{{ $product['id'] }}">
                                                                        <i class="tb-icon tb-icon-eye"></i>
                                                                        <span>Visualização Rápida</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <span class="onsale"><span class="saled">Sale</span></span>

                                                        <div class="caption">
                            <span class="price">
                                <del aria-hidden="true">
                                    <span class="woocommerce-Price-amount amount">
                                        <bdi>{{ $product['old_price'] }}&nbsp;<span
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
                                <span
                                    class="screen-reader-text">O preço atual é: {{ $product['price'] }}&nbsp;&euro;.</span>
                                <small class="woocommerce-price-suffix">IVA incluído</small>
                            </span>

                                                            <h3 class="name">
                                                                <a href="{{ route('product.show',['slug' => $product['slug']]) }}">{{ $product['title'] }}  </a>
                                                            </h3>
                                                            <div class="woocommerce-product-details__short-description">
                                                                {{ $product['short_description'] ?? '' }}
                                                            </div>
                                                            <div class="group-content"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>

                            <div style="margin-bottom: 50px">
                                @if($lojaProducts->hasPages())
                                    <div class="tbay-pagination woocommerce-pagination"
                                         aria-label="Produto De Paginação">
                                        {{ $lojaProducts->appends(request()->except('page'))->links('vendor.pagination.custom') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.partials.footer.public')
@endsection



@push('scripts')

    @include('section.modeldetail');

    <script type="text/javascript" id="woof_front-js-before">
        const woof_front_nonce = "85ce159882";
        var woof_is_permalink = 1;
        var woof_shop_page = "";
        var woof_m_b_container = ".woocommerce-products-header";
        var woof_really_curr_tax = {};
        var woof_current_page_link = location.protocol + '//' + location.host + location.pathname;
        woof_current_page_link = woof_current_page_link.replace(/\page\/[0-9]+/, "");
        woof_current_page_link = "{{ route('loja') }}";
        var woof_link = '{{ asset("wp-content/plugins/woocommerce-products-filter/index.html") }}';
        var woof_ajaxurl = "{{ asset("wp-admin/admin-ajax.html") }}";
        var woof_lang = {
            'orderby': "orderby",
            'date': "date",
            'perpage': "per page",
            'pricerange': "price range",
            'menu_order': "menu order",
            'popularity': "popularity",
            'rating': "rating",
            'price': "price low to high",
            'price-desc': "price high to low",
            'clear_all': "Clear All",
            'list_opener': "Сhild list opener",
        };

        if (typeof woof_lang_custom == 'undefined') {
            var woof_lang_custom = {};
        }

        var woof_is_mobile = 0;
        var woof_show_price_search_button = 0;
        var woof_show_price_search_type = 0;
        var woof_show_price_search_type = 3;
        var swoof_search_slug = "swoof";
        var icheck_skin = {};
        icheck_skin = 'none';
        var woof_select_type = 'chosen';
        var woof_current_values = '[]';
        var woof_lang_loading = "Loading ...";
        var woof_lang_show_products_filter = "show products filter";
        var woof_lang_hide_products_filter = "hide products filter";
        var woof_lang_pricerange = "price range";
        var woof_use_beauty_scroll = 1;
        var woof_autosubmit = 1;
        var woof_ajaxurl = "{{ asset('wp-admin/admin-ajax.html') }}";
        var woof_is_ajax = 0;
        var woof_ajax_redraw = 0;
        var woof_ajax_page_num = 1;
        var woof_ajax_first_done = false;
        var woof_checkboxes_slide_flag = 1;

        /*toggles*/
        var woof_toggle_type = "text";
        var woof_toggle_closed_text = "+";
        var woof_toggle_opened_text = "-";
        var woof_toggle_closed_image = "{{ asset("wp-content/plugins/woocommerce-products-filter/img/plus.svg") }}";
        var woof_toggle_opened_image = "{{ asset("wp-content/plugins/woocommerce-products-filter/img/minus.svg") }}";

        /*indexes which can be displayed in red buttons panel*/
        var woof_accept_array = ["min_price", "max_price", "orderby", "perpage", "woof_author", "backorder", "featured", "stock", "onsales", "byrating", "woof_sku", "woof_text", "min_rating", "product_brand", "product_visibility", "product_cat", "product_tag", "pa_color", "pa_image"];

        /*for extensions*/
        var woof_ext_init_functions = null;
        woof_ext_init_functions = '{"by_author":"woof_init_author","by_backorder":"woof_init_onbackorder","by_featured":"woof_init_featured","by_instock":"woof_init_instock","by_onsales":"woof_init_onsales","by_sku":"woof_init_sku","by_text":"woof_init_text","color":"woof_init_colors","image":"woof_init_image","label":"woof_init_labels","select_hierarchy":"woof_init_select_hierarchy","select_radio_check":"woof_init_select_radio_check","slider":"woof_init_sliders"}';

        var woof_overlay_skin = "default";

        function woof_js_after_ajax_done() {
            $(document).trigger('woof_ajax_done');
        }

        var woof_front_sd_is_a = 1;
        var woof_front_show_notes = 0;
        var woof_lang_front_builder_del = "Are you sure you want to delete this filter-section?";
        var woof_lang_front_builder_options = "Options";
        var woof_lang_front_builder_option = "Option";
        var woof_lang_front_builder_section_options = "Section Options";
        var woof_lang_front_builder_description = "Description";
        var woof_lang_front_builder_close = "Close";
        var woof_lang_front_builder_suggest = "Suggest the feature";
        var woof_lang_front_builder_good_to_use = "good to use in content areas";
        var woof_lang_front_builder_confirm_sd = "Smart Designer item will be created and attached to this filter section and will cancel current type, proceed?";
        var woof_lang_front_builder_creating = "Creating";
        var woof_lang_front_builder_shortcode = "Shortcode";
        var woof_lang_front_builder_layout = "Layout";
        var woof_lang_front_builder_filter_section = "Section options";
        var woof_lang_front_builder_filter_redrawing = "filter redrawing";
        var woof_lang_front_builder_filter_redrawn = "redrawn";
        var woof_lang_front_builder_filter_redrawn = "redrawn";
        var woof_lang_front_builder_title_top_info = "this functionality is only visible for the site administrator";
        var woof_lang_front_builder_title_top_info_demo = "demo mode is activated, and results are visible only to you";
        var woof_lang_front_builder_select = "+ Add filter section";

        // Fonction pour charger les valeurs actuelles depuis l'URL
        function woof_load_current_values_from_url() {
            var urlParams = new URLSearchParams(window.location.search);
            woof_current_values = {};

            // Charger les paramètres depuis l'URL
            urlParams.forEach(function (value, key) {
                if (key === 'min_price' || key === 'max_price' || key === 'product_cat' || key === 'stock' || key === 'orderby' || key === 's') {
                    woof_current_values[key] = value;
                }
            });

            // Initialiser le slider avec les valeurs de l'URL
            setTimeout(function () {
                woof_init_price_slider_from_url();
            }, 100);
        }

        // Fonction pour initialiser le slider avec les valeurs de l'URL
        function woof_init_price_slider_from_url() {
            var urlParams = new URLSearchParams(window.location.search);
            var minPrice = urlParams.get('min_price');
            var maxPrice = urlParams.get('max_price');

            if (minPrice && maxPrice) {
                // Mettre à jour le slider
                var $slider = $('.woof_range_slider');
                if ($slider.length) {
                    var data = $slider.data('ionRangeSlider');
                    if (data) {
                        data.update({
                            from: parseInt(minPrice),
                            to: parseInt(maxPrice)
                        });
                    }

                    // Mettre à jour la valeur du champ
                    $slider.val(minPrice + '_' + maxPrice);
                }
            }
        }

        // Appeler cette fonction au chargement de la page
        $(document).ready(function ($) {
            woof_load_current_values_from_url();
        });
    </script>
    <script type="text/javascript" src="{{ asset("wp-content/plugins/woocommerce-products-filter/js/front22ef.js") }}"
            id="woof_front-js"></script>
@endpush
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const listBtn = document.getElementById('display-mode-list');
            const gridBtn = document.getElementById('display-mode-grid');
            const productsWrapper = document.querySelector('.display-products');

            if (!listBtn || !gridBtn || !productsWrapper) return;

            function setMode(mode) {
                if (mode === 'list') {
                    productsWrapper.classList.remove('products-grid');
                    productsWrapper.classList.add('products-list');

                    listBtn.classList.add('active');
                    gridBtn.classList.remove('active');
                } else {
                    productsWrapper.classList.remove('products-list');
                    productsWrapper.classList.add('products-grid');

                    gridBtn.classList.add('active');
                    listBtn.classList.remove('active');
                }

                localStorage.setItem('shopDisplayMode', mode);
            }

            // Clicks
            listBtn.addEventListener('click', function () {
                setMode('list');
            });

            gridBtn.addEventListener('click', function () {
                setMode('grid');
            });

            // Au chargement → restaurer le mode
            const savedMode = localStorage.getItem('shopDisplayMode') || 'grid';
            setMode(savedMode);
        });
    </script>
@endpush
