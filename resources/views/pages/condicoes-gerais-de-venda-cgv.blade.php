@extends('layouts.app')

@section('title', __('Condições gerais de venda CGV'))

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
                <h1 class="page-title">Condições gerais de venda CGV</h1>
            </div>
        </div>
        <section id="main-container" class="container">
            <div class="row ">
                <div id="main-content" class="main-page col-12">
                    <div id="main" class="site-main">

                        <h2 class="wp-block-heading">Preâmbulo</h2>



                        <p>Os presentes Termos e Condições Gerais de Venda (doravante &#8220;TCG&#8221;) regem as
                            vendas efetuadas no site <a href="{{ route('home') }}">https://lenhaviva.com</a>, operado
                            pela LENHA VIVA, e definem os direitos e obrigações das partes na venda online de joias
                            e acessórios.</p>



                        <p>Ao efetuar uma encomenda, o cliente reconhece ter lido e aceite estes TCG sem reservas.
                        </p>



                        <ol start="2" class="wp-block-list">
                            <li>Informações Legais</li>
                        </ol>



                        <p>Nome: Lenha Viva, Unipessoal Lda</p>



                        <p><strong>NIF:</strong> 516429655</p>



                        <p><strong>IVA:</strong> PT516429655</p>



                        <p>Morada: Rua Da Graça Nr. 19 Corga 3550-243 PINDO Portugal</p>



                        <p>E-mail: contactlehnaviva@gmail.com </p>



                        <ol start="3" class="wp-block-list">
                            <li>Produtos</li>
                        </ol>



                        <p>Os produtos oferecidos para venda são descritos e apresentados com a maior precisão
                            possível. As fotografias são meramente informativas e podem diferir ligeiramente da
                            realidade devido às configurações do ecrã ou aos lotes de produção.</p>



                        <ol start="4" class="wp-block-list">
                            <li>Preços</li>
                        </ol>



                        <p>Os preços apresentados no site são em euros, incluindo todos os impostos (TTC), excluindo
                            os custos de entrega.<br>A LENHA VIVA reserva-se o direito de alterar os seus preços a
                            qualquer momento, mas os produtos serão cobrados com base nos preços em vigor no momento
                            da encomenda.</p>



                        <p>5.º Pedido</p>



                        <p>O cliente efetua o seu pedido selecionando os produtos e confirmando o processo de compra
                            online.<br>O pedido só será considerado finalizado após a receção do pagamento
                            integral.<br>A LENHA VIVA reserva-se o direito de recusar ou cancelar qualquer
                            encomenda em caso de contestação de pagamento ou suspeita de fraude.</p>



                        <p>6.º Pagamento</p>



                        <p>Os métodos de pagamento aceites estão especificados no site ( Transferência bancária,
                            etc.).<br>As transações são protegidas por um sistema de encriptação para proteger as
                            informações bancárias do cliente.</p>



                        <ol start="7" class="wp-block-list">
                            <li>Entrega</li>
                        </ol>



                        <p>As entregas são feitas em Portugal e internacionalmente (dependendo das áreas servidas).
                        </p>



                        <p>Os prazos de entrega são fornecidos apenas para fins informativos e podem variar
                            consoante o destino.</p>



                        <p>Em caso de atraso superior a 30 dias, o cliente poderá cancelar a sua encomenda e
                            solicitar o reembolso.</p>



                        <p>Os custos de entrega são indicados na confirmação da encomenda.</p>



                        <p>8.º Direito de Rescisão</p>



                        <p>De acordo com o Artigo L. 221-18 do Código do Consumidor Portugal, o cliente tem 14 dias
                            a partir da receção do pedido para exercer o direito de rescisão, sem necessidade de
                            justificação.</p>



                        <p>Certos produtos não são elegíveis para o direito de rescisão, incluindo:</p>



                        <p>Joias personalizadas ou gravadas,</p>



                        <p>Produtos que tenham sido utilizados por motivos de higiene.</p>



                        <p>Em caso de rescisão, o cliente deverá devolver o produto, a suas expensas, em perfeitas
                            condições e na embalagem original.</p>



                        <ol start="9" class="wp-block-list">
                            <li>Garantias</li>
                        </ol>



                        <p>Todos os produtos estão abrangidos pela garantia legal de conformidade (artigos L. 217-3
                            e seguintes do Código do Consumidor Portugues) e pela garantia contra defeitos ocultos
                            (artigos 1641 e seguintes do Código Civil Portugues).</p>



                        <p>Em caso de descoberta de um defeito, o cliente deverá notificar a LENHA VIVA o mais
                            rapidamente possível para providenciar a troca, o reparação ou o reembolso.</p>



                        <ol start="10" class="wp-block-list">
                            <li>Responsabilidade</li>
                        </ol>



                        <p>A LENHA VIVA não se responsabiliza por danos resultantes da utilização indevida do
                            produto ou de uma utilização em desconformidade com a finalidade pretendida.<br>A
                            empresa não se responsabiliza por atrasos na entrega por motivos de força maior.</p>



                        <ol start="11" class="wp-block-list">
                            <li>Atendimento ao Cliente</li>
                        </ol>



                        <p>Para quaisquer dúvidas ou reclamações, o cliente pode contactar o serviço de apoio ao
                            cliente através do seguinte endereço:<br>📧 contactlehnaviva@gmail.com </p>



                        <p>12.º Lei Aplicável e Jurisdição</p>



                        <p>Estes Termos e Condições Gerais são regidos pela lei Portugues. Em caso de litígio, e na
                            ausência de uma resolução amigável, os tribunais competentes serão os da jurisdição do
                            Tribunal da Relação de Lisboa (Portugal).</p>
                    </div><!-- .site-main -->

                </div><!-- .content-area -->
            </div>
        </section>

    </div>

    @include('layouts.partials.footer.public')
@endsection

@push('scripts')
@endpush
