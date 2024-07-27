<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    protected $title = "Banners";
    protected $route = "banner";
    protected $view = "Site.banner.";
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|\Illuminate\Contracts\Foundation\Application|View
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
