voici la strucuture de ma page selon toi quelle sont les lient qui ne serve a rien dans ce code :
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lenha Viva &#8211; Compre a sua lenha, pellets de madeira e fogão a lenha com a Lenha Viva</title>
    <meta name='robots' content='max-image-preview:large' />

    <link rel='stylesheet' id='easy-autocomplete-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/js/easy-autocomplete/easy-autocomplete.min22ef.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='easy-autocomplete-theme-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/js/easy-autocomplete/easy-autocomplete.themes.min22ef.css') }}"
        type='text/css' media='all' />

    <link rel='stylesheet' id='sr7css-css' href="{{ asset('wp-content/plugins/revslider/public/css/sr76266.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woof-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/css/front22ef.css') }}" type='text/css'
        media='all' />

    <link rel='stylesheet' id='chosen-drop-down-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/js/chosen/chosen.min22ef.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woof_by_author_html_items-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/by_author/css/by_author22ef.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woof_by_backorder_html_items-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/by_backorder/css/by_backorder22ef.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woof_by_featured_html_items-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/by_featured/css/by_featured22ef.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woof_by_instock_html_items-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/by_instock/css/by_instock22ef.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woof_by_onsales_html_items-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/by_onsales/css/by_onsales22ef.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woof_by_sku_html_items-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/by_sku/css/by_sku22ef.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woof_by_text_html_items-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/by_text/assets/css/front22ef.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woof_color_html_items-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/color/css/html_types/color22ef.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woof_image_html_items-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/image/css/html_types/image22ef.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woof_label_html_items-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/label/css/html_types/label22ef.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woof_select_hierarchy_html_items-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/select_hierarchy/css/html_types/select_hierarchy22ef.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woof_select_radio_check_html_items-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/select_radio_check/css/html_types/select_radio_check22ef.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woof_slider_html_items-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/slider/css/html_types/slider22ef.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woof_sd_html_items_checkbox-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/smart_designer/css/elements/checkbox22ef.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woof_sd_html_items_radio-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/smart_designer/css/elements/radio22ef.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woof_sd_html_items_switcher-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/smart_designer/css/elements/switcher22ef.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woof_sd_html_items_color-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/smart_designer/css/elements/color22ef.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woof_sd_html_items_tooltip-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/smart_designer/css/tooltip22ef.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woof_sd_html_items_front-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/smart_designer/css/front22ef.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woof-switcher23-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/css/switcher22ef.css') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css'
        href="{{ asset('wp-content/plugins/woocommerce/assets/css/woocommerce-layoutd3a6.css') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
        href="{{ asset('wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreend3a6.css') }}"
        type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'
        href="{{ asset('wp-content/plugins/woocommerce/assets/css/woocommerced3a6.css') }}" type='text/css'
        media='all' />

    <link rel='stylesheet' id='woo-variation-swatches-css'
        href="{{ asset('wp-content/plugins/woo-variation-swatches/assets/css/frontend.min67ce.css') }}"
        type='text/css' media='all' />

    <link rel='stylesheet' id='jquery-selectBox-css'
        href="{{ asset('wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox7359.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce_prettyPhoto_css-css'
        href="{{ asset('wp-content/plugins/woocommerce/assets/css/prettyPhoto005e.css') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='yith-wcwl-main-css'
        href="{{ asset('wp-content/plugins/yith-woocommerce-wishlist/assets/css/style6c15.css') }}" type='text/css'
        media='all' />

    <link rel='stylesheet' id='yith-wcwl-add-to-wishlist-css'
        href="{{ asset('wp-content/plugins/yith-woocommerce-wishlist/assets/css/frontend/add-to-wishlist6c15.css') }}"
        type='text/css' media='all' />

    <link rel='stylesheet' id='brands-styles-css'
        href="{{ asset('wp-content/plugins/woocommerce/assets/css/brandsd3a6.css') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='maia-theme-fonts-css'
        href='https://fonts.googleapis.com/css?family=Lato%3A400%2C500%2C600%2C700%7CCormorant%20Garamond%3A400%2C500%2C600%2C700&amp;subset=latin%2Clatin-ext&amp;display=swap'
        type='text/css' media='all' />
    <link rel='stylesheet' id='chaty-front-css-css'
        href="{{ asset('wp-content/plugins/chaty/css/chaty-front.mindd1c.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href="{{ asset('wp-content/plugins/elementor/assets/css/frontend.min4bf6.css') }}" type='text/css'
        media='all' />

    <link rel='stylesheet' id='font-awesome-5-all-css'
        href="{{ asset('wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min4bf6.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-4-shim-css'
        href="{{ asset('wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min4bf6.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='widget-spacer-css'
        href="{{ asset('wp-content/plugins/elementor/assets/css/widget-spacer.min4bf6.css') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='widget-icon-box-css'
        href="{{ asset('wp-content/plugins/elementor/assets/css/widget-icon-box.min4bf6.css') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='bootstrap-css' href="{{ asset('wp-content/themes/maia/css/bootstrapc721.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='maia-template-css' href="{{ asset('wp-content/themes/maia/css/template5152.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='maia-style-css' href="{{ asset('wp-content/themes/maia/style5152.css') }}"
        type='text/css' media='all' />

    <link rel='stylesheet' id='maia-font-tbay-custom-css'
        href="{{ asset('wp-content/themes/maia/css/font-tbay-custom8a54.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='simple-line-icons-css'
        href="{{ asset('wp-content/themes/maia/css/simple-line-icons8d5a.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='material-design-iconic-font-css'
        href="{{ asset('wp-content/themes/maia/css/material-design-iconic-font3601.css') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='animate-css' href="{{ asset('wp-content/themes/maia/css/animate3b71.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='jquery-treeview-css'
        href="{{ asset('wp-content/themes/maia/css/jquery.treeview8a54.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='magnific-popup-css'
        href="{{ asset('wp-content/themes/maia/css/magnific-popupf488.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='maia-child-style-css'
        href="{{ asset('wp-content/themes/maia-child/style2be9.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-gf-roboto-css'
        href='https://fonts.googleapis.com/css?family=Roboto:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&amp;display=swap'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-gf-robotoslab-css'
        href='https://fonts.googleapis.com/css?family=Roboto+Slab:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&amp;display=swap'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-gf-cormorantgaramond-css'
        href='https://fonts.googleapis.com/css?family=Cormorant+Garamond:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&amp;display=swap'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-gf-lato-css'
        href='https://fonts.googleapis.com/css?family=Lato:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&amp;display=swap'
        type='text/css' media='all' />

    <script type="text/javascript" src="{{ asset('wp-includes/js/jquery/jquery-migrate.min5589.js') }}"
        id="jquery-migrate-js"></script>

    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce-products-filter/js/easy-autocomplete/jquery.easy-autocomplete.min22ef.js') }}"
        id="easy-autocomplete-js"></script>

    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/by_text/assets/js/husky22ef.js') }}"
        id="woof-husky-js"></script>
    <script type="text/javascript" src="{{ asset('wp-content/plugins/revslider/public/js/libs/tptools6266.js') }}"
        id="tp-tools-js" async="async" data-wp-strategy="async"></script>
    <script type="text/javascript" src="{{ asset('wp-content/plugins/revslider/public/js/sr76266.js') }}" id="sr7-js"
        async="async" data-wp-strategy="async"></script>
    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.minf967.js') }}"
        id="wc-jquery-blockui-js" data-wp-strategy="defer"></script>
    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min5aa6.js') }}" id="wc-js-cookie-js"
        defer="defer" data-wp-strategy="defer"></script>

    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.mind3a6.js') }}" id="woocommerce-js"
        defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="{{ asset('wp-includes/js/underscore.min3ab8.js') }}" id="underscore-js"></script>
    <script type="text/javascript" src="{{ asset('wp-includes/js/underscore.min3ab8.js') }}" id="underscore-js"></script>

    <script type="text/javascript" src="{{ asset('wp-includes/js/wp-util.mind4d0.js') }}" id="wp-util-js"></script>
    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min4bf6.js') }}"
        id="font-awesome-4-shim-js"></script>
    <script type="text/javascript" id="wc-add-to-cart-variation-js-extra">
        var wc_add_to_cart_variation_params = {
            "wc_ajax_url": "/?wc-ajax=%%endpoint%%",
            "i18n_no_matching_variations_text": "Desculpe, nenhum produto encontrado com os termos seleccionados. Por favor escolha uma combina\u00e7\u00e3o diferente.",
            "i18n_make_a_selection_text": "Seleccione as op\u00e7\u00f5es do produto antes de o adicionar ao seu carrinho.",
            "i18n_unavailable_text": "Desculpe, este produto n\u00e3o est\u00e1 dispon\u00edvel. Por favor escolha uma combina\u00e7\u00e3o diferente.",
            "i18n_reset_alert_text": "Your selection has been reset. Please select some product options before adding this product to your cart."
        };
    </script>
    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.mind3a6.js') }}"
        id="wc-add-to-cart-variation-js" defer="defer" data-wp-strategy="defer"></script>


    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce/assets/js/frontend/single-product.mind3a6.js') }}"
        id="wc-single-product-js" defer="defer" data-wp-strategy="defer"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link rel="icon" href="{{ asset('wp-content/uploads/2025/10/cropped-er-04-32x32.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('wp-content/uploads/2025/10/cropped-er-04-192x192.png') }}"
        sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('wp-content/uploads/2025/10/cropped-er-04-180x180.png') }}" />

    <link rel='stylesheet' id='wc-blocks-style-css'
        href="{{ asset('wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks8868.css') }}" type='text/css'
        media='all' />

    <link rel='stylesheet' id='woof_sections_style-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/sections/css/sections22ef.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='ion.range-slider-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/js/ion.range-slider/css/ion.rangeSlider22ef.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woof_tooltip-css-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/js/tooltip/css/tooltipster.bundle.min22ef.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woof_tooltip-css-noir-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/js/tooltip/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-noir.min22ef.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='widget-image-css'
        href="{{ asset('wp-content/plugins/elementor/assets/css/widget-image.min4bf6.css') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='sumoselect-css' href="{{ asset('wp-content/themes/maia/css/sumoselect8a54.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='widget-social-icons-css'
        href="{{ asset('wp-content/plugins/elementor/assets/css/widget-social-icons.min4bf6.css') }}" type='text/css'
        media='all' />
    <link rel='stylesheet' id='e-apple-webkit-css'
        href="{{ asset('wp-content/plugins/elementor/assets/css/conditionals/apple-webkit.min4bf6.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woof-front-builder-css-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/front_builder/css/front-builder22ef.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woof-slideout-tab-css-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/slideout/css/jquery.tabSlideOut22ef.css') }}"
        type='text/css' media='all' />
    <link rel='stylesheet' id='woof-slideout-css-css'
        href="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/slideout/css/slideout22ef.css') }}"
        type='text/css' media='all' />


    <link href="{{ asset('wp-content/plugins/revslider/public/css/fonts/revicons/css/revicons.css') }}"
        rel="stylesheet" property="stylesheet" media="all" type="text/css" />
    <link
        href="http://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@700&amp;family=Lato:wght@400&amp;display=swap"
        rel="stylesheet" property="stylesheet" media="all" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



    @stack('styles')
    @vite(['resources/js/app.js', 'resources/css/app.css'])

</head>

<body>
    <main>

        @yield('content')


    </main>




    <script type="text/javascript" src="{{ asset('wp-content/themes/maia/js/jquery.waypoints.mincce7.js') }}"
        id="waypoints-js"></script>

    <script type="text/javascript" src="{{ asset('wp-includes/js/api-request.mind4d0.js') }}" id="wp-api-request-js">
    </script>
    <script type="text/javascript" src="{{ asset('wp-includes/js/dist/hooks.minaf5f.js') }}" id="wp-hooks-js"></script>
    <script type="text/javascript" src="{{ asset('wp-includes/js/dist/i18n.min1cde.js') }}" id="wp-i18n-js"></script>

    <script type="text/javascript" src="{{ asset('wp-includes/js/dist/url.min5b91.js') }}" id="wp-url-js"></script>

    <script type="text/javascript" src="{{ asset('wp-includes/js/dist/api-fetch.min7cb7.js') }}" id="wp-api-fetch-js">
    </script>

    <script type="text/javascript" src="{{ asset('wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js') }}"
        id="wp-polyfill-js"></script>

    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woo-variation-swatches/assets/js/frontend.min67ce.js') }}"
        id="woo-variation-swatches-js"></script>
    <script type="text/javascript" src="{{ asset('wp-includes/js/dist/vendor/lodash.mind1d1.js') }}" id="lodash-js">
    </script>

    <script type="text/javascript" src="{{ asset('wp-includes/js/dist/vendor/moment.minf799.js') }}" id="moment-js">
    </script>

    <script type="text/javascript" src="{{ asset('wp-includes/js/dist/deprecated.min0a8b.js') }}" id="wp-deprecated-js">
    </script>
    <script type="text/javascript" src="{{ asset('wp-includes/js/dist/date.min6d38.js') }}" id="wp-date-js"></script>

    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/yith-woocommerce-wishlist/plugin-fw/dist/lapilli-ui/date/indexb719.js') }}"
        id="lapilli-ui-date-js"></script>

    <script type="text/javascript" src="{{ asset('wp-includes/js/dist/vendor/react.mine1ab.js') }}" id="react-js"></script>

    <script type="text/javascript" src="{{ asset('wp-includes/js/dist/vendor/react-dom.mine1ab.js') }}" id="react-dom-js">
    </script>

    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.mind3a6.js') }}"
        id="sourcebuster-js-js"></script>


    <script type="text/javascript" src="{{ asset('wp-content/themes/maia/js/functions.min5152.js') }}" id="maia-script-js">
    </script>
    <script type="text/javascript" src="{{ asset('wp-content/themes/maia/js/woocommerce.min5152.js') }}"
        id="maia-woocommerce-js"></script>
    <script type="text/javascript" src="{{ asset('wp-content/plugins/elementor/assets/js/webpack.runtime.min4bf6.js') }}"
        id="elementor-webpack-runtime-js"></script>
    <script type="text/javascript" src="{{ asset('wp-content/plugins/elementor/assets/js/frontend-modules.min4bf6.js') }}"
        id="elementor-frontend-modules-js"></script>
    <script type="text/javascript" src="{{ asset('wp-includes/js/jquery/ui/core.minb37e.js') }}" id="jquery-ui-core-js">
    </script>


    <script type="text/javascript" src="{{ asset('wp-content/themes/maia/js/slick.min8a54.js') }}" id="slick-js"></script>
    <script type="text/javascript" src="{{ asset('wp-content/themes/maia/js/custom-slick.min5152.js') }}"
        id="maia-custom-slick-js"></script>
    <script type="text/javascript" src="{{ asset('wp-content/themes/maia/js/skip-link-fix.min5152.js') }}"
        id="maia-skip-link-fix-js"></script>
    <script type="text/javascript" src="{{ asset('wp-content/themes/maia/js/popper.mind57f.js') }}" id="popper-js">
    </script>
    <script type="text/javascript" src="{{ asset('wp-content/themes/maia/js/bootstrap.minc721.js') }}" id="bootstrap-js">
    </script>
    <script type="text/javascript" src="{{ asset('wp-content/themes/maia/js/jquery.autocomplete.min8a54.js') }}"
        id="jquery-autocomplete-js"></script>
    <script type="text/javascript" src="{{ asset('wp-content/themes/maia/js/jquery.countdowntimer.minf945.js') }}"
        id="jquery-countdowntimer-js"></script>
    <script type="text/javascript" src="{{ asset('wp-content/themes/maia/js/jquery.magnific-popup.minf488.js') }}"
        id="jquery-magnific-popup-js"></script>
    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce-products-filter/js/ion.range-slider/js/ion.rangeSlider.min22ef.js') }}"
        id="ion.range-slider-js"></script>
    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce-products-filter/js/tooltip/js/tooltipster.bundle.min22ef.js') }}"
        id="woof_tooltip-js-js"></script>


    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce-products-filter/js/html_types/radio22ef.js') }}"
        id="woof_radio_html_items-js"></script>
    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce-products-filter/js/html_types/checkbox22ef.js') }}"
        id="woof_checkbox_html_items-js"></script>
    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce-products-filter/js/html_types/select22ef.js') }}"
        id="woof_select_html_items-js"></script>
    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce-products-filter/js/html_types/mselect22ef.js') }}"
        id="woof_mselect_html_items-js"></script>
    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/by_author/js/by_author22ef.js') }}"
        id="woof_by_author_html_items-js"></script>
    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/by_backorder/js/by_backorder22ef.js') }}"
        id="woof_by_backorder_html_items-js"></script>
    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/by_featured/js/by_featured22ef.js') }}"
        id="woof_by_featured_html_items-js"></script>
    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/by_instock/js/by_instock22ef.js') }}"
        id="woof_by_instock_html_items-js"></script>
    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/by_onsales/js/by_onsales22ef.js') }}"
        id="woof_by_onsales_html_items-js"></script>
    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/by_sku/js/by_sku22ef.js') }}"
        id="woof_by_sku_html_items-js"></script>
    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/by_text/assets/js/front22ef.js') }}"
        id="woof_by_text_html_items-js"></script>
    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/color/js/html_types/color22ef.js') }}"
        id="woof_color_html_items-js"></script>
    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/image/js/html_types/image22ef.js') }}"
        id="woof_image_html_items-js"></script>
    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/label/js/html_types/label22ef.js') }}"
        id="woof_label_html_items-js"></script>

    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/select_hierarchy/js/html_types/select_hierarchy22ef.js') }}"
        id="woof_select_hierarchy_html_items-js"></script>
    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/select_radio_check/js/html_types/select_radio_check22ef.js') }}"
        id="woof_select_radio_check_html_items-js"></script>
    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/slider/js/html_types/slider22ef.js') }}"
        id="woof_slider_html_items-js"></script>

    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce-products-filter/js/chosen/chosen.jquery22ef.js') }}"
        id="chosen-drop-down-js"></script>
    <script type="text/javascript" src="{{ asset('wp-content/themes/maia/js/jquery.mmenu.minfd3b.js') }}"
        id="jquery-mmenu-js"></script>
    <script type="text/javascript" src="{{ asset('wp-content/themes/maia/js/jquery.treeview.min2fca.js') }}"
        id="jquery-treeview-js"></script>
    <script type="text/javascript" src="{{ asset('wp-content/themes/maia/js/jquery.sumoselect.min5b75.js') }}"
        id="jquery-sumoselect-js"></script>
    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/slideout/js/jquery.tabSlideOut22ef.js') }}"
        id="woof-slideout-js-js"></script>
    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/woocommerce-products-filter/ext/slideout/js/slideout22ef.js') }}"
        id="woof-slideout-init-js"></script>

    <script type="text/javascript"
        src="{{ asset('wp-content/plugins/google-listings-and-ads/js/build/gtag-events6841.js') }}"
        id="gla-gtag-events-js"></script>
    @stack('scripts')

</body>

</html>
