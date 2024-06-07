<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Http\Requests\System\OrderFormRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends StandardController
{
    protected $order;
    protected $title = "Pedidos";
    protected $route = "orders";

    protected $view = "System.orders.";

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function store(OrderFormRequest $request)
    {
        $dataForm = $request->all();

        $insert = $this->order->create($dataForm);

        if ($insert) {
            return redirect()
                ->route($this->route . '.index')
                ->with(['success' => "Pedido cadastrado com sucesso!"]);
        } else {
            return redirect()
                ->withErrors(['error' => "Erro ao cadastrar pedido!"])
                ->withInput();
        }
    }
}
