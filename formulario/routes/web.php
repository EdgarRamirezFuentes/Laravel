<?php

use App\Http\Controllers\FormularioController;
use Illuminate\Support\Facades\Route;

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


Route::controller(FormularioController::class)->group(function () {
    // Ruta del formulario de datos
    Route::get('/', 'create')->name('form.index');  
    Route::post('/form/validate-data', 'validateData')->name('form.validate');
    Route::get('form/show-data', 'showData')->name('form.showData');
});