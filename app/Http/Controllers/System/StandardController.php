<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\System\Order;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class StandardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Redirector|RedirectResponse|View
     */
    public function index()
    {
         # TÍTULO DA PÁGINA
         $title = "{$this->title}s";

         # ROTA DA PÁGINA
         $route = $this->route;


         return view("{$this->view}.index", compact("title", "route"));

    }
}
