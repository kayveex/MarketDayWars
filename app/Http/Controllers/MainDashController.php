<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainDashController extends Controller
{
    function index() {
        return view('dash_main');
    }
}
