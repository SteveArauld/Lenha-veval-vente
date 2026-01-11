@extends('layouts.app')

@section('title', __('Política de reembolso'))

@push('styles')
@endpush

@section('content')
    @include('layouts.partials.navbar.public-show')

    <div id="tbay-main-content">
        <section id="tbay-breadcrumb" class="tbay-breadcrumb  breadcrumbs-text active-nav-right show-title">
            <div class="container">
                <div class="breadscrumb-inner">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}" class="active">Casa</a> </li>
                        <li class="active">Página</li>
                    </ol>
                </div>
            </div>
        </section>
        <div class="title-not-breadcrumbs">
            <div class="container">
                <h1 class="page-title">Política de reembolso</h1>
            </div>
        </div>
        <section id="main-container" class="container">
            <div class="row ">
                <div id="main-content" class="main-page col-12">
                    <div id="main" class="site-main">

                        <p>Na LENHA VIVA, a sua satisfação é a nossa prioridade. Se não estiver completamente
                            satisfeito com a sua compra, aqui estão as condições de reembolso:</p>



                        <ol class="wp-block-list">
                            <li>Condições de Reembolso</li>
                        </ol>



                        <p>Pode solicitar um reembolso se:</p>



                        <p>O produto estiver com defeito ou danificado na entrega</p>



                        <p>O produto recebido não corresponder ao seu pedido</p>



                        <p>Exercer o seu direito de rescisão dentro do prazo legal de 14 dias (excluindo joias
                            personalizadas ou gravadas)</p>



                        <p>O produto deve ser devolvido em perfeitas condições e na embalagem original.</p>



                        <ol start="2" class="wp-block-list">
                            <li>Prazo de Reembolso</li>
                        </ol>



                        <p>Após a receção e inspeção do produto pela nossa equipa:</p>



                        <p>O reembolso será emitido no prazo de 7 a 14 dias</p>



                        <p>O reembolso será efetuado através do mesmo método de pagamento utilizado na compra.</p>



                        <ol start="3" class="wp-block-list">
                            <li>Custos de Devolução</li>
                        </ol>



                        <p>Os custos de devolução são da responsabilidade do cliente, a menos que o produto esteja
                            com defeito ou não corresponda ao pedido.</p>



                        <ol start="4" class="wp-block-list">
                            <li>Joias Personalizadas</li>
                        </ol>



                        <p>As joias personalizadas (gravadas ou personalizadas) não são reembolsáveis, exceto em
                            caso de defeito ou erro de fabrico verificado no momento da entrega.</p>



                        <ol start="5" class="wp-block-list">
                            <li>Procedimento de Reembolso</li>
                        </ol>



                        <p>Para iniciar um reembolso:</p>



                        <p>Entre em contacto com o nosso serviço de apoio ao cliente pelo e-mail
                            contactlehnaviva@gmail.com </p>



                        <p>Forneça o número do seu pedido e fotografias se o produto estiver com defeito.</p>



                        <p>Informaremos o procedimento de devolução e reembolso.</p>



                        <figure class="wp-block-image size-large is-resized"><a
                                href="../wp-content/uploads/2025/10/er-01-1-scaled.png"><img loading="lazy" decoding="async"
                                    width="770" height="361" src="../wp-content/uploads/2025/10/er-01-1-770x361.png"
                                    alt="" class="wp-image-6024" style="width:308px;height:auto" /></a></figure>
                    </div><!-- .site-main -->

                </div><!-- .content-area -->
            </div>
        </section>

    </div>

    @include('layouts.partials.footer.public')
@endsection

@push('scripts')
@endpush
