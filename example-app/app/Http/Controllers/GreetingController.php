<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// Greeting route controller
class GreetingController extends Controller
{
    public function __invoke() {
        return view('greeting');
    }
}
