<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends StandardController
{
    protected $order;
    protected $title = "Pedidos";

    protected $view = "System.orders.";

    public function __construct(Order $order)
    {
      $this->order = $order; 
    }

    public function store(){

    }
}
