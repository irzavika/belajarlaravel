<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class backendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
