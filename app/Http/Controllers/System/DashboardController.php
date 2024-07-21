<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends StandardController
{
    protected $title = "Dashboard";
    protected $route = "dashboard";
    protected $view = "system.dashboard.";
}
