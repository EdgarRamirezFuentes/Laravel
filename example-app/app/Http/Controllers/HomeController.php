<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Home route controller
class HomeController extends Controller
{
    public function __invoke() {
        return view('greeting');
    }
}