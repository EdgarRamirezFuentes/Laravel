<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormularioController extends Controller
{
    public function create() {
        return view('form.data_form');
    }

    public function validateData(Request $request) {
        // Valida que los datos del formulario sean válidos
        $isValidData = $request->validate([
            'nombre' => ['required', 'bail'],
            'primer_apellido' => ['required', 'bail'],
            'segundo_apellido' => ['required', 'bail'],
            'fecha_nac' => ['required', 'date', 'bail'],
            'genero' => ['required', 'bail'],
            'pass' => ['required', 'same:pass_confirmation', 'bail'],
            'pass_confirmation' => ['required', 'bail'],
        ]);

        // Retorna al formulario si los datos no son validos
        if ($isValidData) {
            return redirect(route('form.showData'))->with('data', $request->all());
        }

        // Retorna a la vista del formulario
        return back()->withInput();
    }

    public function showData() {
        return view("form.show_data");
    }
}
