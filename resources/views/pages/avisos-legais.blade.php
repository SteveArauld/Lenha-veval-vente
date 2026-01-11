@extends('layouts.app')

@section('title', __('Avisos legais'))

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
                <h1 class="page-title">Avisos legais</h1>
            </div>
        </div>
        <section id="main-container" class="container">
            <div class="row ">
                <div id="main-content" class="main-page col-12">
                    <div id="main" class="site-main">

                        <p>Divulgação de acordo com a Secção 5 da Lei do Comércio Eletrónico</p>



                        <p>Lenha Viva, Unipessoal Lda<br>Grossista de Madeira<br><strong>Endereço:</strong> Rua Da
                            Graça Nr. 19 Corga 3550-243 PINDO Portugal</p>



                        <p><strong>E-mail:</strong> contactlehnaviva@gmail.com <br>WhatsApp: +351 912 649 344</p>



                        <p><strong>NIF:</strong> 516429655</p>



                        <p><strong>IVA:</strong> PT516429655</p>



                        <p>A empresa <strong>LENHA VIVA UNIPESSOAL LDA</strong> é uma Sociedade por Quotas de
                            Responsabilidade Limitada, <strong>constituída</strong> em <strong>quarta-feira, 28 de
                                abril de 2021</strong>, com sede no concelho de PENALVA DO CASTELO.<br>Objeto
                            Comercial: Comércio, Exploração florestal<br>Ramo Profissional: Comércio de Madeira<br>
                        </p>



                        <p>O conteúdo destas páginas foi criado com o máximo cuidado. No entanto, não assumimos
                            qualquer responsabilidade pela exatidão, integralidade ou atualidade deste conteúdo.</p>



                        <p>Direitos Autorais</p>



                        <p>O conteúdo deste site (texto e imagens) é disponibilizado aos internautas exclusivamente
                            para seu uso privado. Qualquer utilização comercial do conteúdo requer a autorização por
                            escrito da Lenha Viva, Unipessoal Lda. O operador deste site reserva-se o direito
                            exclusivo de utilização do texto e das imagens. As imagens não modificadas e isentas de
                            royalties estão excluídas.</p>



                        <p>Propriedade Intelectual:</p>



                        <p>Todo o conteúdo deste site, incluindo, entre outros, textos, imagens, gráficos,
                            logótipos, vídeos e todos os outros elementos nele contidos, está protegido pelas leis
                            de propriedade intelectual e pertence exclusivamente à LENHA VIVA, salvo indicação em
                            contrário.</p>



                        <p>Qualquer reprodução, representação, modificação, publicação ou adaptação de todos ou
                            parte dos elementos do site, por qualquer meio ou processo, é proibida sem a autorização
                            prévia por escrito da LENHA VIVA. Qualquer utilização não autorizada do site ou dos
                            seus elementos constitui uma infração e será processada de acordo com as leis
                            aplicáveis.</p>



                        <p>Hiperligações:</p>



                        <p>O site pode conter hiperligações para sites de terceiros. A LENHA VIVA não tem qualquer
                            controlo sobre estes sites e isenta-se de qualquer responsabilidade pelo seu conteúdo e
                            políticas de privacidade.</p>



                        <p>Dados de contacto:</p>



                        <p>Endereço postal: LENHA VIVA Niederlassung im Lenha Viva, Unipessoal Lda</p>



                        <p>E-mail: contactlehnaviva@gmail.com </p>



                        <p>WhatsApp: +351 912 649 344</p>



                        <figure class="wp-block-image size-large is-resized"><a
                                href="../wp-content/uploads/2025/10/er-01-1-scaled.png"><img loading="lazy" decoding="async"
                                    width="770" height="361" src="../wp-content/uploads/2025/10/er-01-1-770x361.png"
                                    alt="" class="wp-image-6024" style="width:273px;height:auto" /></a></figure>
                    </div><!-- .site-main -->

                </div><!-- .content-area -->
            </div>
        </section>

    </div>


    @include('layouts.partials.footer.public')
@endsection

@push('scripts')
@endpush
