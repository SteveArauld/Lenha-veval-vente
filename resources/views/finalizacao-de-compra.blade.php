@extends('layouts.app')

@section('title', __('Finalização de compra'))

@push('styles')
    <link rel='stylesheet' id='wc-blocks-style-checkout-css'
        href='{{ asset('wp-content/plugins/woocommerce/assets/client/blocks/checkoutff9f.css') }}' type='text/css'
        media='all' />
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
                                    <form aria-label="Finalizar compras"
                                        class="wc-block-components-form wc-block-checkout__form">
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
                                                <p class="wc-block-components-checkout-step__description">Usaremos esta
                                                    conta de email para lhe enviar detalhes e actualizações relacionadas com
                                                    a sua encomenda.</p>
                                                <div class="wc-block-components-checkout-step__content">
                                                    <div class="wc-block-components-notices"></div>
                                                    <div class="wc-block-components-notices__snackbar wc-block-components-notice-snackbar-list"
                                                        tabindex="-1">
                                                        <div></div>
                                                    </div>
                                                    <div id="contact" class="wc-block-components-address-form">
                                                        <div
                                                            class="wc-block-components-text-input wc-block-components-address-form__email">
                                                            <input type="email" id="email" autocapitalize="none"
                                                                autocomplete="email" aria-label="Endereço de email"
                                                                aria-describedby="wc-guest-checkout-notice" required=""
                                                                aria-invalid="false" title="" value=""><label
                                                                for="email">Endereço de email</label></div>
                                                        <p id="wc-guest-checkout-notice"
                                                            class="wc-block-checkout__guest-checkout-notice">Actualmente
                                                            está a finalizar a encomenda como convidado.</p>
                                                        <div
                                                            class="wc-block-components-checkbox wc-block-checkout__create-account">
                                                            <label for="checkbox-control-0"><input id="checkbox-control-0"
                                                                    class="wc-block-components-checkbox__input"
                                                                    type="checkbox" aria-invalid="false" value=""><svg
                                                                    class="wc-block-components-checkbox__mark"
                                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 24 20">
                                                                    <path
                                                                        d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z">
                                                                    </path>
                                                                </svg><span
                                                                    class="wc-block-components-checkbox__label">Criar uma
                                                                    conta com Lenha Viva</span></label></div>
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
                                                <p class="wc-block-components-checkout-step__description">Introduza a morada
                                                    onde deseja que a encomenda seja entregue.</p>
                                                <div class="wc-block-components-checkout-step__content">
                                                    <div class="wc-block-components-notices"></div>
                                                    <div class="wc-block-components-notices__snackbar wc-block-components-notice-snackbar-list"
                                                        tabindex="-1">
                                                        <div></div>
                                                    </div>
                                                    <div class="wc-block-components-address-address-wrapper is-editing">
                                                        <div class="wc-block-components-address-card-wrapper">
                                                            <div class="wc-block-components-address-card">
                                                                <address><span
                                                                        class="wc-block-components-address-card__address-section"></span>
                                                                    <div
                                                                        class="wc-block-components-address-card__address-section">
                                                                        <span> </span><span>Portugal</span></div>
                                                                </address><span type="button"
                                                                    class="wc-block-components-address-card__edit"
                                                                    aria-controls="shipping" aria-expanded="true"
                                                                    aria-label="Edit shipping address" tabindex="0"
                                                                    role="button">Editar</span>
                                                            </div>
                                                        </div>
                                                        <div class="wc-block-components-address-form-wrapper">
                                                            <div id="shipping" class="wc-block-components-address-form">
                                                                <div
                                                                    class="wc-block-components-address-form__country wc-block-components-country-input">
                                                                    <div class="wc-blocks-components-select">
                                                                        <div
                                                                            class="wc-blocks-components-select__container">
                                                                            <label for="shipping-country"
                                                                                class="wc-blocks-components-select__label">País/Região</label><select
                                                                                size="1"
                                                                                class="wc-blocks-components-select__select"
                                                                                id="shipping-country" aria-invalid="false"
                                                                                autocomplete="country">
                                                                                <option value=""
                                                                                    data-alternate-values="[Selecione um país/região]"
                                                                                    disabled="">Selecione um país/região
                                                                                </option>
                                                                                <option value="AF"
                                                                                    data-alternate-values="[Afeganistão]">
                                                                                    Afeganistão</option>
                                                                                <option value="ZA"
                                                                                    data-alternate-values="[África do Sul]">
                                                                                    África do Sul</option>
                                                                                <option value="AX"
                                                                                    data-alternate-values="[Åland Islands]">
                                                                                    Åland Islands</option>
                                                                                <option value="AL"
                                                                                    data-alternate-values="[Albânia]">
                                                                                    Albânia</option>
                                                                                <option value="DE"
                                                                                    data-alternate-values="[Alemanha]">
                                                                                    Alemanha</option>
                                                                                <option value="AD"
                                                                                    data-alternate-values="[Andorra]">
                                                                                    Andorra</option>
                                                                                <option value="AO"
                                                                                    data-alternate-values="[Angola]">Angola
                                                                                </option>
                                                                                <option value="AI"
                                                                                    data-alternate-values="[Anguila]">
                                                                                    Anguila</option>
                                                                                <option value="AQ"
                                                                                    data-alternate-values="[Antárctida]">
                                                                                    Antárctida</option>
                                                                                <option value="AG"
                                                                                    data-alternate-values="[Antígua e Barbuda]">
                                                                                    Antígua e Barbuda</option>
                                                                                <option value="SA"
                                                                                    data-alternate-values="[Arábia Saudita]">
                                                                                    Arábia Saudita</option>
                                                                                <option value="DZ"
                                                                                    data-alternate-values="[Argélia]">
                                                                                    Argélia</option>
                                                                                <option value="AR"
                                                                                    data-alternate-values="[Argentina]">
                                                                                    Argentina</option>
                                                                                <option value="AM"
                                                                                    data-alternate-values="[Arménia]">
                                                                                    Arménia</option>
                                                                                <option value="AW"
                                                                                    data-alternate-values="[Aruba]">Aruba
                                                                                </option>
                                                                                <option value="AU"
                                                                                    data-alternate-values="[Austrália]">
                                                                                    Austrália</option>
                                                                                <option value="AT"
                                                                                    data-alternate-values="[Áustria]">
                                                                                    Áustria</option>
                                                                                <option value="AZ"
                                                                                    data-alternate-values="[Azerbaijão]">
                                                                                    Azerbaijão</option>
                                                                                <option value="BS"
                                                                                    data-alternate-values="[Bahamas]">
                                                                                    Bahamas</option>
                                                                                <option value="BH"
                                                                                    data-alternate-values="[Bahrein]">
                                                                                    Bahrein</option>
                                                                                <option value="BD"
                                                                                    data-alternate-values="[Bangladesh]">
                                                                                    Bangladesh</option>
                                                                                <option value="BB"
                                                                                    data-alternate-values="[Barbados]">
                                                                                    Barbados</option>
                                                                                <option value="PW"
                                                                                    data-alternate-values="[Belau]">Belau
                                                                                </option>
                                                                                <option value="BE"
                                                                                    data-alternate-values="[Bélgica]">
                                                                                    Bélgica</option>
                                                                                <option value="BZ"
                                                                                    data-alternate-values="[Belize]">Belize
                                                                                </option>
                                                                                <option value="BJ"
                                                                                    data-alternate-values="[Benim]">Benim
                                                                                </option>
                                                                                <option value="BM"
                                                                                    data-alternate-values="[Bermudas]">
                                                                                    Bermudas</option>
                                                                                <option value="BY"
                                                                                    data-alternate-values="[Bielorrússia]">
                                                                                    Bielorrússia</option>
                                                                                <option value="BO"
                                                                                    data-alternate-values="[Bolívia]">
                                                                                    Bolívia</option>
                                                                                <option value="BQ"
                                                                                    data-alternate-values="[Bonaire, Saint Eustatius e Saba]">
                                                                                    Bonaire, Saint Eustatius e Saba</option>
                                                                                <option value="BA"
                                                                                    data-alternate-values="[Bósnia e Herzegovina]">
                                                                                    Bósnia e Herzegovina</option>
                                                                                <option value="BW"
                                                                                    data-alternate-values="[Botsuana]">
                                                                                    Botsuana</option>
                                                                                <option value="BR"
                                                                                    data-alternate-values="[Brasil]">Brasil
                                                                                </option>
                                                                                <option value="BN"
                                                                                    data-alternate-values="[Brunei]">Brunei
                                                                                </option>
                                                                                <option value="BG"
                                                                                    data-alternate-values="[Bulgária]">
                                                                                    Bulgária</option>
                                                                                <option value="BF"
                                                                                    data-alternate-values="[Burquina Faso]">
                                                                                    Burquina Faso</option>
                                                                                <option value="BI"
                                                                                    data-alternate-values="[Burundi]">
                                                                                    Burundi</option>
                                                                                <option value="BT"
                                                                                    data-alternate-values="[Butão]">Butão
                                                                                </option>
                                                                                <option value="CV"
                                                                                    data-alternate-values="[Cabo Verde]">
                                                                                    Cabo Verde</option>
                                                                                <option value="CM"
                                                                                    data-alternate-values="[Camarões]">
                                                                                    Camarões</option>
                                                                                <option value="KH"
                                                                                    data-alternate-values="[Camboja]">
                                                                                    Camboja</option>
                                                                                <option value="CA"
                                                                                    data-alternate-values="[Canadá]">Canadá
                                                                                </option>
                                                                                <option value="QA"
                                                                                    data-alternate-values="[Catar]">Catar
                                                                                </option>
                                                                                <option value="KZ"
                                                                                    data-alternate-values="[Cazaquistão]">
                                                                                    Cazaquistão</option>
                                                                                <option value="TD"
                                                                                    data-alternate-values="[Chade]">Chade
                                                                                </option>
                                                                                <option value="CZ"
                                                                                    data-alternate-values="[Chéquia]">
                                                                                    Chéquia</option>
                                                                                <option value="CL"
                                                                                    data-alternate-values="[Chile]">Chile
                                                                                </option>
                                                                                <option value="CN"
                                                                                    data-alternate-values="[China]">China
                                                                                </option>
                                                                                <option value="CY"
                                                                                    data-alternate-values="[Chipre]">Chipre
                                                                                </option>
                                                                                <option value="CO"
                                                                                    data-alternate-values="[Colômbia]">
                                                                                    Colômbia</option>
                                                                                <option value="KM"
                                                                                    data-alternate-values="[Comores]">
                                                                                    Comores</option>
                                                                                <option value="MP"
                                                                                    data-alternate-values="[Comunidade das Ilhas Marianas Setentrionais]">
                                                                                    Comunidade das Ilhas Marianas
                                                                                    Setentrionais</option>
                                                                                <option value="CG"
                                                                                    data-alternate-values="[Congo (Brazzaville)]">
                                                                                    Congo (Brazzaville)</option>
                                                                                <option value="CD"
                                                                                    data-alternate-values="[Congo (Kinshasa)]">
                                                                                    Congo (Kinshasa)</option>
                                                                                <option value="KP"
                                                                                    data-alternate-values="[Coreia do Norte]">
                                                                                    Coreia do Norte</option>
                                                                                <option value="KR"
                                                                                    data-alternate-values="[Coreia do Sul]">
                                                                                    Coreia do Sul</option>
                                                                                <option value="CI"
                                                                                    data-alternate-values="[Costa do Marfim]">
                                                                                    Costa do Marfim</option>
                                                                                <option value="CR"
                                                                                    data-alternate-values="[Costa Rica]">
                                                                                    Costa Rica</option>
                                                                                <option value="HR"
                                                                                    data-alternate-values="[Croácia]">
                                                                                    Croácia</option>
                                                                                <option value="CU"
                                                                                    data-alternate-values="[Cuba]">Cuba
                                                                                </option>
                                                                                <option value="CW"
                                                                                    data-alternate-values="[Curaçao]">
                                                                                    Curaçao</option>
                                                                                <option value="DK"
                                                                                    data-alternate-values="[Dinamarca]">
                                                                                    Dinamarca</option>
                                                                                <option value="DM"
                                                                                    data-alternate-values="[Domínica]">
                                                                                    Domínica</option>
                                                                                <option value="EG"
                                                                                    data-alternate-values="[Egito]">Egito
                                                                                </option>
                                                                                <option value="AE"
                                                                                    data-alternate-values="[Emirados Árabes Unidos]">
                                                                                    Emirados Árabes Unidos</option>
                                                                                <option value="EC"
                                                                                    data-alternate-values="[Equador]">
                                                                                    Equador</option>
                                                                                <option value="ER"
                                                                                    data-alternate-values="[Eritreia]">
                                                                                    Eritreia</option>
                                                                                <option value="SK"
                                                                                    data-alternate-values="[Eslováquia]">
                                                                                    Eslováquia</option>
                                                                                <option value="SI"
                                                                                    data-alternate-values="[Eslovénia]">
                                                                                    Eslovénia</option>
                                                                                <option value="ES"
                                                                                    data-alternate-values="[Espanha]">
                                                                                    Espanha</option>
                                                                                <option value="US"
                                                                                    data-alternate-values="[Estados Unidos (US)]">
                                                                                    Estados Unidos (US)</option>
                                                                                <option value="EE"
                                                                                    data-alternate-values="[Estónia]">
                                                                                    Estónia</option>
                                                                                <option value="SZ"
                                                                                    data-alternate-values="[Eswatini]">
                                                                                    Eswatini</option>
                                                                                <option value="ET"
                                                                                    data-alternate-values="[Etiópia]">
                                                                                    Etiópia</option>
                                                                                <option value="FO"
                                                                                    data-alternate-values="[Faroé]">Faroé
                                                                                </option>
                                                                                <option value="FJ"
                                                                                    data-alternate-values="[Fiji]">Fiji
                                                                                </option>
                                                                                <option value="PH"
                                                                                    data-alternate-values="[Filipinas]">
                                                                                    Filipinas</option>
                                                                                <option value="FI"
                                                                                    data-alternate-values="[Finlândia]">
                                                                                    Finlândia</option>
                                                                                <option value="FR"
                                                                                    data-alternate-values="[França]">França
                                                                                </option>
                                                                                <option value="GA"
                                                                                    data-alternate-values="[Gabão]">Gabão
                                                                                </option>
                                                                                <option value="GM"
                                                                                    data-alternate-values="[Gâmbia]">Gâmbia
                                                                                </option>
                                                                                <option value="GH"
                                                                                    data-alternate-values="[Gana]">Gana
                                                                                </option>
                                                                                <option value="GE"
                                                                                    data-alternate-values="[Geórgia]">
                                                                                    Geórgia</option>
                                                                                <option value="GI"
                                                                                    data-alternate-values="[Gibraltar]">
                                                                                    Gibraltar</option>
                                                                                <option value="GD"
                                                                                    data-alternate-values="[Granada]">
                                                                                    Granada</option>
                                                                                <option value="GR"
                                                                                    data-alternate-values="[Grécia]">Grécia
                                                                                </option>
                                                                                <option value="GL"
                                                                                    data-alternate-values="[Gronelândia]">
                                                                                    Gronelândia</option>
                                                                                <option value="GP"
                                                                                    data-alternate-values="[Guadalupe]">
                                                                                    Guadalupe</option>
                                                                                <option value="GU"
                                                                                    data-alternate-values="[Guam]">Guam
                                                                                </option>
                                                                                <option value="GT"
                                                                                    data-alternate-values="[Guatemala]">
                                                                                    Guatemala</option>
                                                                                <option value="GG"
                                                                                    data-alternate-values="[Guernesey]">
                                                                                    Guernesey</option>
                                                                                <option value="GY"
                                                                                    data-alternate-values="[Guiana]">Guiana
                                                                                </option>
                                                                                <option value="GF"
                                                                                    data-alternate-values="[Guiana Francesa]">
                                                                                    Guiana Francesa</option>
                                                                                <option value="GN"
                                                                                    data-alternate-values="[Guiné]">Guiné
                                                                                </option>
                                                                                <option value="GQ"
                                                                                    data-alternate-values="[Guiné Equatorial]">
                                                                                    Guiné Equatorial</option>
                                                                                <option value="GW"
                                                                                    data-alternate-values="[Guiné-Bissau]">
                                                                                    Guiné-Bissau</option>
                                                                                <option value="HT"
                                                                                    data-alternate-values="[Haiti]">Haiti
                                                                                </option>
                                                                                <option value="HN"
                                                                                    data-alternate-values="[Honduras]">
                                                                                    Honduras</option>
                                                                                <option value="HK"
                                                                                    data-alternate-values="[Hong Kong]">
                                                                                    Hong Kong</option>
                                                                                <option value="HU"
                                                                                    data-alternate-values="[Hungria]">
                                                                                    Hungria</option>
                                                                                <option value="YE"
                                                                                    data-alternate-values="[Iémen]">Iémen
                                                                                </option>
                                                                                <option value="BV"
                                                                                    data-alternate-values="[Ilha Bouvet]">
                                                                                    Ilha Bouvet</option>
                                                                                <option value="IM"
                                                                                    data-alternate-values="[Ilha de Man]">
                                                                                    Ilha de Man</option>
                                                                                <option value="CX"
                                                                                    data-alternate-values="[Ilha do Natal]">
                                                                                    Ilha do Natal</option>
                                                                                <option value="HM"
                                                                                    data-alternate-values="[Ilha Heard e Ilhas McDonald]">
                                                                                    Ilha Heard e Ilhas McDonald</option>
                                                                                <option value="NF"
                                                                                    data-alternate-values="[Ilha Norfolk]">
                                                                                    Ilha Norfolk</option>
                                                                                <option value="KY"
                                                                                    data-alternate-values="[Ilhas Caimão]">
                                                                                    Ilhas Caimão</option>
                                                                                <option value="CK"
                                                                                    data-alternate-values="[Ilhas Cook]">
                                                                                    Ilhas Cook</option>
                                                                                <option value="CC"
                                                                                    data-alternate-values="[Ilhas dos Cocos]">
                                                                                    Ilhas dos Cocos</option>
                                                                                <option value="FK"
                                                                                    data-alternate-values="[Ilhas Falkland]">
                                                                                    Ilhas Falkland</option>
                                                                                <option value="GS"
                                                                                    data-alternate-values="[Ilhas Geórgia do Sul e Sandwich do Sul]">
                                                                                    Ilhas Geórgia do Sul e Sandwich do Sul
                                                                                </option>
                                                                                <option value="MH"
                                                                                    data-alternate-values="[Ilhas Marshall]">
                                                                                    Ilhas Marshall</option>
                                                                                <option value="UM"
                                                                                    data-alternate-values="[Ilhas Menores Distantes dos Estados Unidos]">
                                                                                    Ilhas Menores Distantes dos Estados
                                                                                    Unidos</option>
                                                                                <option value="PN"
                                                                                    data-alternate-values="[Ilhas Pitcairn]">
                                                                                    Ilhas Pitcairn</option>
                                                                                <option value="SB"
                                                                                    data-alternate-values="[Ilhas Salomão]">
                                                                                    Ilhas Salomão</option>
                                                                                <option value="TC"
                                                                                    data-alternate-values="[Ilhas Turcas e Caicos]">
                                                                                    Ilhas Turcas e Caicos</option>
                                                                                <option value="IN"
                                                                                    data-alternate-values="[Índia]">Índia
                                                                                </option>
                                                                                <option value="ID"
                                                                                    data-alternate-values="[Indonésia]">
                                                                                    Indonésia</option>
                                                                                <option value="IR"
                                                                                    data-alternate-values="[Irão]">Irão
                                                                                </option>
                                                                                <option value="IQ"
                                                                                    data-alternate-values="[Iraque]">Iraque
                                                                                </option>
                                                                                <option value="IE"
                                                                                    data-alternate-values="[Irlanda]">
                                                                                    Irlanda</option>
                                                                                <option value="IS"
                                                                                    data-alternate-values="[Islândia]">
                                                                                    Islândia</option>
                                                                                <option value="IL"
                                                                                    data-alternate-values="[Israel]">Israel
                                                                                </option>
                                                                                <option value="IT"
                                                                                    data-alternate-values="[Itália]">Itália
                                                                                </option>
                                                                                <option value="JM"
                                                                                    data-alternate-values="[Jamaica]">
                                                                                    Jamaica</option>
                                                                                <option value="JP"
                                                                                    data-alternate-values="[Japão]">Japão
                                                                                </option>
                                                                                <option value="JE"
                                                                                    data-alternate-values="[Jersey]">Jersey
                                                                                </option>
                                                                                <option value="DJ"
                                                                                    data-alternate-values="[Jibuti]">Jibuti
                                                                                </option>
                                                                                <option value="JO"
                                                                                    data-alternate-values="[Jordânia]">
                                                                                    Jordânia</option>
                                                                                <option value="XK"
                                                                                    data-alternate-values="[Kosovo]">Kosovo
                                                                                </option>
                                                                                <option value="KW"
                                                                                    data-alternate-values="[Koweit]">Koweit
                                                                                </option>
                                                                                <option value="LA"
                                                                                    data-alternate-values="[Laos]">Laos
                                                                                </option>
                                                                                <option value="LS"
                                                                                    data-alternate-values="[Lesoto]">Lesoto
                                                                                </option>
                                                                                <option value="LV"
                                                                                    data-alternate-values="[Letónia]">
                                                                                    Letónia</option>
                                                                                <option value="LB"
                                                                                    data-alternate-values="[Líbano]">Líbano
                                                                                </option>
                                                                                <option value="LR"
                                                                                    data-alternate-values="[Libéria]">
                                                                                    Libéria</option>
                                                                                <option value="LY"
                                                                                    data-alternate-values="[Líbia]">Líbia
                                                                                </option>
                                                                                <option value="LI"
                                                                                    data-alternate-values="[Listenstaine]">
                                                                                    Listenstaine</option>
                                                                                <option value="LT"
                                                                                    data-alternate-values="[Lituânia]">
                                                                                    Lituânia</option>
                                                                                <option value="LU"
                                                                                    data-alternate-values="[Luxemburgo]">
                                                                                    Luxemburgo</option>
                                                                                <option value="MO"
                                                                                    data-alternate-values="[Macau]">Macau
                                                                                </option>
                                                                                <option value="MG"
                                                                                    data-alternate-values="[Madagáscar]">
                                                                                    Madagáscar</option>
                                                                                <option value="YT"
                                                                                    data-alternate-values="[Maiote]">Maiote
                                                                                </option>
                                                                                <option value="MY"
                                                                                    data-alternate-values="[Malásia]">
                                                                                    Malásia</option>
                                                                                <option value="MW"
                                                                                    data-alternate-values="[Maláui]">Maláui
                                                                                </option>
                                                                                <option value="MV"
                                                                                    data-alternate-values="[Maldivas]">
                                                                                    Maldivas</option>
                                                                                <option value="ML"
                                                                                    data-alternate-values="[Mali]">Mali
                                                                                </option>
                                                                                <option value="MT"
                                                                                    data-alternate-values="[Malta]">Malta
                                                                                </option>
                                                                                <option value="MA"
                                                                                    data-alternate-values="[Marrocos]">
                                                                                    Marrocos</option>
                                                                                <option value="MQ"
                                                                                    data-alternate-values="[Martinica]">
                                                                                    Martinica</option>
                                                                                <option value="MU"
                                                                                    data-alternate-values="[Maurícia]">
                                                                                    Maurícia</option>
                                                                                <option value="MR"
                                                                                    data-alternate-values="[Mauritânia]">
                                                                                    Mauritânia</option>
                                                                                <option value="MX"
                                                                                    data-alternate-values="[México]">México
                                                                                </option>
                                                                                <option value="MM"
                                                                                    data-alternate-values="[Mianmar/Birmânia]">
                                                                                    Mianmar/Birmânia</option>
                                                                                <option value="FM"
                                                                                    data-alternate-values="[Micronésia]">
                                                                                    Micronésia</option>
                                                                                <option value="MZ"
                                                                                    data-alternate-values="[Moçambique]">
                                                                                    Moçambique</option>
                                                                                <option value="MD"
                                                                                    data-alternate-values="[Moldávia]">
                                                                                    Moldávia</option>
                                                                                <option value="MC"
                                                                                    data-alternate-values="[Mónaco]">Mónaco
                                                                                </option>
                                                                                <option value="MN"
                                                                                    data-alternate-values="[Mongólia]">
                                                                                    Mongólia</option>
                                                                                <option value="MS"
                                                                                    data-alternate-values="[Monserrate]">
                                                                                    Monserrate</option>
                                                                                <option value="ME"
                                                                                    data-alternate-values="[Montenegro]">
                                                                                    Montenegro</option>
                                                                                <option value="NA"
                                                                                    data-alternate-values="[Namíbia]">
                                                                                    Namíbia</option>
                                                                                <option value="NR"
                                                                                    data-alternate-values="[Nauru]">Nauru
                                                                                </option>
                                                                                <option value="NP"
                                                                                    data-alternate-values="[Nepal]">Nepal
                                                                                </option>
                                                                                <option value="NI"
                                                                                    data-alternate-values="[Nicarágua]">
                                                                                    Nicarágua</option>
                                                                                <option value="NE"
                                                                                    data-alternate-values="[Níger]">Níger
                                                                                </option>
                                                                                <option value="NG"
                                                                                    data-alternate-values="[Nigéria]">
                                                                                    Nigéria</option>
                                                                                <option value="NU"
                                                                                    data-alternate-values="[Niuê]">Niuê
                                                                                </option>
                                                                                <option value="MK"
                                                                                    data-alternate-values="[North Macedonia]">
                                                                                    North Macedonia</option>
                                                                                <option value="NO"
                                                                                    data-alternate-values="[Noruega]">
                                                                                    Noruega</option>
                                                                                <option value="NC"
                                                                                    data-alternate-values="[Nova Caledónia]">
                                                                                    Nova Caledónia</option>
                                                                                <option value="NZ"
                                                                                    data-alternate-values="[Nova Zelândia]">
                                                                                    Nova Zelândia</option>
                                                                                <option value="OM"
                                                                                    data-alternate-values="[Omã]">Omã
                                                                                </option>
                                                                                <option value="NL"
                                                                                    data-alternate-values="[Países Baixos]">
                                                                                    Países Baixos</option>
                                                                                <option value="PA"
                                                                                    data-alternate-values="[Panamá]">Panamá
                                                                                </option>
                                                                                <option value="PG"
                                                                                    data-alternate-values="[Papua-Nova Guiné]">
                                                                                    Papua-Nova Guiné</option>
                                                                                <option value="PK"
                                                                                    data-alternate-values="[Paquistão]">
                                                                                    Paquistão</option>
                                                                                <option value="PY"
                                                                                    data-alternate-values="[Paraguai]">
                                                                                    Paraguai</option>
                                                                                <option value="PE"
                                                                                    data-alternate-values="[Peru]">Peru
                                                                                </option>
                                                                                <option value="PF"
                                                                                    data-alternate-values="[Polinésia Francesa]">
                                                                                    Polinésia Francesa</option>
                                                                                <option value="PL"
                                                                                    data-alternate-values="[Polónia]">
                                                                                    Polónia</option>
                                                                                <option value="PR"
                                                                                    data-alternate-values="[Porto Rico]">
                                                                                    Porto Rico</option>
                                                                                <option value="PT"
                                                                                    data-alternate-values="[Portugal]">
                                                                                    Portugal</option>
                                                                                <option value="KE"
                                                                                    data-alternate-values="[Quénia]">Quénia
                                                                                </option>
                                                                                <option value="KG"
                                                                                    data-alternate-values="[Quirguistão]">
                                                                                    Quirguistão</option>
                                                                                <option value="KI"
                                                                                    data-alternate-values="[Quiribáti]">
                                                                                    Quiribáti</option>
                                                                                <option value="GB"
                                                                                    data-alternate-values="[Reino Unido (UK)]">
                                                                                    Reino Unido (UK)</option>
                                                                                <option value="CF"
                                                                                    data-alternate-values="[República Centro-Africana]">
                                                                                    República Centro-Africana</option>
                                                                                <option value="DO"
                                                                                    data-alternate-values="[República Dominicana]">
                                                                                    República Dominicana</option>
                                                                                <option value="RE"
                                                                                    data-alternate-values="[Reunião]">
                                                                                    Reunião</option>
                                                                                <option value="RO"
                                                                                    data-alternate-values="[Roménia]">
                                                                                    Roménia</option>
                                                                                <option value="RW"
                                                                                    data-alternate-values="[Ruanda]">Ruanda
                                                                                </option>
                                                                                <option value="RU"
                                                                                    data-alternate-values="[Rússia]">Rússia
                                                                                </option>
                                                                                <option value="SV"
                                                                                    data-alternate-values="[Salvador]">
                                                                                    Salvador</option>
                                                                                <option value="WS"
                                                                                    data-alternate-values="[Samoa]">Samoa
                                                                                </option>
                                                                                <option value="AS"
                                                                                    data-alternate-values="[Samoa Americana]">
                                                                                    Samoa Americana</option>
                                                                                <option value="SH"
                                                                                    data-alternate-values="[Santa Helena]">
                                                                                    Santa Helena</option>
                                                                                <option value="LC"
                                                                                    data-alternate-values="[Santa Lúcia]">
                                                                                    Santa Lúcia</option>
                                                                                <option value="BL"
                                                                                    data-alternate-values="[São Bartolomeu]">
                                                                                    São Bartolomeu</option>
                                                                                <option value="KN"
                                                                                    data-alternate-values="[São Cristóvão e Neves]">
                                                                                    São Cristóvão e Neves</option>
                                                                                <option value="SM"
                                                                                    data-alternate-values="[São Marinho]">
                                                                                    São Marinho</option>
                                                                                <option value="MF"
                                                                                    data-alternate-values="[São Martinho]">
                                                                                    São Martinho</option>
                                                                                <option value="SX"
                                                                                    data-alternate-values="[São Martinho (Antilhas Holandesas)]">
                                                                                    São Martinho (Antilhas Holandesas)
                                                                                </option>
                                                                                <option value="PM"
                                                                                    data-alternate-values="[São Pedro e Miquelão]">
                                                                                    São Pedro e Miquelão</option>
                                                                                <option value="ST"
                                                                                    data-alternate-values="[São Tomé e Príncipe]">
                                                                                    São Tomé e Príncipe</option>
                                                                                <option value="VC"
                                                                                    data-alternate-values="[São Vicente e Granadinas]">
                                                                                    São Vicente e Granadinas</option>
                                                                                <option value="EH"
                                                                                    data-alternate-values="[Sara Ocidental]">
                                                                                    Sara Ocidental</option>
                                                                                <option value="SC"
                                                                                    data-alternate-values="[Seicheles]">
                                                                                    Seicheles</option>
                                                                                <option value="SN"
                                                                                    data-alternate-values="[Senegal]">
                                                                                    Senegal</option>
                                                                                <option value="SL"
                                                                                    data-alternate-values="[Serra Leoa]">
                                                                                    Serra Leoa</option>
                                                                                <option value="RS"
                                                                                    data-alternate-values="[Sérvia]">Sérvia
                                                                                </option>
                                                                                <option value="SG"
                                                                                    data-alternate-values="[Singapura]">
                                                                                    Singapura</option>
                                                                                <option value="SY"
                                                                                    data-alternate-values="[Síria]">Síria
                                                                                </option>
                                                                                <option value="SO"
                                                                                    data-alternate-values="[Somália]">
                                                                                    Somália</option>
                                                                                <option value="LK"
                                                                                    data-alternate-values="[Sri Lanca]">Sri
                                                                                    Lanca</option>
                                                                                <option value="SD"
                                                                                    data-alternate-values="[Sudão]">Sudão
                                                                                </option>
                                                                                <option value="SS"
                                                                                    data-alternate-values="[Sudão do Sul]">
                                                                                    Sudão do Sul</option>
                                                                                <option value="SE"
                                                                                    data-alternate-values="[Suécia]">Suécia
                                                                                </option>
                                                                                <option value="CH"
                                                                                    data-alternate-values="[Suíça]">Suíça
                                                                                </option>
                                                                                <option value="SR"
                                                                                    data-alternate-values="[Suriname]">
                                                                                    Suriname</option>
                                                                                <option value="SJ"
                                                                                    data-alternate-values="[Svalbard e Jan Mayen]">
                                                                                    Svalbard e Jan Mayen</option>
                                                                                <option value="TH"
                                                                                    data-alternate-values="[Tailândia]">
                                                                                    Tailândia</option>
                                                                                <option value="TW"
                                                                                    data-alternate-values="[Taiwan]">Taiwan
                                                                                </option>
                                                                                <option value="TJ"
                                                                                    data-alternate-values="[Tajiquistão]">
                                                                                    Tajiquistão</option>
                                                                                <option value="TZ"
                                                                                    data-alternate-values="[Tanzânia]">
                                                                                    Tanzânia</option>
                                                                                <option value="TF"
                                                                                    data-alternate-values="[Terras Austrais e Antárticas Francesas]">
                                                                                    Terras Austrais e Antárticas Francesas
                                                                                </option>
                                                                                <option value="IO"
                                                                                    data-alternate-values="[Território Britânico do Oceano Índico]">
                                                                                    Território Britânico do Oceano Índico
                                                                                </option>
                                                                                <option value="PS"
                                                                                    data-alternate-values="[Território Palestiniano]">
                                                                                    Território Palestiniano</option>
                                                                                <option value="TL"
                                                                                    data-alternate-values="[Timor-Leste]">
                                                                                    Timor-Leste</option>
                                                                                <option value="TG"
                                                                                    data-alternate-values="[Togo]">Togo
                                                                                </option>
                                                                                <option value="TO"
                                                                                    data-alternate-values="[Tonga]">Tonga
                                                                                </option>
                                                                                <option value="TK"
                                                                                    data-alternate-values="[Toquelau]">
                                                                                    Toquelau</option>
                                                                                <option value="TT"
                                                                                    data-alternate-values="[Trindade e Tobago]">
                                                                                    Trindade e Tobago</option>
                                                                                <option value="TN"
                                                                                    data-alternate-values="[Tunísia]">
                                                                                    Tunísia</option>
                                                                                <option value="TR"
                                                                                    data-alternate-values="[Türkiye]">
                                                                                    Türkiye</option>
                                                                                <option value="TM"
                                                                                    data-alternate-values="[Turquemenistão]">
                                                                                    Turquemenistão</option>
                                                                                <option value="TV"
                                                                                    data-alternate-values="[Tuvalu]">Tuvalu
                                                                                </option>
                                                                                <option value="UA"
                                                                                    data-alternate-values="[Ucrânia]">
                                                                                    Ucrânia</option>
                                                                                <option value="UG"
                                                                                    data-alternate-values="[Uganda]">Uganda
                                                                                </option>
                                                                                <option value="UY"
                                                                                    data-alternate-values="[Uruguai]">
                                                                                    Uruguai</option>
                                                                                <option value="UZ"
                                                                                    data-alternate-values="[Usbequistão]">
                                                                                    Usbequistão</option>
                                                                                <option value="VU"
                                                                                    data-alternate-values="[Vanuatu]">
                                                                                    Vanuatu</option>
                                                                                <option value="VA"
                                                                                    data-alternate-values="[Vaticano]">
                                                                                    Vaticano</option>
                                                                                <option value="VE"
                                                                                    data-alternate-values="[Venezuela]">
                                                                                    Venezuela</option>
                                                                                <option value="VN"
                                                                                    data-alternate-values="[Vietname]">
                                                                                    Vietname</option>
                                                                                <option value="VG"
                                                                                    data-alternate-values="[Virgin Islands (British)]">
                                                                                    Virgin Islands (British)</option>
                                                                                <option value="VI"
                                                                                    data-alternate-values="[Virgin Islands (US)]">
                                                                                    Virgin Islands (US)</option>
                                                                                <option value="WF"
                                                                                    data-alternate-values="[Wallis e Futuna]">
                                                                                    Wallis e Futuna</option>
                                                                                <option value="ZM"
                                                                                    data-alternate-values="[Zâmbia]">Zâmbia
                                                                                </option>
                                                                                <option value="ZW"
                                                                                    data-alternate-values="[Zimbabué]">
                                                                                    Zimbabué</option>
                                                                            </select><svg viewBox="0 0 24 24"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                class="wc-blocks-components-select__expand"
                                                                                aria-hidden="true" focusable="false">
                                                                                <path
                                                                                    d="M17.5 11.6L12 16l-5.5-4.4.9-1.2L12 14l4.5-3.6 1 1.2z">
                                                                                </path>
                                                                            </svg></div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="wc-block-components-text-input wc-block-components-address-form__first_name">
                                                                    <input type="text" id="shipping-first_name"
                                                                        autocapitalize="sentences"
                                                                        autocomplete="given-name" aria-label="Nome"
                                                                        aria-describedby="" required=""
                                                                        aria-invalid="false" title=""
                                                                        value=""><label
                                                                        for="shipping-first_name">Nome</label></div>
                                                                <div
                                                                    class="wc-block-components-text-input wc-block-components-address-form__last_name">
                                                                    <input type="text" id="shipping-last_name"
                                                                        autocapitalize="sentences"
                                                                        autocomplete="family-name" aria-label="Apelido"
                                                                        aria-describedby="" required=""
                                                                        aria-invalid="false" title=""
                                                                        value=""><label
                                                                        for="shipping-last_name">Apelido</label></div>
                                                                <div
                                                                    class="wc-block-components-text-input wc-block-components-address-form__address_1">
                                                                    <input type="text" id="shipping-address_1"
                                                                        autocapitalize="sentences"
                                                                        autocomplete="address-line1" aria-label="Endereço"
                                                                        aria-describedby="" required=""
                                                                        aria-invalid="false" title=""
                                                                        value=""><label
                                                                        for="shipping-address_1">Endereço</label></div>
                                                                <span
                                                                    class="wc-block-components-address-form__address_2-toggle"
                                                                    tabindex="0" role="button">+ Adicionar apartment,
                                                                    suite, etc.</span><input type="text" tabindex="-1"
                                                                    class="wc-block-components-address-form__address_2-hidden-input"
                                                                    aria-hidden="true" aria-label="Apartment, suite, etc."
                                                                    autocomplete="address-line2" id="shipping-address_2"
                                                                    value="">
                                                                <div
                                                                    class="wc-block-components-text-input wc-block-components-address-form__city">
                                                                    <input type="text" id="shipping-city"
                                                                        autocapitalize="sentences"
                                                                        autocomplete="address-level2" aria-label="Cidade"
                                                                        aria-describedby="" required=""
                                                                        aria-invalid="false" title=""
                                                                        value=""><label
                                                                        for="shipping-city">Cidade</label></div>
                                                                <div
                                                                    class="wc-block-components-text-input wc-block-components-address-form__postcode">
                                                                    <input type="text" id="shipping-postcode"
                                                                        autocapitalize="characters"
                                                                        autocomplete="postal-code"
                                                                        aria-label="Código postal" aria-describedby=""
                                                                        required="" aria-invalid="false"
                                                                        title="" value=""><label
                                                                        for="shipping-postcode">Código postal</label></div>
                                                                <div
                                                                    class="wc-block-components-text-input wc-block-components-address-form__phone">
                                                                    <input type="tel" id="shipping-phone"
                                                                        autocapitalize="characters" autocomplete="tel"
                                                                        aria-label="Telefone (opcional)"
                                                                        aria-describedby="" aria-invalid="false"
                                                                        title="" value=""><label
                                                                        for="shipping-phone">Telefone (opcional)</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="wc-block-components-checkbox wc-block-checkout__use-address-for-billing">
                                                        <label for="checkbox-control-1"><input id="checkbox-control-1"
                                                                class="wc-block-components-checkbox__input"
                                                                type="checkbox" aria-invalid="false" value=""
                                                                checked=""><svg
                                                                class="wc-block-components-checkbox__mark"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 24 20">
                                                                <path
                                                                    d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z">
                                                                </path>
                                                            </svg><span class="wc-block-components-checkbox__label">Usar o
                                                                mesmo endereço para facturação</span></label></div>
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
                                                                                value="free_shipping:3" checked="">
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
                                                                        </label></div>
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
                                                                    aria-disabled="false" value="bacs" checked="">
                                                                <div
                                                                    class="wc-block-components-radio-control__option-layout">
                                                                    <div
                                                                        class="wc-block-components-radio-control__label-group">
                                                                        <span
                                                                            id="radio-control-wc-payment-method-options-bacs__label"
                                                                            class="wc-block-components-radio-control__label"><span
                                                                                class="wc-block-components-payment-method-label">Transferência
                                                                                bancária</span></span></div>
                                                                </div>
                                                            </label>
                                                            <div id="radio-control-wc-payment-method-options-bacs__content"
                                                                class="wc-block-components-radio-control-accordion-content">
                                                                <div>Efetue o pagamento diretamente da sua conta bancária.
                                                                    Utilize o seu NIF como referência do pagamento. O seu
                                                                    pedido não será enviado até que os fundos sejam
                                                                    recebidos.</div>
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
                                                                for="checkbox-control-2"><input id="checkbox-control-2"
                                                                    class="wc-block-components-checkbox__input"
                                                                    type="checkbox" aria-invalid="false"
                                                                    value=""><svg
                                                                    class="wc-block-components-checkbox__mark"
                                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 24 20">
                                                                    <path
                                                                        d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z">
                                                                    </path>
                                                                </svg><span
                                                                    class="wc-block-components-checkbox__label">Adicione
                                                                    uma nota à sua encomenda</span></label></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div
                                            class="wc-block-checkout__terms wc-block-checkout__terms--with-separator wp-block-woocommerce-checkout-terms-block">
                                            <span class="wc-block-components-checkbox__label">Ao continuar com a compra
                                                concorda com os nossos <a
                                                    href="{{ route('condicoes-gerais-de-venda-cgv') }}"
                                                    target="_blank">Termos e condições</a> e <a
                                                    href="{{ route('politica-de-privacidade') }}" target="_blank">Política
                                                    de privacidade</a></span></div>



                                        <div
                                            class="wc-block-checkout__actions wp-block-woocommerce-checkout-actions-block">
                                            <div class="css-0 e19lxcc00"></div>
                                            <div class="wc-block-components-notices"></div>
                                            <div class="wc-block-components-notices__snackbar wc-block-components-notice-snackbar-list"
                                                tabindex="-1">
                                                <div></div>
                                            </div>
                                            <div class="wc-block-checkout__actions_row"><a href="{{ route('carrinho') }}"
                                                    class="wc-block-components-checkout-return-to-cart-button"><svg
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        width="24" height="24" aria-hidden="true"
                                                        focusable="false">
                                                        <path d="M20 11.2H6.8l3.7-3.7-1-1L3.9 12l5.6 5.5 1-1-3.7-3.7H20z">
                                                        </path>
                                                    </svg>Voltar ao carrinho</a><button
                                                    class="wc-block-components-button wp-element-button wc-block-components-checkout-place-order-button contained"
                                                    style="" type="button">
                                                    <div class="wc-block-components-button__text">
                                                        <div class="wc-block-components-checkout-place-order-button__text">
                                                            Finalizar encomenda</div>
                                                    </div>
                                                </button></div>
                                        </div>
                                    </form>
                                </div>
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
                                                role="heading">Resumo da encomenda</p><span
                                                class="wc-block-formatted-money-amount wc-block-components-formatted-money-amount wc-block-components-checkout-order-summary__title-price">308.00
                                                €</span><span
                                                class="wc-block-components-checkout-order-summary__title-icon"><svg
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" aria-hidden="true" focusable="false">
                                                    <path d="M17.5 11.6L12 16l-5.5-4.4.9-1.2L12 14l4.5-3.6 1 1.2z"></path>
                                                </svg></span>
                                        </div>
                                        <div class="wc-block-components-checkout-order-summary__content" id=":r1:">
                                            <div
                                                class="wp-block-woocommerce-checkout-order-summary-cart-items-block wc-block-components-totals-wrapper">
                                                <div class="wc-block-components-order-summary is-large">
                                                    <div class="wc-block-components-order-summary__content">
                                                        <div class="wc-block-components-order-summary-item">
                                                            <div class="wc-block-components-order-summary-item__image">
                                                                <div
                                                                    class="wc-block-components-order-summary-item__quantity">
                                                                    <span aria-hidden="true">1</span><span
                                                                        class="screen-reader-text">1 item</span></div><img
                                                                    src="{{ asset('wp-content/uploads/2025/10/10-Pellet-Ardenforest-Palette-de-70-sacs-de-15-kg-480x480.webp') }}"
                                                                    alt="Ardenforest Pellets – Paletes de 70 sacos de 15 kg"
                                                                    width="48" height="48">
                                                            </div>
                                                            <div
                                                                class="wc-block-components-order-summary-item__description">
                                                                <h3 class="wc-block-components-product-name">Ardenforest
                                                                    Pellets – Paletes de 70 sacos de 15 kg</h3><span
                                                                    class="wc-block-components-order-summary-item__individual-prices price wc-block-components-product-price"><span
                                                                        class="screen-reader-text">Preço
                                                                        anterior:</span><del
                                                                        class="wc-block-components-product-price__regular wc-block-components-order-summary-item__regular-individual-price">565.00
                                                                        €</del><span class="screen-reader-text">Preço com
                                                                        desconto:</span><ins
                                                                        class="wc-block-components-product-price__value is-discounted wc-block-components-order-summary-item__individual-price">308.00
                                                                        €</ins></span>
                                                                <div class="wc-block-components-product-metadata">
                                                                    <div
                                                                        class="wc-block-components-product-metadata__description">
                                                                        <p>Nossos pellets ARDENFOREST madeira são
                                                                            certificados DINPlus e fabricados na região de
                                                                            Champanha Ardenas.Estes pellets…</p>
                                                                    </div>
                                                                </div>
                                                            </div><span class="screen-reader-text">Total price for 1
                                                                Ardenforest Pellets – Paletes de 70 sacos de 15 kg item:
                                                                308.00 €</span>
                                                            <div class="wc-block-components-order-summary-item__total-price"
                                                                aria-hidden="true"><span
                                                                    class="price wc-block-components-product-price"><span
                                                                        class="wc-block-formatted-money-amount wc-block-components-formatted-money-amount wc-block-components-product-price__value">308.00
                                                                        €</span></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-block-name="woocommerce/checkout-order-summary-totals-block"
                                                class="wp-block-woocommerce-checkout-order-summary-totals-block">
                                                <div
                                                    class="wp-block-woocommerce-checkout-order-summary-subtotal-block wc-block-components-totals-wrapper">
                                                    <div class="wc-block-components-totals-item"><span
                                                            class="wc-block-components-totals-item__label">Subtotal</span><span
                                                            class="wc-block-formatted-money-amount wc-block-components-formatted-money-amount wc-block-components-totals-item__value">308.00
                                                            €</span>
                                                        <div class="wc-block-components-totals-item__description"></div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="wp-block-woocommerce-checkout-order-summary-discount-block wc-block-components-totals-wrapper">
                                                </div>
                                                <div
                                                    class="wp-block-woocommerce-checkout-order-summary-fee-block wc-block-components-totals-wrapper">
                                                </div>
                                                <div
                                                    class="wp-block-woocommerce-checkout-order-summary-shipping-block wc-block-components-totals-wrapper">
                                                    <div class="wc-block-components-totals-shipping">
                                                        <div class="wc-block-components-totals-item"><span
                                                                class="wc-block-components-totals-item__label">Envio
                                                                grátis</span>
                                                            <div class="wc-block-components-totals-item__value">
                                                                <strong>Grátis</strong></div>
                                                            <div class="wc-block-components-totals-item__description">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wc-block-components-totals-wrapper">
                                                <div
                                                    class="wc-block-components-totals-item wc-block-components-totals-footer-item">
                                                    <span class="wc-block-components-totals-item__label">Total</span>
                                                    <div class="wc-block-components-totals-item__value"><span
                                                            class="wc-block-formatted-money-amount wc-block-components-formatted-money-amount wc-block-components-totals-footer-item-tax-value">308.00
                                                            €</span></div>
                                                    <div class="wc-block-components-totals-item__description"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display: none;"></div>
                        </div>
                    </div><!-- .site-main -->

                </div><!-- .content-area -->
            </div>
        </section>

    </div>
    @include('layouts.partials.footer.public')

