<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* Configurações gerais */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container do quadro de pedidos */
        .order-board {
            display: flex;
            gap: 20px;
            padding: 20px;
            max-width: 1200px;
            width: 100%;
        }

        /* Colunas de pedidos */
        .order-column {
            background-color: #f1f1f1;
            border-radius: 8px;
            width: 25%;
            display: flex;
            flex-direction: column;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .order-column h3 {
            text-align: center;
            color: #333;
            margin-bottom: 10px;
        }

        /* Lista de pedidos */
        .order-list {
            flex-grow: 1;
            min-height: 400px;
            padding: 10px;
            background-color: #fff;
            border-radius: 8px;
            border: 1px dashed #ddd;
            overflow-y: auto;
        }

        /* Estilo dos itens de pedidos */
        .order-item {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            margin-bottom: 10px;
            border-radius: 4px;
            cursor: grab;
            font-size: 16px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .order-item:hover {
            background-color: #45a049;
        }

        .order-item:active {
            cursor: grabbing;
        }

        /* Estilo ao arrastar o item */
        .order-list.drag-over {
            border: 2px dashed #4CAF50;
        }

    </style>
</head>
<body>
<div class="order-board">
    @foreach ($orders as $order)
    <div class="order-column" id="received">
        <h3>Recebido</h3>
        <div class="order-list" id="received-list">
                <div class="order-item" draggable="true" data-id="{{ $order->id }}">
                    <p>Pedido #{{ $order->id }}</p>
                    <p>Cliente: {{ $order->cliente_nome }}</p>
                    <p>Status: {{ $order->status }}</p>
                </div>
        </div>
    </div>

    <div class="order-column" id="preparing">
        <h3>Em Preparo</h3>
        <div class="order-list" id="preparing-list">

        <!-- Corrigir bug, um card pode estar se fundindo a outro card -->
        </div>
    </div>

    <div class="order-column" id="ready">
        <h3>Pronto</h3>
        <div class="order-list" id="ready-list">
            <!-- Pedidos com status "Pronto" vão aqui -->
        </div>
    </div>

    <div class="order-column" id="delivered">
        <h3>Entregue</h3>
        <div class="order-list" id="delivered-list">
            <!-- Pedidos com status "Entregue" vão aqui -->
        </div>
    </div>
    @endforeach
</div>
<script>
    document.querySelectorAll('.order-item').forEach(item => {
        item.addEventListener('dragstart', dragStart);
    });

    document.querySelectorAll('.order-list').forEach(list => {
        list.addEventListener('dragover', dragOver);
        list.addEventListener('drop', drop);
    });

    function dragStart(e) {
        e.dataTransfer.setData('text/plain', e.target.dataset.id);
    }

    function dragOver(e) {
        e.preventDefault();
    }

    function drop(e) {
        e.preventDefault();
        const id = e.dataTransfer.getData('text');
        const orderItem = document.querySelector(`[data-id='${id}']`);
        e.target.appendChild(orderItem);

        // Atualize o status do pedido via AJAX
        const status = e.target.closest('.order-column').id;
        updateOrderStatus(id, status);
    }

    function updateOrderStatus(orderId, status) {
        fetch(`/orders/${orderId}/status`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ status })
        })
            .then(response => response.json())
            .then(data => {
                console.log(data.message);
            })
            .catch(error => {
                console.error('Erro:', error);
            });
    }

</script>
</body>
</html>

