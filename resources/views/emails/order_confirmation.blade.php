<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Confirmação da sua encomenda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background: #2c3e50;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .content {
            padding: 30px;
            background: #f9f9f9;
        }

        .order-info {
            background: white;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .address-box {
            background: #f8f9fa;
            padding: 15px;
            border-left: 4px solid #2c3e50;
            margin: 10px 0;
        }

        .product-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        .product-table th,
        .product-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .product-table th {
            background: #f5f5f5;
        }

        .total {
            font-size: 18px;
            font-weight: bold;
            color: #2c3e50;
            margin-top: 20px;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            padding: 20px;
            color: #666;
            font-size: 12px;
        }

        .section-title {
            color: #2c3e50;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
            margin-top: 30px;
        }

        /* Styles pour le bouton WhatsApp */
        .whatsapp-button {
            display: inline-block;
            background-color: #25D366;
            color: white;
            text-decoration: none;
            padding: 15px 25px;
            border-radius: 50px;
            font-weight: bold;
            font-size: 16px;
            margin: 20px 0;
            text-align: center;
            transition: background-color 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .whatsapp-button:hover {
            background-color: #1DA851;
            text-decoration: none;
            color: white;
        }

        .whatsapp-icon {
            vertical-align: middle;
            margin-right: 10px;
            font-size: 20px;
        }

        .whatsapp-container {
            text-align: center;
            margin: 30px 0;
            padding: 20px;
            background: white;
            border-radius: 10px;
            border: 2px solid #25D366;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Lenha Viva</h1>
            <h2>Confirmação da Encomenda #{{ $order['order_number'] }}</h2>
        </div>

        <div class="content">
            <p>Olá {{ $order['customer']['first_name'] }},</p>
            <p>Obrigado pela sua encomenda! Aqui estão os detalhes:</p>

            <!-- Bouton WhatsApp ajouté ici -->
            <div class="whatsapp-container">
                <h3>📱 Precisa de ajuda?</h3>
                <p>Tem alguma questão sobre a sua encomenda? Contacte-nos facilmente pelo WhatsApp!</p>
                <a href="https://wa.me/351925048074?text=Olá! Tenho uma questão sobre a minha encomenda #{{ $order['order_number'] }}"
                    class="whatsapp-button" target="_blank">
                    <span class="whatsapp-icon">💬</span> Contactar via WhatsApp
                </a>
                <p style="margin-top: 10px; font-size: 14px; color: #666;">
                    <strong>Número:</strong> +351 925 048 074
                </p>
            </div>

            <div class="order-info">
                <h3>📋 Informações da Encomenda</h3>
                <p><strong>Número da Encomenda:</strong> {{ $order['order_number'] }}</p>
                <p><strong>Data do Pedido:</strong> {{ $order['date'] }}</p>
                <p><strong>Data Completa:</strong> {{ $order['order_date'] }}</p>
                <p><strong>Método de Pagamento:</strong> {{ $order['payment_method'] }}</p>
                <p><strong>Método de Envio:</strong> {{ $order['shipping_method'] }}</p>
                @if (!empty($order['order_comments']))
                    <p><strong>Observações:</strong> {{ $order['order_comments'] }}</p>
                @endif
            </div>

            <h3 class="section-title">👤 Informações do Cliente</h3>
            <div class="order-info">
                <p><strong>Email:</strong> {{ $order['customer']['email'] }}</p>
                <p><strong>Telefone:</strong> {{ $order['customer']['phone'] ?: 'Não fornecido' }}</p>
            </div>

            <h3 class="section-title">📍 Endereço de Entrega</h3>
            <div class="address-box">
                <p><strong>{{ $order['customer']['first_name'] }} {{ $order['customer']['last_name'] }}</strong></p>
                <p>{{ $order['customer']['address_1'] }}</p>
                @if (!empty($order['customer']['address_2']))
                    <p>{{ $order['customer']['address_2'] }}</p>
                @endif
                <p>{{ $order['customer']['postcode'] }} {{ $order['customer']['city'] }}</p>
                <p>{{ $order['customer']['country'] }}</p>
            </div>

            <h3 class="section-title">🏢 Endereço de Faturação</h3>
            <div class="address-box">
                <p><strong>{{ $order['billing']['first_name'] }} {{ $order['billing']['last_name'] }}</strong></p>
                <p>{{ $order['billing']['address_1'] }}</p>
                @if (!empty($order['billing']['address_2']))
                    <p>{{ $order['billing']['address_2'] }}</p>
                @endif
                <p>{{ $order['billing']['postcode'] }} {{ $order['billing']['city'] }}</p>
                <p>{{ $order['billing']['country'] }}</p>
                @if (!empty($order['billing']['phone']))
                    <p><strong>Telefone:</strong> {{ $order['billing']['phone'] }}</p>
                @endif
            </div>

            <h3 class="section-title">🛒 Produtos Encomendados</h3>
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Preço Unitário</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order['items'] as $item)
                        <tr>
                            <td>{{ $item['title'] ?? ($item['name'] ?? 'Produto') }}</td>
                            <td>{{ $item['quantity'] }}</td>
                            <td>{{ number_format($item['price'], 3, ',', ' ') }} €</td>
                            <td>{{ number_format($item['price'] * $item['quantity'], 3, ',', ' ') }} €</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="total">
                <p><strong>Quantidade Total de Itens:</strong> {{ $order['total_items'] }}</p>
                <p><strong>Valor Total:</strong> {{ $order['formatted_total_price'] }} €</p>
            </div>

            @if (!empty($order['order_comments']))
                <div class="order-info">
                    <h3>📝 Observações do Pedido</h3>
                    <p>{{ $order['order_comments'] }}</p>
                </div>
            @endif

            <!-- Bouton WhatsApp répété avant la fermeture -->
            <div style="text-align: center; margin: 30px 0;">
                <a href="https://wa.me/351925048074?text=Olá! Tenho uma questão sobre a minha encomenda #{{ $order['order_number'] }}"
                    class="whatsapp-button" target="_blank">
                    <span class="whatsapp-icon">💬</span> Contactar via WhatsApp
                </a>
            </div>

            <p>Entraremos em contacto consigo brevemente para confirmar os detalhes da entrega.</p>
            <p>Obrigado por escolher Lenha Viva!</p>
        </div>

        <div class="footer">
            <p>Lenha Viva &copy; {{ date('Y') }}</p>
            <p>Se tiver alguma questão, contacte-nos: contactlehnaviva@gmail.com</p>
            <p><strong>WhatsApp:</strong> +351 925 048 074</p>
        </div>
    </div>
</body>

</html>
