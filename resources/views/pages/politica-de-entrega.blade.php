@extends('layouts.app')

@section('title', __('Política de entrega'))

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
                <h1 class="page-title">Política de entrega</h1>
            </div>
        </div>
        <section id="main-container" class="container">
            <div class="row ">
                <div id="main-content" class="main-page col-12">
                    <div id="main" class="site-main">

                        <p>Na LENHA VIVA, fazemos todos os esforços para garantir que os seus produtos de
                            aquecimento são entregues de forma rápida e segura. Entregamos em sua casa após
                            pré-pagamento.</p>



                        <ol class="wp-block-list">
                            <li>Áreas de Entrega</li>
                        </ol>



                        <p>Entregamos para:</p>



                        <p>Portugal</p>



                        <p>Europa (áreas disponíveis indicadas no momento da encomenda)</p>



                        <ol start="2" class="wp-block-list">
                            <li>Prazos de Entrega</li>
                        </ol>



                        <p><strong>Portugal</strong>: 3 a 5 dias úteis após confirmação da encomenda</p>



                        <p><strong>Europa</strong>: 5 a 10 dias úteis</p>



                        <p>Estes prazos são fornecidos como referência e podem variar em função do transportador e
                            dos períodos de maior movimento.</p>



                        <p>Prazo de Processamento: Processamos as encomendas no prazo de 24 horas (1 dia). As
                            encomendas efetuadas antes das 17:00 serão processadas no próprio dia. As encomendas
                            efetuadas após as 17:00 serão processadas no dia seguinte.</p>



                        <ol start="3" class="wp-block-list">
                            <li>Custos de Entrega</li>
                        </ol>



                        <p>Em https://lenhaviva.com, a entrega de todos os produtos adquiridos é gratuita em
                            Portugal e na Europa.</p>



                        <p>É também importante indicar a morada correta ao efetuar a compra no nosso site.</p>



                        <ol start="4" class="wp-block-list">
                            <li>Rastreamento do Pedido</li>
                        </ol>



                        <p>Assim que o seu pacote for enviado, receberá um e-mail de confirmação com um número de
                            seguimento, permitindo-lhe acompanhar a sua entrega em tempo real.</p>



                        <ol start="5" class="wp-block-list">
                            <li>Embalagem</li>
                        </ol>



                        <p>Os seus produtos de aquecimento são cuidadosamente embalados para garantir a sua proteção
                            durante o transporte e para oferecer uma apresentação ideal como presente.</p>



                        <ol start="6" class="wp-block-list">
                            <li>Pacote Danificado ou Perdido</li>
                        </ol>



                        <p>Se o seu pacote chegar danificado ou não chegar até si:</p>



                        <p>Contacte o nosso serviço de apoio ao cliente através do e-mail contactlehnaviva@gmail.com
                            até 48 horas após a entrega.</p>



                        <p>Forneça fotografias da embalagem e dos produtos (se danificados).</p>



                        <p>Tomaremos as medidas necessárias para reenviar ou reembolsar o seu pedido.</p>



                        <ol start="7" class="wp-block-list">
                            <li>Devoluções e Trocas</li>
                        </ol>



                        <p>Para todas as devoluções ou trocas, consulte a nossa Política de Devoluções, acessível na
                            página dedicada no nosso website.</p>



                        <figure class="wp-block-image size-large is-resized"><a
                                href="../wp-content/uploads/2025/10/er-01-1-scaled.png"><img loading="lazy" decoding="async"
                                    width="770" height="361" src="../wp-content/uploads/2025/10/er-01-1-770x361.png"
                                    alt="" class="wp-image-6024" style="width:342px;height:auto" /></a></figure>
                    </div><!-- .site-main -->

                </div><!-- .content-area -->
            </div>
        </section>

    </div>

    @include('layouts.partials.footer.public')
@endsection

@push('scripts')
@endpush
