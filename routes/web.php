<?php

use App\Http\Controllers\ComponentesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WebController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ControllerContribuicoes;
use App\Http\Controllers\CursosController;
use Livewire\Livewire;


Route::controller(WebController::class)->group(function () {
    Route::get('/', 'home')->name('index');
    Route::get('/login', 'login')->name('login');
    Route::get('/registrar', 'register')->name('register');
   
});

Route::controller(UserController::class)->group(function () {
    Route::post('/novo_registro', 'store')->name('novo_registro');
    Route::post('/verifica_login', 'verificaLogin')->name('verifica_login');

});

Route::middleware(['auth'])->group(function () {

    Route::get('/editar', [UserController::class,'editar_user'])->name('editar_user');
    Route::post('/update', [UserController::class,'update_user'])->name('update_user');

    Route::get('/logout', [UserController::class,'logout'])->name('logout');
    Route::get('/user_contribuicao', [UserController::class,'user_contribuicao'])->name('user_contribuicao');
    Route::get('/user_painel_all',[UserController::class, 'user_painel_all'])->name('user_painel_all');
    Route::get('/user_painel', [UserController::class,'user_painel'])->name('user_painel');
    Route::get('/deleta_contribuicao/{id}',[UserController::class, 'deletaContribuicao'])->name('deleta_contribuicao');
    Route::post('/pesquisa_contribuicoes',[UserController::class, 'pesquisa_contribuicoes'])->name('pesquisa_contribuicoes');

    //Route::post('/pesquisa_contribuicoes/{resultado}',[UserController::class, 'pesquisa_contribuicoes_resultado'])->name('pesquisa_contribuicoes_resultado');


    Route::get('/curso',[CursosController::class, 'index'])->name('index_curso');
    Route::post('/curso_salvar',[CursosController::class, 'store'])->name('curso_salvar');
    Route::get('/curso_delete/{id}',[CursosController::class, 'destroy'])->name('curso_delete');


    Route::get('/componente',[ComponentesController::class, 'index'])->name('index_componente');
    Route::post('/componente_salvar',[ComponentesController::class, 'store'])->name('componente_salvar');
    Route::get('/componente_delete/{id}',[ComponentesController::class, 'destroy'])->name('componente_delete');

});


//add eixo na criacao de contribuicao