@extends('layouts.app')

@section('title', __('Termos e condições gerais de utilização TCG'))

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
                <h1 class="page-title">Termos e condições gerais de utilização TCG</h1>
            </div>
        </div>
        <section id="main-container" class="container">
            <div class="row ">
                <div id="main-content" class="main-page col-12">
                    <div id="main" class="site-main">

                        <h2 class="wp-block-heading">Finalidade</h2>



                        <p>Os presentes Termos Gerais de Utilização (doravante &#8220;TCG&#8221;) definem os termos
                            e condições de acesso e utilização do website <a
                                href="{{ route('home') }}">https://lenhaviva.com</a>, operado pela LENHA VIVA, bem como
                            os direitos e obrigações dos utilizadores.</p>



                        <ol start="2" class="wp-block-list">
                            <li>Avisos Legais</li>
                        </ol>



                        <p><strong>Denominação:&nbsp;</strong>Lenha Viva, Unipessoal Lda</p>



                        <p><strong>NIF:</strong> 516429655</p>



                        <p><strong>IVA:</strong> PT516429655</p>



                        <p>Morada: Rua Da Graça Nr. 19 Corga 3550-243 PINDO Portugal</p>



                        <p>E-mail: contactlehnaviva@gmail.com </p>



                        <ol start="3" class="wp-block-list">
                            <li>Acesso ao Site</li>
                        </ol>



                        <p>O site é acessível gratuitamente a qualquer utilizador com acesso à Internet. O
                            utilizador é o único responsável pelo seu equipamento informático e pela ligação
                            necessária para utilizar o site.</p>



                        <p>A LENHA VIVA reserva-se o direito de suspender, limitar ou interromper o acesso ao site
                            por motivos técnicos, de manutenção ou de segurança.</p>



                        <ol start="4" class="wp-block-list">
                            <li>Utilização do Site</li>
                        </ol>



                        <p>O utilizador concorda em utilizar o site de acordo com a legislação aplicável e com os
                            presentes Termos e Condições.<br>Em particular, o utilizador está proibido de:</p>



                        <p>Utilizar o site para fins ilícitos ou fraudulentos,</p>



                        <p>Prejudicar o bom funcionamento do site,</p>



                        <p>Prejudicar os direitos de propriedade intelectual ou a imagem da LENHA VIVA.</p>



                        <ol start="5" class="wp-block-list">
                            <li>Produtos e Serviços</li>
                        </ol>



                        <p>O site <a href="{{ route('home') }}">https://lenhaviva.com</a> apresenta e oferece joias e
                            acessórios para venda. As condições de compra, entrega e devolução estão especificadas
                            nos Termos e Condições Gerais de Venda (TCG) disponíveis no site.</p>



                        <ol start="6" class="wp-block-list">
                            <li>Propriedade Intelectual</li>
                        </ol>



                        <p>Todo o conteúdo do site (textos, imagens, logótipos, vídeos, gráficos, etc.) é
                            propriedade exclusiva da LENHA VIVA, salvo indicação em contrário.<br>Qualquer
                            reprodução, distribuição, exploração ou modificação, mesmo que parcial, sem autorização
                            prévia por escrito é estritamente proibida.</p>



                        <ol start="7" class="wp-block-list">
                            <li>Dados Pessoais</li>
                        </ol>



                        <p>Os dados recolhidos no website são tratados em conformidade com o Regulamento Geral sobre
                            a Proteção de Dados (RGPD).<br>Para mais informações, consulte a nossa Política de
                            Privacidade.</p>



                        <ol start="8" class="wp-block-list">
                            <li>Responsabilidade</li>
                        </ol>



                        <p>A LENHA VIVA envida todos os esforços para garantir a exatidão e a atualização das
                            informações publicadas no site. No entanto, a empresa não pode ser responsabilizada por:
                        </p>



                        <p>Interrupções, indisponibilidades ou avarias do site;</p>



                        <p>Danos diretos ou indiretos relacionados com a utilização do site;</p>



                        <p>Exatidão das informações fornecidas por terceiros (parceiros, fornecedores, etc.).</p>



                        <ol start="9" class="wp-block-list">
                            <li>Hiperligações</li>
                        </ol>



                        <p>O site pode conter links para outros sites. A LENHA VIVA declina qualquer
                            responsabilidade pelo conteúdo e disponibilidade destes sites externos.</p>



                        <ol start="10" class="wp-block-list">
                            <li>Modificação dos Termos e Condições</li>
                        </ol>



                        <p>A LENHA VIVA reserva-se o direito de modificar os presentes Termos e Condições a
                            qualquer momento, de forma a adaptá-los às evoluções legais, técnicas ou funcionais do
                            site.<br>A versão aplicável é a que está em vigor na data em que o utilizador navega no
                            site.</p>



                        <p>11.º Lei Aplicável e Jurisdição</p>



                        <p>Estes Termos e Condições estão sujeitos à lei Portugues. Em caso de litígio, e na
                            ausência de uma solução amigável, os tribunais competentes serão os da jurisdição do
                            Tribunal da Relação de Lisboa (Portugal).</p>



                        <figure class="wp-block-image size-large is-resized"><a
                                href="../wp-content/uploads/2025/10/er-01-1-scaled.png"><img loading="lazy" decoding="async"
                                    width="770" height="361" src="../wp-content/uploads/2025/10/er-01-1-770x361.png"
                                    alt="" class="wp-image-6024" style="width:276px;height:auto" /></a></figure>
                    </div><!-- .site-main -->

                </div><!-- .content-area -->
            </div>
        </section>

    </div>

    @include('layouts.partials.footer.public')
@endsection

@push('scripts')
@endpush
