<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;


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
            // Preparando el registro con los datos a almacenar.
            $new_student = new Student();
            $new_student->nombre = $request->nombre;
            $new_student->ap_paterno = $request->primer_apellido;
            $new_student->ap_materno = $request->segundo_apellido;
            $new_student->alias = (isset($request->alias) ? $request->alias : "N/A");
            $new_student->fecha_nac = $request->fecha_nac;
            $new_student->genero = $request->genero;
            $new_student->password  = $request->pass;
            // Guardando el registro en la base de datos
            $new_student->save();
            
            // Envío de los alumnos registrados a la vista que muestra los datos
            return redirect(route('form.showData'))->with('students', Student::all());
        }

        // Retorna a la vista del formulario
        return back()->withInput();
    }

    public function showData() {
        return view("form.show_data");
    }
}
