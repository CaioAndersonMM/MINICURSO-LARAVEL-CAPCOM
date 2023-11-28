<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonagensController;
use App\Http\Controllers\PersonagemController;

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

Route::get('/personagem/{id}', function ($id) {
    return view('personagem', ['id' => $id]);
})->name('detalhes');

Route::get('/personagens/create', [PersonagensController::class, 'create'])->name('create.personagem');

Route::post('/addPersonagem','PersonagemController@adicionarPersonagem')->name('adicionar.personagem');

Route::get('/personagens2', [PersonagemController::class, 'index'])->name('personagens2');

Route::get('/personagens/edit/{id}', [PersonagemController::class, 'editar'])->name('editar');

Route::get('/personagens/delete/{id}', [PersonagemController::class, 'deletarPersonagem'])->name('excluir');

Route::put('/personagens/{id}/atualizar', [PersonagemController::class, 'atualizarPersonagem'])->name('atualizar.personagem');

