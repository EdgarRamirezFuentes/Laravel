<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

/*
|--------------------------------------------------------------------------
| Welcome Route
|--------------------------------------------------------------------------
|
| This route shows the index view
|
*/
Route::get('/', HomeController::class);

/*
|--------------------------------------------------------------------------
| Hello, World! Route
|--------------------------------------------------------------------------
|
| This route shows the Hello world view
|
*/
Route::get('greeting', function() {
    return view('greeting');
});

/* 
|--------------------------------------------------------------------------
| Add greeting Route
|--------------------------------------------------------------------------
|   This route is used to add a new greeting 
|   This route is before greeting/{name} to avoid that the word add is taken as a variable
|   instead of a link.
*/
Route::get('greeting/add', function () {
    return "Page to add a new greeting";
});

/* 
|--------------------------------------------------------------------------
| Greeting person Route
|--------------------------------------------------------------------------
|  
| This route is used to greeting a person using their name.
|
*/
/* Route that contains a variable */
Route::get('greeting/{name}', function($name) {
    return "Hello $name";
});
