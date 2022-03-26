<?php

use App\Http\Controllers\VideogamesController;
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

Route::controller(VideogamesController::class)->group(function () {
    // Ruta del formulario de datos
    Route::get('/', 'index')->name('form.index'); 
    Route::get('/register', 'create')->name('form.register');
    Route::post('validate-data', 'validateData')->name('form.validate');
    Route::get('show-data', 'showData')->name('form.showData');
});
