<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class HomeController extends Controller
{

    protected $title = "Home";
    protected $route = "home";
    protected $view = "Site.home.";

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\View
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
