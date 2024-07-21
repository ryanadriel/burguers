<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends StandardController
{
    protected $title = "Categorias";
    protected $route = "category";
    protected $view = "system.category.";
}
