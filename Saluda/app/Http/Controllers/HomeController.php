<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Muesta la pantalla de inicio
     * 
     * @access public
     * @return view
     */
    public function __invoke() {
        return view('home/index');
    }
}
