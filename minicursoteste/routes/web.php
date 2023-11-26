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

    $meunome = "pedro";
    $array = [1, 2, 3, 4, "caio", "rafael"];

    return view('welcome', ['nome' => $meunome, 'arr' => $array]);
});

Route::get('/personagens', function () {
    return view('personagens');
});

Route::get('/personagens/{id}', function ($id) {
    return view('personagem', ['id' => $id]);
})->name('detalhes');