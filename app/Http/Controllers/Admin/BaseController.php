<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

abstract class BaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('status');
    }
}
