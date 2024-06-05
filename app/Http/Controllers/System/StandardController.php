<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StandardController extends Controller
{
    public function index()
    {
         # TÍTULO DA PÁGINA
         $title = "{$this->title}s";

         return view("{$this->view}.index", compact("title"));

    }
}
