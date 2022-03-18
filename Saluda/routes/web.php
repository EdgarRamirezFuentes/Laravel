<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SaludoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name('home.index');

Route::controller(SaludoController::class)->group(function () {
    // Ruta del formulario para ingresar el nombre
    Route::get('/greeting', 'index')->name('greeting.index');  
    // Ruta para mostra el nombre
    Route::get('/greeting/{name}', 'greet')->name('greeting.greet');
    // Ruta para validar la información
    Route::post('/greeting/validate', 'validateData')->name('greeting.validate');  

});
