@extends('layouts.app')

@section('title', __('Política de pagamento'))

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
                <h1 class="page-title">Política de pagamento</h1>
            </div>
        </div>
        <section id="main-container" class="container">
            <div class="row ">
                <div id="main-content" class="main-page col-12">
                    <div id="main" class="site-main">

                        <p>1 – ALOJAMENTO NUMA PLATAFORMA SÓLIDA E PROFISSIONAL<br>O <a
                                href="{{ route('home') }}">https://lenhaviva.com</a> está alojado num servidor
                            profissional mantido por uma empresa especializada. Os servidores também são atualizados
                            regularmente.</p>



                        <p>2 – UTILIZAÇÃO DE UM CERTIFICADO SSL PARA PROTEGER OS SEUS DADOS
                            PESSOAIS<br>opensea-container.com utiliza um certificado SSL para proteger as
                            informações transmitidas entre si e o website. Com este certificado, as informações são
                            encriptadas e não podem ser intercetadas.</p>



                        <p>Um cadeado (ou ícone equivalente) na barra de endereço do seu browser indica isso mesmo,
                            assim como o S no endereço do site: <a href="{{ route('home') }}">https://lenhaviva.com</a>
                        </p>



                        <p>3 – TOTAL RESPONSABILIDADE PELO PAGAMENTO E SEU PROCESSAMENTO PELO BANCO (CONTROLO E
                            DÉBITO DE CONTAS BANCÁRIAS).</p>



                        <p>4 – PAGAMENTO POR TRANSFERÊNCIA BANCÁRIA (IMEDIATA)</p>



                        <p>O cliente deverá certificar-se junto do seu banco de que o valor total da encomenda foi
                            creditado na conta fornecida pela LENHA VIVA e que o seu nome e número de encomenda
                            foram introduzidos corretamente na transferência.</p>



                        <p>Quaisquer taxas bancárias cobradas pelo banco do cliente são da sua responsabilidade.</p>



                        <figure class="wp-block-image size-large is-resized"><a
                                href="../wp-content/uploads/2025/10/er-01-1-scaled.png"><img loading="lazy"
                                                                                             decoding="async" width="770" height="361"
                                                                                             src="../wp-content/uploads/2025/10/er-01-1-770x361.png" alt=""
                                                                                             class="wp-image-6024" style="width:272px;height:auto" /></a></figure>
                    </div><!-- .site-main -->

                </div><!-- .content-area -->
            </div>
        </section>

    </div>

    @include('layouts.partials.footer.public')
@endsection

@push('scripts')



@endpush
