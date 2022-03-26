<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Videogame;

use Illuminate\Pagination\Paginator;

class VideogamesController extends Controller
{
    //
    public function index() {
        return view('form.index');
    }

    public function create() {
        return view('form.register');
    }

    public function validateData(Request $request) {
        $isValidData = $request->validate([
            'name' => ['required', 'bail'],
            'publisher' => ['required', 'bail'],
            'genre' => ['required', 'bail'],
            'release' => ['required', 'date', 'bail'],
        ]);

        if ($isValidData) {
            $newVideogame = new Videogame();
            $newVideogame->name = $request->name;
            $newVideogame->publisher = $request->publisher;
            $newVideogame->genre = $request->genre;
            $newVideogame->release = $request->release;
            $newVideogame->save();
            return redirect(route('form.index'))
                    ->with('success', 'The videogame was added successfully!');
        }

        return redirect()
        ->back()
        ->withInput()
        ->with('error', 'The input data is not valid');
    }

    public function showData() {
        // Utilizar bootstrap en vez de Tailwind
        Paginator::useBootstrapFive();
        $videogames = Videogame::paginate(5);
        return view('form.show_data', compact('videogames'));
    }
}
