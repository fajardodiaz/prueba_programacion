<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ScrapCategoriaController;

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
    return view('welcome');
})->name('welcome');


//Vista del Dashboard donde se encuentra la explicacion del proyecto
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Muestra las categorias de la pagina web, la misma pagina no devuelve todas las categorias
Route::get('/categorias', [ScrapCategoriaController::class,'mostrar'])
->middleware(['auth'])->name('categorias');


require __DIR__.'/auth.php';
