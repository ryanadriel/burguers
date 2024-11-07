<?php

namespace App\Http\Controllers\System;

use App\Http\Requests\System\OrderFormRequest;
use App\Models\System\Order;

class OrderController extends StandardController
{
    protected $orders;
    protected $title = "Pedidos";
    protected $route = "orders";

    protected $view = "System.orders.";

    public function __construct(Order $order)
    {
        $this->orders = $order;
    }

    public function index()
    {
        $orders = $this->orders->all();

        return view('system.orders.index', compact('orders'));
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
