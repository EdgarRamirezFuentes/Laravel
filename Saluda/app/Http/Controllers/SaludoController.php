<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class SaludoController extends Controller
{
    /**
     * Muestra el formulario de saludo para que el usuario ingrese su nombre
     * 
     * @access public
     * @return view
     */
    public function index() {
        return view('greeting/index');
    } 

    /**
     * Valida que el usuario ingrese algún dato y lo adecúa para redireccionarlo a la ruta que muestra
     * el saludo con el nombre sanitizado.
     * 
     * @access public
     * @param Request $request Contiene los datos enviados mediante POST por el formulario de saludo.
     * @return Redirector
     */
    public function validateData(Request $request) {
        $name = ($request->name ? str_replace(' ', '-', trim(ucwords($request->name))) : "Desconocido");
        return redirect()->route('greeting.greet', ['name' => $name]);
    }

    /**
     * Muestra un saludo con el nombre enviado por el usuario
     * 
     * @access public
     * @param string $name Es el nombre que fue enviado desde la validación de datos
     * @return view
     */
    public function greet($name) {
        $name = str_replace('-', ' ', $name);
        return view('greeting/greeting', ['name' => $name]);
    }
}
