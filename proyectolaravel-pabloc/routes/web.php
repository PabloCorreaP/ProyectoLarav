<?php

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

Route::get('/', function () {
    return view('auth.login');//Establecemos login como la vista inicial

});

Auth::routes();
//Metodos que generan todas las rutas basicas de los controladores 
//Con ->middleware("auth") obligamos a que el usuario tenga que estar logeado para acceder a las rutas
Route::resource("libros",App\Http\Controllers\LibroController::class)->middleware("auth");
Route::resource("autores",App\Http\Controllers\AutoreController::class)->middleware("auth");

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