@endsection

@push('scripts')







    <div class="wc-block-components-main wc-block-checkout__main wp-block-woocommerce-checkout-fields-block">
        <form method="POST" action="{{ route('checkout.process') }}" aria-label="Finalizar compras"
            class="wc-block-components-form wc-block-checkout__form" id="checkout-form">
            @csrf

            <!-- Informações de contato -->
            <fieldset
                class="wc-block-checkout__contact-fields wp-block-woocommerce-checkout-contact-information-block wc-block-components-checkout-step"
                id="contact-fields">
                <legend class="screen-reader-text">Informação de contacto</legend>
                <div class="wc-block-components-checkout-step__heading">
                    <h2 class="wc-block-components-title wc-block-components-checkout-step__title">Informação de contacto
                    </h2>
                    <span class="wc-block-components-checkout-step__heading-content"></span>
                </div>
                <div class="wc-block-components-checkout-step__container">
                    <p class="wc-block-components-checkout-step__description">Usaremos esta conta de email para lhe enviar
                        detalhes e actualizações relacionadas com a sua encomenda.</p>
                    <div class="wc-block-components-checkout-step__content">
                        <div class="wc-block-components-notices"></div>
                        <div class="wc-block-components-notices__snackbar wc-block-components-notice-snackbar-list"
                            tabindex="-1">
                            <div></div>
                        </div>
                        <div id="contact" class="wc-block-components-address-form">
                            <div class="wc-block-components-text-input wc-block-components-address-form__email">
                                <input type="email" id="email" name="email" autocapitalize="none"
                                    autocomplete="email" aria-label="Endereço de email"
                                    aria-describedby="wc-guest-checkout-notice" required="" aria-invalid="false"
                                    title="" value="{{ old('email') }}">
                                <label for="email">Endereço de email *</label>
                                @error('email')
                                    <span
                                        style="color: #e74c3c; font-size: 12px; display: block; margin-top: 5px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <p id="wc-guest-checkout-notice" class="wc-block-checkout__guest-checkout-notice">Actualmente
                                está a finalizar a encomenda como convidado.</p>
                        </div>
                    </div>
                </div>
            </fieldset>

            <!-- Morada de envio -->
            <fieldset
                class="wc-block-checkout__shipping-fields wp-block-woocommerce-checkout-shipping-address-block wc-block-components-checkout-step"
                id="shipping-fields">
                <legend class="screen-reader-text">Morada de envio</legend>
                <div class="wc-block-components-checkout-step__heading">
                    <h2 class="wc-block-components-title wc-block-components-checkout-step__title">Morada de envio</h2>
                </div>
                <div class="wc-block-components-checkout-step__container">
                    <p class="wc-block-components-checkout-step__description">Introduza a morada onde deseja que a
                        encomenda seja entregue.</p>
                    <div class="wc-block-components-checkout-step__content">
                        <div class="wc-block-components-notices"></div>
                        <div class="wc-block-components-notices__snackbar wc-block-components-notice-snackbar-list"
                            tabindex="-1">
                            <div></div>
                        </div>
                        <div class="wc-block-components-address-address-wrapper is-editing">
                            <div class="wc-block-components-address-form-wrapper">
                                <div id="shipping" class="wc-block-components-address-form">
                                    <div
                                        class="wc-block-components-address-form__country wc-block-components-country-input">
                                        <div class="wc-blocks-components-select">
                                            <div class="wc-blocks-components-select__container">
                                                <label for="shipping-country"
                                                    class="wc-blocks-components-select__label">País/Região *</label>
                                                <select size="1" class="wc-blocks-components-select__select"
                                                    id="shipping-country" name="country" aria-invalid="false"
                                                    autocomplete="country" required>
                                                    <option value="" disabled {{ old('country') ? '' : 'selected' }}>
                                                        Selecione um país/região</option>
                                                    <option value="Portugal"
                                                        {{ old('country') == 'Portugal' ? 'selected' : '' }}>Portugal
                                                    </option>
                                                    <option value="Espanha"
                                                        {{ old('country') == 'Espanha' ? 'selected' : '' }}>Espanha
                                                    </option>
                                                    <option value="França"
                                                        {{ old('country') == 'França' ? 'selected' : '' }}>França</option>
                                                </select>
                                                @error('country')
                                                    <span
                                                        style="color: #e74c3c; font-size: 12px; display: block; margin-top: 5px;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="wc-block-components-text-input wc-block-components-address-form__first_name">
                                        <input type="text" id="shipping-first_name" name="first_name"
                                            autocapitalize="sentences" autocomplete="given-name" aria-label="Nome"
                                            aria-describedby="" required="" aria-invalid="false" title=""
                                            value="{{ old('first_name') }}">
                                        <label for="shipping-first_name">Nome *</label>
                                        @error('first_name')
                                            <span
                                                style="color: #e74c3c; font-size: 12px; display: block; margin-top: 5px;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div
                                        class="wc-block-components-text-input wc-block-components-address-form__last_name">
                                        <input type="text" id="shipping-last_name" name="last_name"
                                            autocapitalize="sentences" autocomplete="family-name" aria-label="Apelido"
                                            aria-describedby="" required="" aria-invalid="false" title=""
                                            value="{{ old('last_name') }}">
                                        <label for="shipping-last_name">Apelido *</label>
                                        @error('last_name')
                                            <span
                                                style="color: #e74c3c; font-size: 12px; display: block; margin-top: 5px;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div
                                        class="wc-block-components-text-input wc-block-components-address-form__address_1">
                                        <input type="text" id="shipping-address_1" name="address_1"
                                            autocapitalize="sentences" autocomplete="address-line1" aria-label="Endereço"
                                            aria-describedby="" required="" aria-invalid="false" title=""
                                            value="{{ old('address_1') }}">
                                        <label for="shipping-address_1">Endereço *</label>
                                        @error('address_1')
                                            <span
                                                style="color: #e74c3c; font-size: 12px; display: block; margin-top: 5px;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <span class="wc-block-components-address-form__address_2-toggle" tabindex="0"
                                        role="button">+ Adicionar apartment, suite, etc.</span>
                                    <div class="wc-block-components-text-input wc-block-components-address-form__address_2"
                                        style="display: none;">
                                        <input type="text" id="shipping-address_2" name="address_2"
                                            autocapitalize="sentences" autocomplete="address-line2"
                                            aria-label="Apartamento, suite, etc. (opcional)" aria-describedby=""
                                            aria-invalid="false" title="" value="{{ old('address_2') }}">
                                        <label for="shipping-address_2">Apartamento, suite, etc. (opcional)</label>
                                    </div>

                                    <div class="wc-block-components-text-input wc-block-components-address-form__city">
                                        <input type="text" id="shipping-city" name="city"
                                            autocapitalize="sentences" autocomplete="address-level2"
                                            aria-label="Cidade" aria-describedby="" required=""
                                            aria-invalid="false" title="" value="{{ old('city') }}">
                                        <label for="shipping-city">Cidade *</label>
                                        @error('city')
                                            <span
                                                style="color: #e74c3c; font-size: 12px; display: block; margin-top: 5px;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div
                                        class="wc-block-components-text-input wc-block-components-address-form__postcode">
                                        <input type="text" id="shipping-postcode" name="postcode"
                                            autocapitalize="characters" autocomplete="postal-code"
                                            aria-label="Código postal" aria-describedby="" required=""
                                            aria-invalid="false" title="" value="{{ old('postcode') }}">
                                        <label for="shipping-postcode">Código postal *</label>
                                        @error('postcode')
                                            <span
                                                style="color: #e74c3c; font-size: 12px; display: block; margin-top: 5px;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="wc-block-components-text-input wc-block-components-address-form__phone">
                                        <input type="tel" id="shipping-phone" name="phone"
                                            autocapitalize="characters" autocomplete="tel"
                                            aria-label="Telefone (opcional)" aria-describedby="" aria-invalid="false"
                                            title="" value="{{ old('phone') }}">
                                        <label for="shipping-phone">Telefone (opcional)</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>

            <!-- Método de pagamento -->
            <fieldset
                class="wc-block-checkout__payment-method wp-block-woocommerce-checkout-payment-block wc-block-components-checkout-step"
                id="payment-method">
                <legend class="screen-reader-text">Opções de pagamento</legend>
                <div class="wc-block-components-checkout-step__heading">
                    <h2 class="wc-block-components-title wc-block-components-checkout-step__title">Opções de pagamento
                    </h2>
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
                                    for="radio-control-wc-payment-method-options-bacs">
                                    <input id="radio-control-wc-payment-method-options-bacs"
                                        class="wc-block-components-radio-control__input" type="radio"
                                        name="payment_method"
                                        aria-describedby="radio-control-wc-payment-method-options-bacs__content"
                                        aria-disabled="false" value="bacs" checked required>
                                    <div class="wc-block-components-radio-control__option-layout">
                                        <div class="wc-block-components-radio-control__label-group">
                                            <span id="radio-control-wc-payment-method-options-bacs__label"
                                                class="wc-block-components-radio-control__label">
                                                <span class="wc-block-components-payment-method-label">Transferência
                                                    bancária</span>
                                            </span>
                                        </div>
                                    </div>
                                </label>
                                <div id="radio-control-wc-payment-method-options-bacs__content"
                                    class="wc-block-components-radio-control-accordion-content">
                                    <div>Efetue o pagamento diretamente da sua conta bancária. Utilize o seu NIF como
                                        referência do pagamento. O seu pedido não será enviado até que os fundos sejam
                                        recebidos.</div>
                                </div>
                            </div>
                        </div>
                        @error('payment_method')
                            <span
                                style="color: #e74c3c; font-size: 12px; display: block; margin-top: 5px;">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </fieldset>

            <!-- Notas da encomenda -->
            <div class="wc-block-checkout__order-notes wp-block-woocommerce-checkout-order-note-block wc-block-components-checkout-step"
                id="order-notes">
                <div class="wc-block-components-checkout-step__container">
                    <div class="wc-block-components-checkout-step__content">
                        <div class="wc-block-checkout__add-note">
                            <div class="wc-block-components-checkbox">
                                <label for="checkbox-control-2">
                                    <input id="checkbox-control-2" class="wc-block-components-checkbox__input"
                                        type="checkbox" aria-invalid="false" value="">
                                    <svg class="wc-block-components-checkbox__mark" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 20">
                                        <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"></path>
                                    </svg>
                                    <span class="wc-block-components-checkbox__label">Adicione uma nota à sua
                                        encomenda</span>
                                </label>
                            </div>
                        </div>
                        <div class="wc-block-components-text-input" style="display: none; margin-top: 15px;">
                            <textarea id="order_comments" name="order_comments" rows="4"
                                placeholder="Notas sobre a sua encomenda, por exemplo, notas especiais para entrega.">{{ old('order_comments') }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Termos e condições -->
            <div
                class="wc-block-checkout__terms wc-block-checkout__terms--with-separator wp-block-woocommerce-checkout-terms-block">
                <div class="wc-block-components-checkbox">
                    <label for="terms">
                        <input id="terms" class="wc-block-components-checkbox__input" type="checkbox"
                            name="terms" value="1" required {{ old('terms') ? 'checked' : '' }}>
                        <svg class="wc-block-components-checkbox__mark" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 20">
                            <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"></path>
                        </svg>
                        <span class="wc-block-components-checkbox__label">Ao continuar com a compra concorda com os nossos
                            <a href="{{ route('condicoes-gerais-de-venda-cgv') }}" target="_blank">Termos e
                                condições</a> e <a href="{{ route('politica-de-privacidade') }}"
                                target="_blank">Política de privacidade</a> *</span>
                    </label>
                    @error('terms')
                        <span
                            style="color: #e74c3c; font-size: 12px; display: block; margin-top: 5px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- Botões -->
            <div class="wc-block-checkout__actions wp-block-woocommerce-checkout-actions-block">
                <div class="css-0 e19lxcc00"></div>
                <div class="wc-block-components-notices"></div>
                <div class="wc-block-components-notices__snackbar wc-block-components-notice-snackbar-list"
                    tabindex="-1">
                    <div></div>
                </div>
                <div class="wc-block-checkout__actions_row">
                    <a href="" class="wc-block-components-checkout-return-to-cart-button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            aria-hidden="true" focusable="false">
                            <path d="M20 11.2H6.8l3.7-3.7-1-1L3.9 12l5.6 5.5 1-1-3.7-3.7H20z"></path>
                        </svg>
                        Voltar ao carrinho
                    </a>
                    <button
                        class="wc-block-components-button wp-element-button wc-block-components-checkout-place-order-button contained"
                        style="" type="submit">
                        <div class="wc-block-components-button__text">
                            <div class="wc-block-components-checkout-place-order-button__text">Finalizar encomenda</div>
                        </div>
                    </button>
                </div>
            </div>
        </form>
    </div>


@endpush
