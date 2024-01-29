<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/info', function() {
    return view('info');
})->name('info');

Route::get('/about', function() {
    return view('about');
})->name('about');

Route::get('/etusivu', function () {
    return view('etusivu');
})->name('etusivu');

Route::get('/todo-lista',[TodoController::class, 'ListaaTodot'])->name('ListaaTodot');
Route::get('/Todo-uusi', [TodoController::class, 'UusiTodo'])->name('UusiTodo');
Route::post('/Todo-tallenna', [TodoController::class, 'TallennaTodo'])->name('TallennaTodo');

Route::get('/todo-muokkaa/{todo}', [TodoController::class, 'MuokkaaTodo'])->name('MuokkaaTodo');